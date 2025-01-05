<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <title>HubCook</title>
  <!-- CSS -->
  <link rel="stylesheet" href="css/output.css">
  <!-- JavaScript -->
  <script src="js/index.js" defer></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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
  <main class="flex-1 container mx-auto border">
    <?php require BASE_PATH . "src/views/pages/$page.view.php"; ?>
  </main>

  <footer class="flex items-center justify-between px-6 py-2 border-t">
    <p>Copyright &copy; - 2024</p>
    <ul class="flex gap-x-2">
      <li><a href=""><i class="fa-brands fa-github"></i></a></li>
      <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
    </ul>
  </footer>
</body>
</html>