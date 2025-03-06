# login.py

users = {
    "admin": "password123",
    "user": "mypassword",
    "guest": "guest123"
}

def login_user(username, password):
    """Fungsi untuk memeriksa login berdasarkan username dan password."""
    if username in users and users[username] == password:
        return "Login berhasil"
    return "Login gagal"