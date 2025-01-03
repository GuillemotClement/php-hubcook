<?php
require getPartial("head");
require getPartial("header");

?>
  <main>
    <div class="form-group">
      <form action="" method="POST">
        <h1 class="form-group--title"><?= $page ?></h1>
        <div class="form-group--input-group">
          <label for="username">Username</label>
          <input type="text" name="username">
        </div>
        <div class="form-group--input-group">
          <label for="email">Email</label>
          <input type="email" name="email">
        </div>
        <div class="form-group--input-group">
          <label for="">Mot de passe</label>
          <input type="password" name="password">
        </div>
        <div class="form-group--input-group">
          <label for="">Confirmation de mot de passe</label>
          <input type="password" name="confirmPassword">
        </div>
        <div class="form-group--action-group">
          <a type="button" class="btn btn-secondary">Retour</a>
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </main>

<?php

require getPartial("footer");