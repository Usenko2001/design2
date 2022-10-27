
<?php
session_start();

$user = $_SESSION['currentUser'] ?? null;

include 'connect.php';


?>

<!doctype html>
<html lang="en">
<head>
    <? include 'components/htmlHeader.php'?>
    <title>вход в админку</title>
</head>
<body>
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text text-center mt-5 mb-5">
                    вход в панель администратора
                </div>
                <form method="post"  action="admlogin.php">

                  <div class="text-center">
                    <input type="text" class="entry-admin mb-3"
                           placeholder="login"
                           name="login"
                  </div>

                  <div class="text-center">
                    <input type="text" class="entry-admin mb-5"
                           placeholder="password"
                           name="password"
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn-site-index">
                      войти
                    </button>
                  </div>

                </form>
            </div>
        </div>
    </div>



</body>
</html>