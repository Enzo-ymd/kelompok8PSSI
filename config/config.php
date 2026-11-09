<?php
declare(strict_types=1);

$site = [
  'title' => 'Perencanaan dan Strategi Sistem Informasi',
  'subtitle' => 'Perbandingan FEAF, Zachman Framework, dan Critical Success Factor',
  'description' => 'Memahami pendekatan perencanaan sistem informasi melalui tiga studi kasus organisasi.',
  'program' => 'Program Studi Sistem Informasi',
  'faculty' => 'Fakultas Sains dan Teknologi',
  'university' => 'Universitas Islam Negeri Sulthan Thaha Saifuddin Jambi',
  'year' => '2026',
  'group' => 'KELOMPOK 8',
  'lecturer' => 'Sugeng Wibowo, S.Kom., M.Kom.',
  'members' => [
    ['name'=>'Ahmad Dzaky Naufal','id'=>'701250153'],
    ['name'=>'Lulita Istiqomah','id'=>'701250168'],
    ['name'=>'Kauli Sonika','id'=>'701250145'],
    ['name'=>'Rima Fitriana','id'=>'701250142'],
    ['name'=>'M. Iqbal','id'=>'701250181'],
  ],
];

$sections = [
 ['id'=>'overview','nav'=>'Overview','file'=>'hero.php','chapter'=>''],
 ['id'=>'introduction','nav'=>'Introduction','file'=>'introduction.php','chapter'=>'01'],
 ['id'=>'foundation','nav'=>'Theoretical Foundation','file'=>'methodology.php','chapter'=>'02'],
 ['id'=>'feaf','nav'=>'FEAF','file'=>'feaf.php','chapter'=>'03'],
 ['id'=>'csf','nav'=>'CSF','file'=>'case-hotel.php','chapter'=>'04'],
 ['id'=>'zachman','nav'=>'Zachman','file'=>'zachman.php','chapter'=>'05'],
 ['id'=>'comparison','nav'=>'Comparative Analysis','file'=>'comparison.php','chapter'=>'06'],
 ['id'=>'recommendations','nav'=>'Recommendations','file'=>'recommendations.php','chapter'=>'07'],
 ['id'=>'conclusion','nav'=>'Conclusion','file'=>'conclusion.php','chapter'=>'08'],
 ['id'=>'references','nav'=>'References','file'=>'references.php','chapter'=>'09'],
];
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
function section_heading(string $number, string $eyebrow, string $title, string $intro=''): void {
  echo '<header class="section-heading reveal"><p class="eyebrow">'.e($number).' / '.e($eyebrow).'</p><h2>'.e($title).'</h2>';
  if ($intro !== '') echo '<p class="section-intro">'.e($intro).'</p>';
  echo '</header>';
}
function paragraph(string $text): void { echo '<p class="prose">'.e($text).'</p>'; }
function bullets(array $items): void {
  echo '<ul class="editorial-list">';
  foreach ($items as $item) echo '<li>'.e($item).'</li>';
  echo '</ul>';
}
function render_section(string $file): void {
  $base = realpath(__DIR__ . '/../sections');
  $path = realpath($base . '/' . $file);
  if ($path && str_starts_with($path, $base) && is_file($path)) require $path;
}
