<script>
    function toggleMenu()
    {
        document.getElementById('mobile-menu').classList.toggle('show');
    }
</script>
<header class="header d-none d-md-block">
    <div class="wrapper mb-5">
        <div class="header-content text-center">
            <a href="/index.php" class="header-link">главная</a>
            <a href="/cup.php" class="header-link2">кружки</a>
            <a href="/t-shirt.php" class="header-link2">футболки</a>
            <a href="/souvenir.php" class="header-link2">сувениры</a>
            <a href="/contacts.php" class="header-link ">контакты</a>
        </div>
    </div>
</header>

<header class="d-md-none">
    <div class="bg-secondary px-2 py-1 d-flex justify-content-between">
      <a href="/index.php" class="header-link">
        <img src="/img/logo-home.png" class="home-icon">
      </a>
      <div>
        <button class="btn-menu" onclick="toggleMenu()">
          <img src="/img/menu.svg"/>
        </button>
      </div>

    </div>
</header>

<div class="mobile-menu" id="mobile-menu">
  <div class="p-3 text-white bg-secondary">
    <div class="d-flex justify-content-between">
      <div class="title-mobile text-center">
        меню
      </div>
      <div>
        <button class="btn btn-danger" type="button" onclick="toggleMenu()">&times;</button>
      </div>
    </div>
  </div>


  <div class="bg-white-wood text-center py-3">

    <div class="d-flex mb-4">
      <a href="/index.php" class="mobile-link">главная</a>
    </div>

    <div class="d-flex mb-4">
      <a href="/cup.php" class="mobile-link">кружки</a>
    </div>

    <div class="d-flex mb-4">
      <a href="/t-shirt.php" class="mobile-link">футболки</a>
    </div>

    <div class="d-flex mb-4">
      <a href="/souvenir.php" class="mobile-link">сувениры</a>
    </div>

    <div class="d-flex ">
      <a href="/contacts.php" class="mobile-link">контакты</a>
    </div>

  </div>

</div>