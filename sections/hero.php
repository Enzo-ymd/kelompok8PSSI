<div class="hero-shell">
  <div class="hero-topline"><span>KAJIAN AKADEMIK · <?= e($site['year']) ?></span><span>UIN STS JAMBI</span></div>
  <div class="hero-content">
    <p class="eyebrow gold">PERENCANAAN SISTEM INFORMASI</p>
    <h1><?= e($site['title']) ?></h1>
    <p class="hero-subtitle"><?= e($site['subtitle']) ?></p>
    <p class="hero-description"><?= e($site['description']) ?></p>
    <a class="text-link" href="#introduction">Mulai membaca <span>↓</span></a>
  </div>
  <div class="hero-bottom">
    <div><span class="eyebrow">PENYUSUN</span><strong><?= e($site['group']) ?></strong></div>
    <div><span class="eyebrow">DOSEN PENGAMPU</span><strong><?= e($site['lecturer']) ?></strong></div>
    <div><span class="eyebrow">PROGRAM AKADEMIK</span><strong><?= e($site['program']) ?> · <?= e($site['year']) ?></strong></div>
  </div>
</div>
<div class="contributors">
  <p class="eyebrow">TIM PENULIS</p>
  <div class="member-grid">
  <?php foreach ($site['members'] as $index => $member): ?>
    <div class="member"><span>0<?= $index + 1 ?></span><strong><?= e($member['name']) ?></strong><small><?= e($member['id']) ?></small></div>
  <?php endforeach; ?>
  </div>
  <p class="institution"><?= e($site['faculty']) ?> · <?= e($site['university']) ?></p>
</div>
