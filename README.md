# 📌 Pengujian Perangkat Lunak (Software Testing)

## 📖 Deskripsi
Repositori ini dibuat untuk mendukung kegiatan perkuliahan **Pengujian Perangkat Lunak**. Berisi materi, contoh kode, dan studi kasus terkait dengan teknik pengujian perangkat lunak menggunakan **pytest**, serta konsep dasar dalam software testing.

## 🎯 Tujuan Pembelajaran
- Memahami dasar-dasar pengujian perangkat lunak
- Menggunakan **pytest** untuk melakukan **unit testing**
- Mengimplementasikan teknik pengujian otomatis
- Menganalisis hasil pengujian dan mengidentifikasi bug dalam perangkat lunak

## 📂 Struktur Folder
```
├── src/               # Kode sumber aplikasi yang diuji
├── tests/             # Kumpulan file pengujian
│   ├── test_login.py  # Contoh pengujian autentikasi
│   ├── test_math.py   # Pengujian operasi matematika sederhana
│   └── ...           
├── docs/              # Materi dan referensi tambahan
├── README.md          # Dokumentasi repositori
└── requirements.txt   # Dependensi yang diperlukan (pytest, dll)
```

## 🚀 Instalasi dan Menjalankan Pengujian
### 1️⃣ Clone Repositori
```bash
git clone https://github.com/username/repo-pengujian.git
cd repo-pengujian
```

### 2️⃣ Install Dependensi
Pastikan Anda telah menginstal **Python** dan **pip**, lalu jalankan:
```bash
pip install -r requirements.txt
```

### 3️⃣ Jalankan Pengujian dengan pytest
```bash
pytest tests/
```

## 🛠 Contoh Pengujian
### Contoh Fungsi yang Akan Diuji
```python
def tambah(a, b):
    return a + b
```

### Contoh File **test_tambah.py**
```python
import pytest
from src.math_utils import tambah  # Sesuaikan dengan struktur folder Anda

def test_tambah():
    assert tambah(2, 3) == 5
    assert tambah(-1, 1) == 0
    assert tambah(0, 0) == 0
```

### Hasil Pengujian (Jika Berhasil ✅)
```
========================= test session starts =========================
platform win32 -- Python 3.10, pytest-8.3.5
collected 1 item                                                       

test_tambah.py .                                              [100%]

========================== 1 passed in 0.01s ==========================
```

## 📚 Referensi
- [Dokumentasi pytest](https://docs.pytest.org/)
- [Software Testing Fundamentals](https://www.softwaretestinghelp.com/)
- [Best Practices in Unit Testing](https://martinfowler.com/articles/practical-test-pyramid.html)

---
💡 *Jangan lupa untuk selalu menjalankan pengujian sebelum melakukan deploy aplikasi!* 🚀
