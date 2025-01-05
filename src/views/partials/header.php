<body class="flex flex-col min-h-screen">
<header class="flex justify-between shadow-md px-6 py-2 items-center">
  
  <a href="/" class="flex gap-x-2 items-center">
    <img src="images/logo.png" alt="HubCook" class="h-10">
    <span>HubCook</span>
  </a>

  <nav>
    <ul class="flex gap-x-2">
      <li><a href="/">Accueil</a></li>
      <li><a href="/recipe">Recette</a></li>
    </ul>
  </nav>
 
  <ul class="flex gap-x-2">
    <?php if(!isset($_SESSION['username'])): ?>
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Register</a></li>
    <?php else : ?>
      <li><a href="/">Profil</a></li>
      <li><a href="/logout">Logout</a></li>
    <?php endif ?>
  </ul>

</header>
