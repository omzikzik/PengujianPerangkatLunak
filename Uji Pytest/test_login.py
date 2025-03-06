# test_login.py
import pytest
from login import login_user

def test_login_success():
    """Test login dengan kredensial yang benar."""
    assert login_user("admin", "password123") == "Login berhasil"
    assert login_user("user", "mypassword") == "Login berhasil"

def test_login_wrong_password():
    """Test login dengan password yang salah."""
    assert login_user("admin", "wrongpassword") == "Login gagal"

def test_login_invalid_user():
    """Test login dengan username yang tidak terdaftar."""
    assert login_user("unknown", "password123") == "Login gagal"

def test_login_empty_credentials():
    """Test login dengan username dan password kosong."""
    assert login_user("", "") == "Login gagal"