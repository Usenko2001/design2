<?php
session_start();

$user = $_SESSION['currentUser'] ?? null;

include '../connect.php';

$image_design = getSetting('design-men',"");

$image_suv1 = getSetting('index.img-suv1',"");
$image_suv2 = getSetting('index.img-suv2',"");
$image_suv3 = getSetting('index.img-suv3',"");


$image_uslugi = getSetting('img-uslugi',"");
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
                            редактирование главной страницы
                        </div>
                    </div>

                    <?php if(isset($_SESSION["message"])){ ?>
                        <div class="alert alert-success">
                            <?= $_SESSION['message'] ?>
                        </div>
                    <?php }; unset($_SESSION['message']); ?>
                    <form action="/admin/edit/edit.index.php" method="post">



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать главный титул о дизайнере
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.title-design-men"
                                       value="<?=getSetting('index.title-design-men')?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать заголовок справа от фотографии
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.header-design-men"
                                       value="<?=getSetting('index.header-design-men')?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать первый пункт "о дизайнере"
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.header-1paragraph-design-men"
                                       value="<?=getSetting('index.header-1paragraph-design-men')?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать второй пункт "о дизайнере"
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.header-2paragraph-design-men"
                                       value="<?=getSetting('index.header-2paragraph-design-men')?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать третий пункт "о дизайнере"
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.header-3paragraph-design-men"
                                       value="<?=getSetting('index.header-3paragraph-design-men')?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>


                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать фото "о дизайнере"
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="design-men"
                                       value="<?= $image_design?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать заголовок о сувенирах
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.title-suvenir"
                                       value="<?=getSetting('index.title-suvenir')?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать первую фотографию сувениров на главной
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.img-suv1"
                                       value="<?= $image_suv1?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                              Редактировать вторую фотографию сувениров на главной
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.img-suv2"
                                       value="<?= $image_suv2?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                              Редактировать третью фотографию сувениров на главной
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.img-suv3"
                                       value="<?= $image_suv3?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать подзаголовок услуг
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.title-uslugi"
                                       value="<?=getSetting('index.title-uslugi')?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать подзагловок услуг
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.description-title-uslugi"
                                       value="<?=getSetting('index.description-title-uslugi')?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать первую строчку в услугах
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.first-text-uslugi"
                                       value="<?=getSetting('index.first-text-uslugi')?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать вторую строчку в услугах
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.second-text-uslugi"
                                       value="<?=getSetting('index.second-text-uslugi')?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать третью строчку в услугах
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="index.third-text-uslugi"
                                       value="<?=getSetting('index.third-text-uslugi')?>">
                            </div>
                        </div>

                        <div class="line text-center mb-5"></div>



                        <div class="col-md-12 mb-5">
                            <div class="title-description-text-white text-center mb-3">
                                Редактировать фотографию в услугах
                            </div>
                            <div class="">
                                <input type="text" class="input-admin mb-3"
                                       name="img-uslugi"
                                       value="<?= $image_uslugi?>">
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
