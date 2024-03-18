// SPDX-License-Identifier: MIT
pragma solidity ^0.8.0;

library ShamirSecretSharing {
    function split(bytes32 secret, uint8 threshold, uint8 shares)
        internal
        pure
        returns (bytes32[] memory)
    {
        require(threshold > 1, "Threshold must be greater than 1");
        require(shares >= threshold, "Number of shares must be >= threshold");

        uint256[2] memory coefficients = generateCoefficients(secret, threshold);
        bytes32[] memory shareValues = new bytes32[](shares);

        for (uint8 i = 1; i <= shares; i++) {
            shareValues[i - 1] = evaluatePolynomial(coefficients, i);
        }

        return shareValues;
    }

    function reconstruct(bytes32[] memory shares)
        internal
        pure
        returns (bytes32)
    {
        uint8 threshold = uint8(shares.length);
        require(threshold > 1, "Threshold must be greater than 1");

        bytes32 sum;
        for (uint8 i = 0; i < threshold; i++) {
            bytes32 numerator = shares[i];
            bytes32 denominatorProd = bytes32(uint256(1));
            for (uint8 j = 0; j < threshold; j++) {
                if (j != i) {
                    denominatorProd = (denominatorProd * bytes32(i + 1)) / bytes32(i + 1 - j);
                }
            }
            denominatorProd = invert(denominatorProd);
            sum = sum + (numerator * denominatorProd);
        }

        return sum;
    }

    function generateCoefficients(bytes32 secret, uint8 threshold)
        private
        pure
        returns (uint256[2] memory)
    {
        uint256[2] memory coefficients;
        coefficients[0] = uint256(secret);
        coefficients[1] = random();

        return coefficients;
    }

    function evaluatePolynomial(uint256[2] memory coefficients, uint8 x)
        private
        pure
        returns (bytes32)
    {
        uint256 sum;
        for (uint8 i = 0; i < coefficients.length; i++) {
            sum = sum + coefficients[i] * uint256(x)**i;
        }
        return bytes32(sum);
    }

    function random() private view returns (uint256) {
        return uint256(keccak256(abi.encodePacked(block.timestamp, block.difficulty)));
    }

    function invert(bytes32 value) private pure returns (bytes32) {
        uint256 prime = 0x7fffffff00000001000000000000000000000000ffffffffffffffff;
        uint256 val = uint256(value);
        uint256 result;
        uint256 a = 1;
        uint256 b = 0;
        uint256 c = val;
        uint256 d = prime;

        while (c != 0) {
            uint256 q = d / c;
            uint256 t = c;
            c = d % c;
            d = t;
            t = a - q * b;
            a = b;
            b = t;
        }

        if (d != 1) {
            return 0;
        }
        if (a < 0) {
            a = a + prime;
        }

        result = a;
        return bytes32(result);
    }
}