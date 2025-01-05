<div class="w-full flex justify-center">
  <form action="" method="POST">
    <h1 class="text-3xl mb-4 text-center">Connexion</h1>
    <div class="form-control">
      <label for="username" class="label">Username :</label>
      <input type="text" name="username" class="input input-bordered w-full max-w-xs">
    </div>
    <div class="form-control">
      <label for="" class="label">Mot de passe</label>
      <input type="password" name="password" class="input input-bordered w-full max-w-xs">
    </div>
    <div class="mt-2 flex flex-col gap-y-1">
      <a href="/register" class="text-xs italic text-blue-500 hover:underline">Je n'ai pas encore de compte</a>
      <a href="#" class="text-xs italic text-blue-500 hover:underline hover:text-red-500" title="En cours de développement">Mot de passe oublié</a>
    </div>
    <div class="flex justify-between px-4 my-4">
      <a class="btn btn-neutral" href="/">Retour</a>
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </form>
</div>
