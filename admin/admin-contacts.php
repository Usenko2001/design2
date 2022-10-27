<?php
session_start();

$user = $_SESSION['currentUser'] ?? null;

include '../connect.php';

include '../admin-check.php';
redirectIfNotAdmin('/');

$image_contact = getSetting('img-contact',"");
$v = 2;

?>

<!doctype html>
<html lang="en">
<head>
    <?php
    include '../components/htmlHeader.php';
    ?>
    <title>Главная</title>
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
                        редактирование контактов
                    </div>
                </div>

                <?php if(isset($_SESSION["message"])){ ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['message'] ?>
                    </div>
                <?php }; unset($_SESSION['message']); ?>
                <form action="/admin/edit/edit.contacts.php" method="post">

                  <div class="col-md-12 mb-5">
                    <div class="title-description-text-white text-center mb-3">
                      Редактировать главный титул контактов
                    </div>
                    <div class="">
                      <input type="text" class="input-admin mb-3"
                             name="contact.title-text"
                             value="<?=getSetting('contact.title-text')?>">
                    </div>
                  </div>

                  <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать титул справа от картинки
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="contact.description-title-text"
                                   value="<?=getSetting('contact.description-title-text')?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать фотографию в контактах
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="img-contact"
                                   value="<?= $image_contact?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать ссылку на WhatsApp
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="contact.whatsapp"
                                   value="<?=getSetting('contact.whatsapp')?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать ссылку на Telegram
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="contact.telegram"
                                   value="<?=getSetting('contact.telegram')?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать ссылку на Instagram
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="contact.instagram"
                                   value="<?=getSetting('contact.instagram')?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать ссылку на YouTube
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="contact.instagram"
                                   value="<?=getSetting('contact.youtube')?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать ссылку на Почту
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="contact.mail"
                                   value="<?=getSetting('contact.mail')?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать ссылку на телефон
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="contact.phone-link"
                                   value="<?=getSetting('contact.phone-link')?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать текст номера телефона
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="contact.phone-text"
                                   value="<?=getSetting('contact.phone-text')?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать первый текст после контактов
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="contact.first-text"
                                   value="<?=getSetting('contact.first-text')?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать второй текст после контактов
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="contact.second-text"
                                   value="<?=getSetting('contact.second-text')?>">
                        </div>
                    </div>

                    <div class="line text-center mb-5"></div>



                    <div class="col-md-12 mb-5">
                        <div class="title-description-text-white text-center mb-3">
                            Редактировать ссылку на второй текст после контактов
                        </div>
                        <div class="">
                            <input type="text" class="input-admin mb-3"
                                   name="contact.map-link"
                                   value="<?=getSetting('contact.map-link')?>">
                        </div>
                    </div>

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
