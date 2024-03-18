// SPDX-License-Identifier: MIT
pragma solidity ^0.8.0;

contract UserRegistration {
    struct UserData {
        string username;
        address publicKey;
        string ciphertext;
    }

    mapping(string => UserData) public userData;

    function storeUserData(string memory _username, address _publicKey, string memory _ciphertext) public {
        userData[_username] = UserData(_username, _publicKey, _ciphertext);
    }

    function getUserData(string memory _username) public view returns (address, string memory) {
        return (userData[_username].publicKey, userData[_username].ciphertext);
    }
}