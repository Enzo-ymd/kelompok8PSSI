<?php
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/navigation.php';
?>
<main id="main">
<?php foreach ($sections as $item): ?>
  <section id="<?= e($item['id']) ?>" class="page-section section-<?= e($item['id']) ?>" data-section="<?= e($item['id']) ?>">
    <?php render_section($item['file']); ?>
  </section>
<?php endforeach; ?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
