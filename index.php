
<?php
session_start();

$user = $_SESSION['currentUser'] ?? null;

include 'connect.php';

?>


<!doctype html>
<html lang="en">
<head>
<? include 'components/htmlHeader.php'?>
    <title>Made-in-Kamchatka</title>
</head>
<body>

<? include 'components/header.php'?>
<div class="mainbg">
  <img src="img/shapka1.jpg" class="mainbg">
</div>

<div class="mainbg2">
  <div class="d-block d-md-none mainbg-img-overlay"></div>
  <div class="mainbg-content">
    <div class="wrapper py-5">

      <div class="row gy-3 flex-md-row mb-5">
        <div class="col-md-12">
          <div class="title-text-white text-center mt-md-5 mb-md-5">
            <?=getSetting('index.title-design-men', 'несколько слов о дизайнере')?>
          </div>
        </div>
        <div class="col-md-6 mt-5">
            <img src="<?=getSetting('design-men')?>" class="img-index d-flex justify-content-center"/>
        </div>
        <div class="col-md-6 mt-5">
          <div class="title-description-text-white text-center mb-5">
            <?= getSetting('index.header-design-men', 'Образование')?>
          </div>
          <div class="description-text-white ms-md-5 mb-3">
            <?=
            getSetting('index.header-1paragraph-design-men', 'Художка на Камчатке')
            ?>
          </div>
          <div class="description-text-white ms-md-5 mb-3">
              <?=
              getSetting('index.header-2paragraph-design-men', 'Художка в Санкт-Петербурге')
              ?>

          </div>
          <div class="description-text-white ms-md-5 mb-3">
              <?=
              getSetting('index.header-3paragraph-design-men', 'Преподпователь в художке')
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="back3">
  <div class="d-block d-md-none mainbg-img-overlay"></div>
  <div class="mainbg-content">
    <div class="wrapper py-5">
      <div class="row gy-3 mb-5">
        <div class="col-md-12 block-empty"></div>
        <div class="col-md-12 block-empty"></div>
        <div class="col-md-12">
          <div class="title-text-white text-center mt-md-5 mb-md-5">
            <?= getSetting('index.title-suvenir', 'изготовление сувениров')?>

          </div>
        </div>
          <div class="col-md-4 col-6 text-center mt-5">

            <img src="<?= getSetting('index.img-suv1')?>" class="img-catalog-index"/>
          </div>

          <div class="col-md-4 col-6 text-center mt-5">

            <img src="<?= getSetting('index.img-suv2')?>" class="img-catalog-index"/>
          </div>

          <div class="col-md-4 col-6 d-none d-md-block text-center mt-5 mb-5">

            <img src="<?= getSetting('index.img-suv3')?>" class="img-catalog-index"/>
          </div>
      </div>
      <div class="col-md-12 text-center mt-5 py-5">
        <a href="souvenir.php" class="btn-site-index">перейти к сувенирам</a>
      </div>
    </div>
  </div>
</div>



<div class="back4">
  <div class="d-block d-md-none mainbg-img-overlay"></div>
  <div class="mainbg-content">
    <div class="wrapper py-5">
      <div class="title-text-white text-center mt-md-5 mb-md-5">
          <?= getSetting('index.title-uslugi', 'услуги')?>

      </div>
      <div class="row gy-3 mb-5 flex-column-reverse flex-md-row">

          <div class="col-md-6 mt-5">
            <div class="title-description-text-white text-center mb-5">
                <?= getSetting('index.description-title-uslugi', 'Виды моих услуг')?>

            </div>
            <div class="description-text-white mb-2">
                <?= getSetting('index.first-text-uslugi', 'Печать на футболках')?>
            </div>
            <div class="description-text-white mb-2">
                <?= getSetting('index.second-text-uslugi', 'Печать на кружках')?>
            </div>
            <div class="description-text-white mb-2">
                <?= getSetting('index.third-text-uslugi', 'Изготовление сувениров')?>
            </div>

            <div class="mt-mb-5"></div>
            <div class="mt-5"></div>
            <div class="mt-5 text-center">
              <a href="/catalog.php" class="btn-site-index">
                каталог
              </a>
            </div>
          </div>

          <div class="col-md-6 mt-5">
            <img src="<?=getSetting('img-uslugi')?>" class="img-index d-flex justify-content-center"/>
          </div>

      </div>
    </div>
  </div>
</div>









<? include 'components/footer.php'?>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<!---->
<!--<script src="js/bootstrap.bundle.min.js"></script>-->
</body>
</html>