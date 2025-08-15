<?php
  $container = require __DIR__.'/../../index.php';
  
  use APP\Controllers\AutenticacoesController;

  if ($_SERVER["REQUEST_METHOD"] != "POST")
    return;

  $autenticacoesController = $container->get(AutenticacoesController::class);

  $login = $_POST['txtlogin']; 
  $senha = $_POST['txtsenha'];

  $autenticacoesController->validarAcesso($login, $senha);
?>