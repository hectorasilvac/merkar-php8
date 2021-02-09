<<<<<<< HEAD
<?php

try {

  include __DIR__ . '/../includes/autoload.php';

  $route = ltrim(strtok($_SERVER['REQUEST_URI'], '?'), '/');

  $entryPoint = new \Ninja\EntryPoint($route, $_SERVER['REQUEST_METHOD'], new \Ijdb\IjdbRoutes());

  $entryPoint->run();


} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . '
  in ' . $e->getFile() . ':' . $e->getLine();
  include __DIR__ . '/../templates/layout.html.php';
}
=======
<?php echo 'Hola' ?>
>>>>>>> cd18ecb90c96f3e9c0741400651d4a715a5ef982
