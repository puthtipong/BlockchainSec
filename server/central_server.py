from flask import Flask, request
import requests

app = Flask(__name__)

# Smart contract address and ABI
CONTRACT_ADDRESS = "0x..."
CONTRACT_ABI = {...}

@app.route("/submit_share", methods=["POST"])
def submit_share():
    data = request.get_json()
    username = data["username"]
    share = data["share"]

    # Submit the share to the smart contract
    payload = {
        "jsonrpc": "2.0",
        "method": "submitShare",
        "params": [username, share],
        "id": 1
    }
    response = requests.post(f"http://localhost:8545", json=payload)

    if response.status_code == 200:
        return f"Share submitted for user {username}", 200
    else:
        return f"Error submitting share for user {username}", 500

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=8000)