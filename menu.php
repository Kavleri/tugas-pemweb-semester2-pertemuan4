<?php
// menu.php
$ar_menu = [
    "Dashboard" => "index.php",
    "Daftar" => "daftar.php",
    "Tentang" => "tentang.php",
];
?>
<ul class="navbar-nav">
    <?php foreach ($ar_menu as $label => $link): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $link ?>"><?= $label ?></a>
        </li>
    <?php endforeach; ?>
</ul>
