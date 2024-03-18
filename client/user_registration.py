import secrets
import hashlib
from web3 import Web3, HTTPProvider
from shamir import ShareSecret

# Connect to an Ethereum node (replace with your desired node URL)
w3 = Web3(HTTPProvider('http://localhost:8545'))

# Load the UserRegistration contract
with open('blockchain/UserRegistration.sol') as contract_file:
    contract_source_code = contract_file.read()

# Compile the contract
compiled_contract = w3.eth.compile_solidity(contract_source_code)

# Get the contract ABI and bytecode
contract_abi = compiled_contract['<contract_name>']['abi']
contract_bytecode = compiled_contract['<contract_name>']['bin']

# Deploy the contract
ContractConstructor = w3.eth.contract(abi=contract_abi, bytecode=contract_bytecode)
tx_hash = ContractConstructor.constructor().transact()
tx_receipt = w3.eth.waitForTransactionReceipt(tx_hash)
contract_address = tx_receipt.contractAddress

# Create the contract instance
contract = w3.eth.contract(address=contract_address, abi=contract_abi)

def register_user(username, password, dob):
    # 1. Generate ECDSA key pair
    private_key = secrets.token_hex(32)
    public_key = w3.eth.account.privateKeyToAccount(private_key).address

    # 2. Generate random plaintext
    plaintext = secrets.token_hex(16)

    # 3. Encrypt plaintext with public key
    encrypted_plaintext = w3.eth.account.encrypt(private_key, plaintext)

    # 4. Store public key and ciphertext on the blockchain
    store_tx = contract.functions.storeUserData(
        username,
        public_key,
        encrypted_plaintext
    ).buildTransaction({
        'from': w3.eth.accounts[0],
        'gas': 300000,
        'gasPrice': w3.toWei('50', 'gwei'),
        'nonce': w3.eth.getTransactionCount(w3.eth.accounts[0])
    })
    signed_tx = w3.eth.account.signTransaction(store_tx, private_key=w3.eth.accounts[0].key)
    tx_hash = w3.eth.sendRawTransaction(signed_tx.rawTransaction)
    w3.eth.waitForTransactionReceipt(tx_hash)

    # 5. Shamir's Secret Sharing
    secret = hashlib.sha256(private_key.encode()).digest()
    n, k = 5, 3  # Example: split into 5 shares, 3 required to reconstruct
    shares = ShareSecret.split_secret(secret, n, k)

    # 6. Distribute shares to system nodes (simulated here)
    for i, share in enumerate(shares):
        print(f"Node {i+1} share: {share.hex()}")

    # 7. Dispose of the original private key
    del private_key

    print(f"User {username} registered successfully!")

# Example usage
register_user("alice", "mypassword", "1990-01-01")