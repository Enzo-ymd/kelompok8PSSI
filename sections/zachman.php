<div class="section-wrap">
<?php section_heading('BAB 05','STUDI KASUS ZACHMAN','Agen Air Baraya Segar — menata proses pembelian supplier','Zachman digunakan untuk memetakan kebutuhan sistem pembelian melalui perspektif organisasi yang berbeda, dari ruang lingkup hingga operasi.'); ?>
<div class="editorial-split">
 <div class="side-note"><span class="large-index">12</span><p>Latar belakang dan metode penelitian.</p></div>
 <div class="content-column">
  <?php paragraph('Proses pemesanan kepada supplier dilakukan melalui percakapan WhatsApp. Kondisi ini dapat menyebabkan keterlambatan pesanan. Persediaan supplier tidak dapat dipantau dengan baik sehingga pesanan berisiko gagal ketika ketersediaan stok tidak diketahui. Selain itu, faktur kertas menumpuk sebagai arsip riwayat transaksi.'); ?>
  <p class="prose">Metode penelitian meliputi observasi, wawancara, studi literatur, serta pemetaan kebutuhan organisasi ke dalam matriks Zachman.</p>
 </div>
</div>
<div class="rule"></div>
<?php section_heading('13','PENERAPAN ZACHMAN','Enam perspektif dokumentasi'); ?>
<div class="perspective-stack">
 <article><span class="perspective-no">01</span><div><h3>Planner</h3><p class="prose">Ruang lingkup mencakup data registrasi, barang, pembayaran, riwayat transaksi, dan supplier. Aktor yang diidentifikasi ialah pemilik, pegawai toko, dan pegawai supplier. Lokasi organisasi berada di ruko Pasar Cicurug. Visi organisasi dinyatakan sebagai “selalu tersedia dan dibutuhkan”.</p></div></article>
 <article><span class="perspective-no">02</span><div><h3>Owner</h3><p class="prose">Entitas bisnis meliputi supplier, pegawai toko, pegawai supplier, barang supplier, pembayaran, dan kendaraan pengiriman. Perspektif ini juga memuat flowchart proses pembelian.</p><div class="mini-flow"><span>Permintaan</span><b>→</b><span>Pemesanan</span><b>→</b><span>Pengiriman</span><b>→</b><span>Pembayaran</span></div></div></article>
 <article><span class="perspective-no">03</span><div><h3>Designer</h3><p class="prose">Rancangan mencakup Entity Relationship Diagram (ERD) dan Data Flow Diagram (DFD). Cakupannya meliputi proses pembayaran, laporan transaksi, pembaruan data produk, serta rancangan jaringan internet.</p></div></article>
 <article><span class="perspective-no">04</span><div><h3>Builder</h3><p class="prose">Artefak teknis yang dipertahankan meliputi physical data model, data dictionary, serta teknologi PHP, HTML, CSS, MySQL, dan Apache.</p></div></article>
 <article><span class="perspective-no">05</span><div><h3>Detailed Representation</h3><p class="prose">Perspektif ini menjelaskan tabel basis data secara terperinci dan hak akses pengguna.</p></div></article>
 <article><span class="perspective-no">06</span><div><h3>Functioning Enterprise</h3><p class="prose">Pemilik dapat melihat laporan; pegawai toko mengelola pembelian; dan pegawai supplier mengelola pesanan. Dokumentasi juga mempertahankan daftar pengguna, jadwal perancangan empat bulan, serta SOP penggunaan sistem.</p></div></article>
</div>
<div class="rule"></div>
<?php section_heading('14','HASIL DAN EVALUASI','Kelengkapan pemetaan dan konsistensi sumber'); ?>
<?php paragraph('Rancangan diharapkan membantu mengatasi keterlambatan pembelian dan penumpukan dokumen kertas melalui pemantauan stok supplier, riwayat transaksi terkomputerisasi, dan pengelolaan pembelian yang lebih terstruktur. Penulis menyimpulkan bahwa Zachman menyediakan pemetaan komprehensif atas data, proses, lokasi, orang, waktu, dan motivasi.'); ?>
<div class="editorial-warning"><span class="eyebrow">CATATAN KRITIS SUMBER</span><h3>Ketidakkonsistenan objek penelitian</h3><p>Artikel memuat rujukan yang tidak sesuai dengan kasus pembelian supplier, yaitu sistem penerimaan siswa baru, sistem pembayaran uang sekolah, serta kata kunci yang merujuk pada sekolah menengah kejuruan. Ketidaksesuaian ini perlu diperhatikan ketika artikel digunakan sebagai referensi akademik karena dapat mengurangi kejelasan konteks dan keandalan dokumentasi sumber.</p></div>
</div>
