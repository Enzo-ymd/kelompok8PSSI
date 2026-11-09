# Luxury Academic Presentation — SI Strategy

Website presentasi akademik berbasis PHP, HTML5, CSS3, dan vanilla JavaScript.

## Menjalankan secara lokal

Persyaratan: PHP 8.0+.

```bash
php -S localhost:8000
```

Buka `http://localhost:8000`.

Jika menggunakan XAMPP, salin folder proyek ke `htdocs/` lalu buka melalui `http://localhost/luxury_si_presentation/`.

## Struktur

- `index.php`: perakit halaman satu halaman.
- `config/config.php`: metadata akademik, daftar bagian, helper escaping, dan loader section yang aman.
- `includes/`: navigasi dan footer bersama.
- `sections/`: konten tiap bab.
- `assets/css/style.css`: sistem desain responsif.
- `assets/js/main.js`: navigasi, progress, reveal, tombol kembali, dan matriks Zachman interaktif.

## Catatan konten

Konten disusun dari spesifikasi master prompt yang disertakan pengguna. File PowerPoint sumber (.pptx) tidak tersedia sebagai lampiran terpisah dalam sesi ini, sehingga kesetaraan kata demi kata terhadap seluruh 19 slide belum dapat diverifikasi. Sebelum publikasi akademik final, cocokkan isi dengan PPTX asli, khususnya gambar/diagram, detail tabel, dan materi slide yang tidak tercantum dalam brief.

## Kustomisasi

Ubah identitas kelompok dan metadata pada `config/config.php`. Ubah materi pada file di `sections/`. Warna dan tipografi berada di `assets/css/style.css`.
