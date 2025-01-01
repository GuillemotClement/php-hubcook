<body>
<header>
  <a class="icone" href="/">
    <img src="images/logo.png" alt="" class="icone--img">
    <span class="icone--text">HubCook</span>
  </a>
  <nav>
    <ul>
      <li><a href="/">Accueil</a></li>
    </ul>
  </nav>
  <?php if(!isset($_SESSION['username'])): ?>
    <ul class="nav-action">
      <li><a href="/login"><i class="fa-solid fa-user"></i></a></li>
      <li><a href="/">Register</a></li>
    </ul>
  <?php else : ?>
    <ul class="nav-action">
      <li><a href="/">Profil</a></li>
      <li><a href="/logout"><i class="fa-solid fa-right-from-bracket"></i></a></li>
    </ul>
  <?php endif ?>
</header>