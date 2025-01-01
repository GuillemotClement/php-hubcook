<?php
require getPartial("head");
require getPartial("header");

?>
  <main>
    <h1><?= $page ?></h1>
    <form action="" method="POST">
      <div class="">
        <label for="username">Username</label>
        <input type="text" name="username">
      </div>
      <div class="">
        <label for="">Mot de passe</label>
        <input type="password" name="password">
      </div>
      <div class="">
        <a type="button">Retour</a>
        <button type="submit">Login</button>
      </div>
    </form>
  </main>

<?php

require getPartial("footer");