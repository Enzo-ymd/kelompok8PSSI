<div class="section-wrap">
<?php section_heading('BAB 06','ANALISIS KOMPARATIF','Tiga pendekatan, tiga titik tekan','Perbandingan dilakukan berdasarkan fokus, struktur, alat analisis, keluaran, skala organisasi, kedekatan implementasi, dan orientasi strategi bisnis.'); ?>
<div class="table-scroll" tabindex="0" aria-label="Tabel perbandingan framework">
<table class="comparison-table">
<thead><tr><th>Aspek</th><th>FEAF</th><th>Zachman</th><th>CSF + Ward & Peppard</th></tr></thead>
<tbody>
<tr><th>Fokus utama</th><td>Blueprint arsitektur As-Is menuju To-Be</td><td>Pemodelan kebutuhan lintas perspektif</td><td>Strategi SI/TI dan prioritas aplikasi</td></tr>
<tr><th>Struktur</th><td>Empat domain arsitektur</td><td>6 perspektif × 6 pertanyaan</td><td>Visi, strategi, CSF, kebutuhan informasi</td></tr>
<tr><th>Alat analisis</th><td>Use case, ERD, activity diagram, diagram jaringan</td><td>Flowchart, ERD, DFD, data dictionary, desain jaringan</td><td>SWOT, IFAS/EFAS, Value Chain, McFarlan, Balanced Scorecard</td></tr>
<tr><th>Keluaran utama</th><td>Blueprint arsitektur enterprise dan standar teknologi</td><td>Desain sistem dari planner hingga implementasi operasional</td><td>Portofolio aplikasi dan roadmap tiga tahun</td></tr>
<tr><th>Skala organisasi pada kasus</th><td>Usaha mikro: satu warung</td><td>Usaha kecil: agen air</td><td>Organisasi menengah-besar: hotel bintang empat</td></tr>
<tr><th>Kedekatan implementasi</th><td>Menengah</td><td>Tinggi</td><td>Rendah hingga menengah</td></tr>
<tr><th>Fokus strategi bisnis</th><td>Menengah</td><td>Rendah hingga menengah</td><td>Tinggi</td></tr>
</tbody></table></div>
<p class="table-note">Catatan metodologis: penilaian kedekatan implementasi dan fokus strategi bisnis merupakan penilaian komparatif penulis paper ini, bukan klaim langsung dari ketiga artikel jurnal.</p>
<div class="rule"></div>
<?php section_heading('16','PERSAMAAN DAN PERBEDAAN','Berangkat dari konteks, berakhir pada artefak yang berbeda'); ?>
<div class="two-column">
 <div><h3>Persamaan</h3><?php bullets(['Ketiganya diawali dengan pemahaman kondisi organisasi.','Menggunakan observasi, wawancara, atau analisis internal.','Menghasilkan rancangan yang terdokumentasi.','Menangani proses manual atau proses yang belum terhubung.','Menjawab persoalan pengelolaan informasi dan data.']); ?></div>
 <div><h3>Perbedaan titik tekan</h3>
 <p class="prose"><strong>FEAF</strong> mengorganisasikan arsitektur ke dalam domain dan membandingkan kondisi saat ini dengan kondisi target sehingga memberi gambaran menyeluruh.</p>
 <p class="prose"><strong>Zachman</strong> menghasilkan dokumentasi lebih rinci karena setiap perspektif pemangku kepentingan dielaborasi. Namun, dokumentasi dapat menjadi panjang dan beberapa sel terasa berulang bagi organisasi kecil.</p>
 <p class="prose"><strong>CSF + Ward & Peppard</strong> memberi hubungan paling kuat antara strategi bisnis dan keputusan investasi SI, tetapi tidak secara langsung menghasilkan desain teknis basis data atau aplikasi secara terperinci.</p></div>
</div>
<div class="rule"></div>
<?php section_heading('17','KELEBIHAN DAN KETERBATASAN','Nilai pendekatan harus dibaca bersama batas buktinya'); ?>
<div class="evaluation-grid">
 <article><h3>FEAF</h3><div><small>KELEBIHAN</small><?php bullets(['Struktur jelas.','Blueprint arsitektur mudah dipahami.','Berguna bagi pengembang dan pemilik usaha.']); ?></div><div><small>KETERBATASAN</small><?php bullets(['Penjelasan transisi As-Is ke To-Be terbatas.','Pengukuran keberhasilan terbatas.','Klaim transaksi lebih cepat belum diuji dengan data terukur.']); ?></div></article>
 <article><h3>Zachman</h3><div><small>KELEBIHAN</small><?php bullets(['Perspektif pemangku kepentingan komprehensif.','Dokumentasi sistem terperinci.','Keluaran dekat dengan implementasi.']); ?></div><div><small>KETERBATASAN</small><?php bullets(['Dokumentasi dapat kompleks dan panjang.','Artikel memuat inkonsistensi istilah sistem sekolah yang tidak terkait.']); ?></div></article>
 <article><h3>CSF + Ward & Peppard</h3><div><small>KELEBIHAN</small><?php bullets(['Penyelarasan strategi bisnis dan TI kuat.','Prioritas aplikasi terstruktur.','Perencanaan terukur melalui roadmap.']); ?></div><div><small>KETERBATASAN</small><?php bullets(['Proses analisis panjang.','Memerlukan keterlibatan manajemen.','Kurang praktis bagi usaha mikro.','Dampak pascaimplementasi belum diukur.']); ?></div></article>
</div>
</div>
