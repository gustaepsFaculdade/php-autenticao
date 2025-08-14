<?php namespace APP\Repositories\Usuario;

  interface IUsuarioRepository
  {
    public function listar();

    public function inserir(
      $nome,
      $email,
      $documentoFederal,
      $permissaoID,
      $senha
    );
  }
?>