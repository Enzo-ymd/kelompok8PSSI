<a class="skip-link" href="#main">Lewati navigasi</a>
<nav class="site-nav" aria-label="Navigasi utama">
  <a class="wordmark" href="#overview" aria-label="Kembali ke awal">SI<span> / </span>STRATEGY</a>
  <button class="menu-toggle" id="menu-toggle" aria-expanded="false" aria-controls="nav-links" aria-label="Buka menu"><span></span><span></span></button>
  <div class="nav-links" id="nav-links">
    <?php foreach ($sections as $item): ?>
      <a href="#<?= e($item['id']) ?>" data-nav="<?= e($item['id']) ?>"><?= e($item['nav']) ?></a>
    <?php endforeach; ?>
  </div>
</nav>
