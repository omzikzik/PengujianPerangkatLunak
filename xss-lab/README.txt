XSS PRAKTIKUM - Security Testing

1. REFLECTED XSS
   - Buka: reflected_xss.php
   - Input: <script>alert('Reflected XSS')</script>

2. STORED XSS
   - Buka: stored_xss.php
   - Input: <script>alert('Stored XSS')</script>
   - Input akan tersimpan di sesi dan tampil ulang

3. DOM-BASED XSS
   - Buka: dom_xss.html?nama=<img src=x onerror=alert('DOM XSS')>

Instruksi:
- Jalankan menggunakan XAMPP/Laragon
- Letakkan semua file di folder: htdocs/xss-lab/
- Akses via browser: http://localhost/xss-lab/
