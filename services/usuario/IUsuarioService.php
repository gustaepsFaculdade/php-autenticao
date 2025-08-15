<?php namespace APP\Services\Usuario;

  interface IUsuarioService
  {
    public function listar();
    public function validarAcesso($login, $senha);
    
    public function inserir(
      $nome,
      $email,
      $documentoFederal,
      $permissaoID,
      $senha);
  }
?>