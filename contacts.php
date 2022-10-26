
<?php
session_start();

$user = $_SESSION['currentUser'] ?? null;

include 'connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <? include 'components/htmlHeader.php'?>
    <title>Контакты</title>
</head>
<body>

<? include 'components/header.php'?>

<div class="bg-white-wood">
    <div class="d-block d-md-none mainbg-img-overlay"></div>
    <div class="mainbg-content">
        <div class="wrapper py-5 ">

            <div class="title-text text-center mt-md-5 mb-md-5">
                <?= getSetting('contact.title-text', 'Контакты')?>
            </div>
                <div class="row gy-3 mb-5 flex-column-reverse flex-md-row">

                  <div class="col-md-6 mt-5 px-md-5">
                    <img src="<?= getSetting('img-contact')?>" class="img-contact d-flex justify-content-center"/>
                  </div>

                  <div class="col-md-6 mt-5 ">
                    <div class="description-text-contact text-center">
                      <?= getSetting('contact.description-title-text', 'Контакты')?>
                    </div>



                    <div class="d-flex mb-2">
                      <a href="<?= getSetting('contact.whatsapp','https://api.whatsapp.com/send?phone=79146221122')?>"  class="contact-text">
                        WatsApp
                        <img src="img/whatsapp.svg">
                      </a>
                    </div>

                    <div class="d-flex mb-2">
                      <a href="<?= getSetting('contact.telegram','https://t.me/madeinkamchatka')?>" class="contact-text">
                        Telegram канал
                        <img src="img/telegram.svg">
                      </a>
                    </div>

                    <div class="d-flex mb-2">
                      <a href="<?= getSetting('contact.instagram','https://www.instagram.com/invites/contact/?i=1hlckoq0a1sld&utm_content=ri6mgb')?>" class="contact-text">
                        Instagram
                        <img src="img/instagram.svg">
                      </a>
                    </div>

                    <div class="d-flex mb-2">
                      <a href="<?= getSetting('contact.youtube','https://youtube.com/channel/UCNMet0fBLBjWFGzlLj8G0ww')?>" class="contact-text">
                        YouTube
                        <img src="img/youtube.svg" class="ms-2">
                      </a>
                    </div>

                    <div class="d-flex mb-2">
                      <a href="<?= getSetting('contact.mail','mailto:usenko71@mail.ru')?>" class="contact-text">
                        Почта
                        <img src="img/mail.svg" class="ms-2">
                      </a>
                    </div>


                    <div class="d-flex">
                      <a href="<?= getSetting('contact.phone-link', 'tel:+79146221122')?>" class="contact-text ">
                        <?= getSetting('contact.phone-text', '+7 914 622 11 22')?>
                        <img src="img/phone.svg" class="ms-2">
                      </a>
                    </div>

                  </div>

              </div>

          <div class="row">
            <div class="col-md-12">

              <div class="description-text-contact1 text-center">
                  <?= getSetting('contact.first-text', 'Вы можете сделать заказ с 9:00 до 14:00 кроме субботы и воскресенья')?>
              </div>

              <div class="text-center">
                <a href="
                <?= getSetting('contact.map-link', 'https://yandex.ru/maps/78/petropavlovsk/house/leningradskaya_ulitsa_33/ZUwOaAFkT0cHW0JvYGJxcn9lYwo=/?ll=158.645752%2C53.033556&z=17.87')?>
                " class="contact-text">
                    <?= getSetting('contact.second-text', 'Камчатский край г. Петропавловск-Камчатский ул. Ленинградская 33 оф. 9')?>
                </a>
              </div>

            </div>
          </div>




        </div>
    </div>
</div>



<? include 'components/footer.php'?>

</body>
</html>