# KP-BPSDMJABAR

Repositori ini berisi source code proyek Kerja Praktik (KP) terkait **Website BPSDM Jabar**, khususnya pada platform **Jabar CorpU Talent** — Learning Management System (LMS) untuk pembelajaran digital Aparatur Sipil Negara (ASN) dan masyarakat umum di lingkungan Pemerintah Provinsi Jawa Barat.

Proyek ini merupakan bagian dari program magang/KP di Badan Pengembangan Sumber Daya Manusia (BPSDM) Provinsi Jawa Barat, dengan fokus kontribusi pada pengembangan sisi desain UI/UX website tersebut.

## Struktur File

| File | Keterangan |
|---|---|
| `pilihlogin.php` | Halaman awal untuk memilih kategori login (menampilkan 4 pilihan kategori pengguna) |
| `loginASNpemprov.php` | Halaman login khusus untuk ASN Pemprov Jabar |
| `loginASNlintas.php` | Halaman login untuk ASN Instansi Lainnya |
| `loginkontrak.php` | Halaman login untuk Tenaga Kontrak Pemerintahan |
| `loginmasyarakatumum.php` | Halaman login untuk Masyarakat Umum |
| `index.php` | Halaman beranda Jabar CorpU Talent |
| `kolaborasi.php` | Halaman kolaborasi |
| `Personalia.php` | Halaman personalia |

## Fitur yang Dikerjakan
- Menambahkan efek hover pada beberapa elemen tampilan
- Memperbaiki beberapa tampilan (UI) yang belum sesuai
- Menambahkan button pada fitur login
- Mendesain ulang tampilan halaman login (Jabar CorpU Talent) agar tidak terkesan kaku dan monoton, serta memberikan pembeda visual yang lebih jelas antar masing-masing pilihan login (ASN Pemprov Jabar, ASN Instansi Lainnya, Tenaga Kontrak Pemerintahan, dan Masyarakat Umum)
- Menambahkan kalimat sapaan dinamis beserta nama pengguna yang sedang melakukan login
- Migrasi seluruh halaman dari HTML statis ke PHP, sebagai persiapan integrasi dengan database dan penambahan fitur dinamis (login, penyimpanan data, dsb)
- Perbaikan dan penambahan fitur lainnya akan terus dilakukan seiring proses pengecekan pada website

## Cara Menjalankan

Karena project ini sudah menggunakan **PHP**, dibutuhkan local server (seperti XAMPP) untuk menjalankannya — tidak bisa dibuka langsung lewat Live Server atau double click file di browser.

1. Install [XAMPP](https://www.apachefriends.org/) di komputer kamu.
2. Clone repositori ini ke dalam folder `htdocs` milik XAMPP:
   ```
   git clone https://github.com/EkaPutriAzhari13/KP-BPSDMJABAR.git
   ```
   Contoh lokasi: `C:\xampp\htdocs\KP-BPSDMJABAR`
3. Buka **XAMPP Control Panel**, lalu klik **Start** pada modul **Apache**.
4. Buka browser, akses:
   ```
   http://localhost/KP-BPSDMJABAR/index.php
   ```

## Tim Pengembang
1. Mulya Delani (123140019)
2. Eka Putri Azhari Ritonga (123140028)
3. Atalie Salsabila (123140027)

*Proyek ini merupakan bagian dari Kerja Praktik (KP) Program Studi Teknik Informatika, Institut Teknologi Sumatera (ITERA).*