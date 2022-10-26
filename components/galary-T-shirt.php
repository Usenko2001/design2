



<?php
$images = json_decode(getSetting('galary.images-t-shirt', "[]"), true);
$v = 2;
?>

<div class="wrapper">
    <div class="gallery-group">
        <div class="row gy-3 gx-4">
            <div class="gallery-group-text col-12">
                <?= getSetting('galary.first-title')?>
            </div>

            <?php
            foreach ($images as $_image) {
                if (empty(trim($_image)))
                    continue;
                include(__DIR__ . '/galary-T-shirt-img.php');
            }
            ?>

        </div>
    </div>
</div>