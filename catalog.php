
<?php
session_start();

$user = $_SESSION['currentUser'] ?? null;

include 'connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <? include 'components/htmlHeader.php'?>
    <title>Design</title>
</head>
<body>

<? include 'components/header.php'?>

  <div class="bg-white-wood">
    <div class="d-block d-md-none mainbg-img-overlay"></div>
    <div class="mainbg-content">
      <div class="wrapper">
        <div class="row mb-5">
          <div class="col-md-12 mt-5 block-empty"></div>
          <div class="col-md-12 mt-5 block-empty"></div>
          <div class="title-block-catalog mb-3">
            <div class="title-text text-center">
              печать на футболках
            </div>
          </div>

          <div class="col-md-4 col-6 text-center mt-5">
            <img src="img/galary-t-shirt/tshort1.jpg" class="img-catalog"/>
          </div>

          <div class="col-md-4 col-6 text-center mt-5">
            <img src="img/galary-t-shirt/tshort2.jpg" class="img-catalog"/>
          </div>

          <div class="col-md-4 d-none d-md-block text-center mt-5 mb-mt-5">
            <img src="img/galary-t-shirt/tshort3.jpg" class="img-catalog"/>
          </div>
        </div>

        <div class="col-md-12 text-center mt-5 py-5">
          <a href="t-shirt.php" class="btn-site">галерея футболок</a>
        </div>
      </div>
    </div>
  </div>


  <div class="bg-white-wood">
    <div class="d-block d-md-none mainbg-img-overlay"></div>
    <div class="mainbg-content">
      <div class="wrapper">
        <div class="row mb-5">
          <div class="col-md-12 mt-5 block-empty"></div>
          <div class="title-block-catalog mb-3">
            <div class="title-text text-center">
              печать на кружках
            </div>
          </div>

          <div class="col-md-4 col-6 text-center mt-5">
            <img src="img/galary-cup/cup1.jpg " class="img-catalog"/>
          </div>

          <div class="col-md-4 col-6 text-center mt-5">
            <img src="img/galary-cup/cup2.jpg" class="img-catalog"/>
          </div>

          <div class="col-md-4 d-none d-md-block text-center mt-5 mb-mt-5">
            <img src="img/galary-cup/cup1.jpg" class="img-catalog"/>
          </div>
        </div>

        <div class="col-md-12 text-center mt-5 py-5">
          <a href="cup.php" class="btn-site">галерея кружек</a>
        </div>
      </div>
    </div>
  </div>


<div class="bg-white-wood">
  <div class="d-block d-md-none mainbg-img-overlay"></div>
  <div class="mainbg-content">
    <div class="wrapper ">
      <div class="row mb-5">
        <div class="col-md-12 mt-5 block-empty"></div>
        <div class="title-block-catalog mb-3">
          <div class="title-text text-center">
            сувениры
          </div>
        </div>

        <div class="col-md-4 col-6 text-center mt-5">
          <img src="img/galary-suvenir/suv1.jpg" class="img-catalog"/>
        </div>

        <div class="col-md-4 col-6 text-center mt-5">
          <img src="img/galary-suvenir/suv2.jpg" class="img-catalog"/>
        </div>

        <div class="col-md-4 d-none d-md-block text-center mt-5 mb-mt-5">
          <img src="img/galary-suvenir/suv3.jpg" class="img-catalog"/>
        </div>
      </div>

      <div class="col-md-12 text-center mt-5 py-5">
        <a href="souvenir.php" class="btn-site">галерея сувениров</a>
      </div>

    </div>
    </div>
  </div>
</div>



<? include 'components/footer.php'?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>