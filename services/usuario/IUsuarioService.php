<?php namespace APP\Services\Usuario;

  interface IUsuarioService
  {
    public function listar();
    
    public function inserir(
      $nome,
      $email,
      $documentoFederal,
      $permissaoID,
      $senha);
  }
?>