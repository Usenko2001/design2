
<?php
session_start();

$user = $_SESSION['currentUser'] ?? null;

include 'connect.php';


$images = json_decode(getSetting('galary.images-cup', "[]"), true);

?>

<!doctype html>
<html lang="en">
<head>
    <? include 'components/htmlHeader.php'?>
    <title>Кружки</title>
</head>
<body>

<? include 'components/header.php'?>

<div class="mainbg">
  <img src="img/shapka1.jpg" class="mainbg">
</div>

<div class="bg-white-wood-index">
  <div class="d-block d-md-none mainbg-img-overlay"></div>
  <div class="mainbg-content">
    <div class="wrapper">
      <div class="row">
        <div class="col-md-12 mt-5 block-empty"></div>
        <div class="title-block-catalog mb-3">
          <div class="title-text text-center">
            <?= getSetting('cup.title-text', 'печать на кружках')?>
          </div>
        </div>

          <?php include 'components/galary-cup.php' ?>

      </div>

    </div>
  </div>
</div>


<? include 'components/footer.php'?>

</body>
</html>