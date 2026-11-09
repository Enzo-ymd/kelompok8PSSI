<div class="section-wrap">
<?php section_heading('BAB 03','STUDI KASUS FEAF','Warung XYZ — rancangan POS untuk usaha mikro','Studi kasus Warung XYZ di Cibolang Kaler, Sukabumi, memperlihatkan bagaimana arsitektur enterprise dapat disederhanakan untuk kebutuhan operasional usaha kecil.'); ?>
<div class="editorial-split">
 <div class="side-note"><span class="large-index">07</span><p>Kondisi awal dan metode penelitian.</p></div>
 <div class="content-column">
  <?php paragraph('Warung XYZ mencatat penjualan secara manual di buku dan menghitung total transaksi menggunakan kalkulator. Belum tersedia pencatatan persediaan yang terintegrasi. Penyusunan laporan harian dan bulanan membutuhkan waktu relatif lama, sementara pencatatan dan pelaporan rentan terhadap kesalahan.'); ?>
  <h3>Metode deskriptif kualitatif</h3>
  <?php bullets(['Observasi terhadap proses operasional.','Wawancara dengan pemilik dan kasir.','Studi literatur.']); ?>
  <p class="prose">Penelitian dilaksanakan melalui empat tahap: mengidentifikasi kondisi As-Is; menganalisis kebutuhan dan arsitektur bisnis; merancang arsitektur data, aplikasi, dan teknologi; serta menyusun blueprint To-Be.</p>
 </div>
</div>
<div class="rule"></div>
<?php section_heading('08','PENERAPAN FEAF','Empat komponen arsitektur Warung XYZ'); ?>
<div class="numbered-essays">
 <article><span>01</span><div><h3>Current Architecture</h3><p class="prose">Proses yang berjalan menggunakan buku catatan dan kalkulator. Belum tersedia aplikasi maupun jaringan internet yang digunakan untuk mendukung proses tersebut.</p></div></article>
 <article><span>02</span><div><h3>Model Architecture</h3><p class="prose">Sistem yang diusulkan memiliki dua aktor utama, yaitu Admin/Owner dan Kasir. Fungsinya mencakup login, pengelolaan produk, pengelolaan pengguna, transaksi penjualan, pencetakan struk, dan pelaporan penjualan.</p>
 <div class="technical-grid"><div><small>AKTOR</small><strong>Admin / Owner<br>Kasir</strong></div><div><small>TABEL BASIS DATA</small><strong>Products<br>Transactions<br>Transaction details<br>Users</strong></div><div><small>ARSITEKTUR TEKNOLOGI</small><strong>Web/mobile client<br>Application server<br>Database server<br>Internet connection</strong></div></div></div></article>
 <article><span>03</span><div><h3>Standards</h3><p class="prose">Standar yang diusulkan meliputi laptop atau smartphone; Windows atau Android; MySQL; Apache (XAMPP); aplikasi berbasis web; role-based access control; pencadangan data berkala; dan HTTPS.</p></div></article>
 <article><span>04</span><div><h3>Target Architecture</h3><p class="prose">Arsitektur target dijelaskan melalui activity diagram untuk proses login, transaksi penjualan, pengelolaan produk, laporan penjualan, dan pengelolaan pengguna. Hasil akhirnya berupa blueprint satu halaman yang merangkum empat domain arsitektur.</p></div></article>
</div>
<div class="rule"></div>
<?php section_heading('09','TEMUAN DAN EVALUASI','Blueprint sebagai panduan implementasi bertahap'); ?>
<?php paragraph('Artikel menyimpulkan bahwa FEAF dapat diadaptasi untuk UMKM dengan menyesuaikan ruang lingkup dan kompleksitasnya. Blueprint dapat menjadi panduan bagi Warung XYZ untuk menerapkan POS secara bertahap, sekaligus memberi gambaran mengenai kondisi saat ini dan kondisi sistem yang dituju.'); ?>
<blockquote class="editorial-quote">Manfaat yang diusulkan perlu dibedakan dari hasil yang telah dibuktikan melalui pengukuran.</blockquote>
<div class="caution-grid"><div><span>01</span><p>Transisi dari As-Is ke To-Be masih dijelaskan secara terbatas.</p></div><div><span>02</span><p>Pengukuran keberhasilan belum dikembangkan secara memadai.</p></div><div><span>03</span><p>Klaim peningkatan kecepatan transaksi belum divalidasi dengan data hasil pengukuran.</p></div></div>
</div>
