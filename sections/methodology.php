<div class="section-wrap">
<?php section_heading('BAB 02','LANDASAN TEORI','Arsitektur sebagai bahasa organisasi','Landasan konseptual untuk memahami hubungan antara strategi bisnis, informasi, aplikasi, dan infrastruktur teknologi.'); ?>
<div class="feature-essay">
 <div><span class="eyebrow">03 / ENTERPRISE ARCHITECTURE</span><h3>Melihat organisasi sebagai satu kesatuan.</h3></div>
 <div><?php paragraph('Enterprise Architecture (EA) merupakan pendekatan terorganisasi untuk menyelaraskan strategi teknologi informasi dengan tujuan bisnis. EA menggambarkan hubungan antara struktur organisasi, proses bisnis, sistem informasi, dan infrastruktur teknologi. Dengan gambaran yang menyeluruh, organisasi dapat mengurangi fungsi sistem yang tumpang tindih, menjaga konsistensi data, mendukung pengambilan keputusan, serta membangun cetak biru arsitektur.'); ?></div>
</div>
<div class="domain-diagram" aria-label="Empat domain enterprise architecture">
 <?php foreach (['Business Architecture'=>'Struktur dan proses bisnis','Data Architecture'=>'Informasi dan entitas data','Application Architecture'=>'Layanan dan fungsi aplikasi','Technology Architecture'=>'Infrastruktur dan platform'] as $name=>$desc): ?>
 <div class="domain"><span><?= e(str_pad((string)(array_search($name,array_keys(['Business Architecture'=>1,'Data Architecture'=>2,'Application Architecture'=>3,'Technology Architecture'=>4]))+1),2,'0',STR_PAD_LEFT)) ?></span><h3><?= e($name) ?></h3><p><?= e($desc) ?></p></div>
 <?php endforeach; ?>
</div>
<div class="rule"></div>
<?php section_heading('04','FEDERAL ENTERPRISE ARCHITECTURE FRAMEWORK','FEAF: dari kondisi saat ini menuju sasaran','FEAF dikembangkan oleh pemerintah federal Amerika Serikat untuk menyediakan pendekatan terstandar dalam perencanaan, implementasi, dan pengelolaan arsitektur sistem informasi enterprise.'); ?>
<?php paragraph('FEAF mendukung kerja sama antarunit organisasi, mengurangi duplikasi fungsi sistem, dan memandu transisi dari arsitektur saat ini (As-Is) menuju arsitektur target (To-Be). Empat domain arsitekturnya meliputi Business Architecture, Data Architecture, Application Architecture, dan Technology Architecture.'); ?>
<div class="transition-flow"><div><small>AS-IS</small><strong>Current<br>Architecture</strong></div><b>→</b><div><small>MODEL</small><strong>Model<br>Architecture</strong></div><b>→</b><div><small>STANDAR</small><strong>Standards</strong></div><b>→</b><div><small>TO-BE</small><strong>Target<br>Architecture</strong></div></div>
<div class="rule"></div>
<?php section_heading('05','ZACHMAN FRAMEWORK','Matriks untuk mendokumentasikan perspektif','Zachman merupakan framework arsitektur enterprise berbasis matriks yang mengorganisasikan deskripsi sistem melalui enam pertanyaan fundamental dan enam perspektif.'); ?>
<div class="zachman-intro">
 <div><h3>Enam pertanyaan</h3><?php bullets(['What — Data','How — Process','Where — Location','Who — People','When — Time','Why — Motivation']); ?></div>
 <div><h3>Enam perspektif</h3><?php bullets(['Planner','Owner','Designer','Builder','Detailed Representation','Functioning Enterprise']); ?></div>
</div>
<p class="prose">Setiap sel matriks dielaborasi untuk mendokumentasikan kebutuhan sistem dari tingkat kontekstual hingga implementasi operasional. Pilih sel pada matriks interaktif di bawah untuk melihat pasangan perspektif dan pertanyaan yang membentuk dokumentasi.</p>
<div class="matrix-wrap">
 <div class="matrix-controls" id="matrix-controls" aria-label="Perspektif Zachman"></div>
 <div class="matrix-detail" id="matrix-detail" aria-live="polite"><span class="eyebrow">PENJELASAN SEL</span><h3>Pilih perspektif dan pertanyaan</h3><p>Setiap perpotongan menunjukkan jenis deskripsi yang perlu didokumentasikan.</p></div>
</div>
<div class="rule"></div>
<?php section_heading('06','PERENCANAAN SI/TI, WARD & PEPPARD, DAN CSF','Strategi yang diterjemahkan menjadi kebutuhan informasi','Perencanaan strategis SI/TI mengidentifikasi portofolio aplikasi yang mendukung rencana bisnis dan tujuan organisasi.'); ?>
<?php paragraph('Dalam pendekatan Ward & Peppard, analisis dapat menggunakan SWOT, IFAS, EFAS, Value Chain, Critical Success Factor, dan McFarlan Strategic Grid. CSF merupakan metode untuk mengidentifikasi faktor-faktor kritis yang harus berhasil agar tujuan organisasi tercapai.'); ?>
<div class="strategic-flow">
 <?php foreach (['Visi & Misi','Tujuan Bisnis','Critical Success Factors','Kebutuhan Informasi','Strategi SI/TI'] as $i=>$step): ?><div class="flow-step"><small>0<?= $i+1 ?></small><strong><?= e($step) ?></strong></div><?php if($i<4): ?><span class="flow-arrow">→</span><?php endif; ?><?php endforeach; ?>
</div>
<p class="prose">Proses CSF dimulai dengan mengidentifikasi visi, misi, dan tujuan; menentukan Critical Success Factors; kemudian menerjemahkan CSF menjadi kebutuhan informasi. Dengan demikian, CSF menghubungkan strategi bisnis dengan strategi sistem informasi.</p>
</div>
