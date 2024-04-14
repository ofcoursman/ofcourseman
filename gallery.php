<?php include_once 'header.php'?>

<nav>
    <div>
    <ul class="nav">
        <li><a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-fw fa-search"></i> Search</a></li>
        <li><a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
        <li><a href="kalkulacka.php"><i class="fa fa-fw fa-user"></i> Kalkulačka</a></li>
        <li class="has-submenu">
            <a href="#">Gallery</a>
            <ul class="submenu">
                <?php
                $galleryPath = 'GALERIA';
                $selectedGallery = isset($_GET['gallery']) ? $_GET['gallery'] : '';

                if (is_dir($galleryPath)) {
                    $subdirectories = glob($galleryPath . '/*', GLOB_ONLYDIR);
                    foreach ($subdirectories as $subdirectory) {
                        $subdirectoryName = basename($subdirectory);
                        $isActive = ($selectedGallery === $subdirectoryName) ? 'active' : '';
                        echo '<li><a class="' . $isActive . '" href="gallery.php?gallery=' . urlencode($subdirectoryName) . '">' . $subdirectoryName . '</a></li>';
                    }
                }
                ?>
            </ul>
        </li>
    </ul>
    </div class="active">
</nav>

<div id="gallery-container">
    <?php
    if ($selectedGallery) {
        $galleryPath = 'GALERIA/' . $selectedGallery;

        if (is_dir($galleryPath)) {
            $images = glob($galleryPath . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            foreach ($images as $image) {
                echo '<img src="' . $image . '" alt="Gallery Image">';
            }
        } else {
            echo 'Invalid gallery selected.';
        }
    } else {
        echo 'Please select a gallery.';
    }
    ?>
</div>


<?php
include 'functions.php';

$cestaKAdresaru = 'GALERIA/' . $selectedGallery;

$pocetObrazkov = spocitajPocetObrazkov($cestaKAdresaru);

echo 'Počet obrázkov v galérii: ' . $pocetObrazkov;
?>
<?php include_once 'footer.php' ?>
</body>
</html>
