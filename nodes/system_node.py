import threading
import requests

# Simulated user database
USER_DB = {
    "alice": ("mypassword", "1990-01-01")
}

class SystemNode:
    def __init__(self, node_id, share, contract_address):
        self.node_id = node_id
        self.share = share
        self.contract_address = contract_address

    def run(self):
        print(f"System Node {self.node_id} listening for requests...")
        server = threading.Thread(target=self.listen_for_requests)
        server.start()

    def listen_for_requests(self):
        while True:
            # Listen for user credential requests
            # ... (implementation details omitted for brevity)
            username, password, dob = receive_user_credentials()

            if self.verify_user(username, password, dob):
                self.send_share_to_contract(username)

    def verify_user(self, username, password, dob):
        if username in USER_DB:
            stored_password, stored_dob = USER_DB[username]
            if password == stored_password and dob == stored_dob:
                return True
        return False

    def send_share_to_contract(self, username):
        data = {"username": username, "share": self.share}
        requests.post(f"http://localhost:8000/submit_share", json=data)
        print(f"System Node {self.node_id} sent share for user {username}")

# Create and start system nodes
node1 = SystemNode(1, "share1", "0x...")
node2 = SystemNode(2, "share2", "0x...")
# ... (create more nodes)

node1.run()
node2.run()
# ... (start more nodes)