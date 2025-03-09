# test_math_operations.py
import pytest
from math_operations import tambah, kurang, kali, bagi

def test_tambah():
    assert tambah(2, 3) == 5
    assert tambah(-1, 1) == 0

def test_kurang():
    assert kurang(5, 3) == 2
    assert kurang(10, 20) == -10

def test_kali():
    assert kali(4, 3) == 12
    assert kali(-2, 3) == -6

def test_bagi():
    assert bagi(10, 2) == 5
    assert bagi(9, 3) == 3

    # Menguji pembagian dengan nol
    with pytest.raises(ValueError, match="Pembagian dengan nol tidak diperbolehkan"):
        bagi(5, 0)