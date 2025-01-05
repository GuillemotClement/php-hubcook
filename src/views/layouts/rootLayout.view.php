<?php
requirePartial('head');
requirePartial('header');
?>

  <main class="flex-1 container mx-auto border flex items-center">
    <?php require BASE_PATH . "src/views/pages/$page.view.php"; ?>
  </main>

<?php
requirePartial('footer');
