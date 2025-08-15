<?php namespace APP\Controllers;

  use APP\Services\Usuario\IUsuarioService;

  class AutenticacoesController
  {
    private readonly IUsuarioService $_usuarioService;

    public function __construct(IUsuarioService $usuarioService)
    {
      $this->_usuarioService = $usuarioService;
    }

    public function validarAcesso($login, $senha)
    {
      return $this->_usuarioService->validarAcesso($login, $senha);
    }
  }
?>