

<?php
session_start();

$user = $_SESSION['currentUser'] ?? null;

include '../connect.php';
include '../admin-check.php';
redirectIfNotAdmin('/');

//$_image= $_image ?? "img/galary-cup/cup1.jpg";
$images = json_decode(getSetting('galary.images-suvenir',"[]"), true);
$v = 2;
?>

<!doctype html>
<html lang="en">
<head>
    <?php
    include '../components/htmlHeader.php';
    ?>
    <title>admin-suvenir</title>
</head>
<body>
<?php
include '../components/header-admin.php';
?>

<div class="mainbg-admin">
    <div class="d-block d-md-none mainbg-img-overlay"></div>
    <div class="mainbg-content">
        <div class="wrapper py-5">

            <div class="row gy-3 flex-md-row mb-5">
                <div class="col-md-12">
                    <div class="title-text-white text-center mt-md-5 mb-5">
                        редактирование галереи сувениров
                    </div>
                </div>

                <?php if(isset($_SESSION["message"])){ ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['message'] ?>
                    </div>
                <?php }; unset($_SESSION['message']); ?>
                <form action="/admin/edit/edit.galary-suvenir.php" method="post">


                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать главный титул о сувенирах
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="cup.title-text"
                                   value="<?=getSetting('suvenir.title-text')?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>

                    <?php
                    for ($i = 0; $i < 100; $i++){
                    json_encode($images);

                    ?>

                      <div class="col-md-12">
                          <div class="">
                              <input type="text" class="input-admin mb-3"
                                     name="galary.images-suvenir[<?=$i?>]"
                                     value="<?= $images[$i]?>">
                          </div>
                      </div>

                  <?php

                  }
                  ?>

                    <div class="line text-center mb-5"></div>

                    <div class="my-3">
                        <button type="submit" class="btn-site-index">
                            редактировать
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>