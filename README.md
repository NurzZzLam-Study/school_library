# Database Class

## Lokasi

```text
app/config/Database.php
```

---

## Deskripsi

`Database.php` merupakan class yang bertanggung jawab untuk membangun dan mengelola koneksi antara aplikasi dengan database MySQL.

Class ini menjadi pusat koneksi database sehingga seluruh model dalam aplikasi menggunakan sumber koneksi yang sama.

---

## Tanggung Jawab

* Menyimpan konfigurasi database.
* Membuat koneksi ke MySQL.
* Memastikan koneksi berhasil.
* Mengatur karakter database menjadi `utf8mb4`.
* Mengembalikan objek koneksi (`mysqli`) kepada model yang membutuhkan.

---

## Struktur Class

```text
Database
│
├── host
├── database
├── username
├── password
├── connection
│
└── connect()
```

---

## Property

### `$host`

Alamat server database.

Contoh:

```php
localhost
```

---

### `$database`

Nama database yang akan digunakan.

Contoh:

```php
school_library_db
```

---

### `$username`

Username MySQL.

Contoh:

```php
root
```

---

### `$password`

Password MySQL.

Pada Laragon atau XAMPP biasanya dikosongkan.

---

### `$connection`

Menyimpan objek koneksi `mysqli`.

Nilai awal adalah `null` dan akan diisi setelah koneksi berhasil dibuat.

---

## Method

### `connect()`

Method ini digunakan untuk membuat koneksi ke database.

Jika koneksi belum pernah dibuat maka class akan:

1. Membuat objek `mysqli`.
2. Memeriksa apakah koneksi berhasil.
3. Mengatur charset menjadi `utf8mb4`.
4. Mengembalikan objek koneksi.

Apabila koneksi sudah pernah dibuat sebelumnya, method ini akan langsung mengembalikan koneksi tersebut tanpa membuat koneksi baru.

---

## Alur Kerja

```text
Aplikasi
    │
    ▼
Database::connect()
    │
    ▼
Membuat koneksi MySQL
    │
    ▼
Cek Error
    │
    ▼
Set Charset utf8mb4
    │
    ▼
Return mysqli Connection
```

---

## Cara Menggunakan

```php
require_once '../config/Database.php';

$database = new Database();

$conn = $database->connect();
```

---

## Kenapa Menggunakan Class?

Keuntungan menggunakan class dibandingkan pendekatan procedural:

* Kode lebih rapi.
* Mudah dikembangkan.
* Mendukung konsep Object Oriented Programming (OOP).
* Seluruh model menggunakan pola koneksi yang sama.
* Memudahkan migrasi ke framework seperti Laravel di masa mendatang.

---

## Hubungan Dengan MVC

```text
Controller
      │
      ▼
Model
      │
      ▼
Database
      │
      ▼
MySQL
```

Controller tidak berkomunikasi langsung dengan database.

Seluruh akses database dilakukan melalui Model, sedangkan Model memperoleh koneksi dari `Database.php`.

---

## Catatan

Class ini hanya bertanggung jawab terhadap koneksi database.

Class ini **tidak** boleh berisi:

* Query SQL
* Login
* Session
* Validasi
* HTML
* Logika bisnis aplikasi

Dengan demikian setiap class memiliki satu tanggung jawab (Single Responsibility Principle), sehingga kode lebih mudah dipelihara dan dikembangkan.
