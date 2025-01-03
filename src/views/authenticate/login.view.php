<?php
require getPartial("head");
require getPartial("header");

?>
  <main>
    <div class="form-group">

      <form action="" method="POST">
        <h1 class="form-group--title"><?= $page ?></h1>
        <div class="form-group--input-group">
          <label for="username">Username :</label>
          <input type="text" name="username" placeholder="@username">
        </div>
        <div class="form-group--input-group">
          <label for="">Mot de passe</label>
          <input type="password" name="password" placeholder="password">
        </div>
        <div class="form-group--action-group">
          <a type="button" class="btn btn-secondary" href="/">Retour</a>
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </main>

<?php

require getPartial("footer");