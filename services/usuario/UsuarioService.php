<?php namespace APP\Services\Usuario;

  use APP\Repositories\Usuario\IUsuarioRepository;

  class UsuarioService implements IUsuarioService
  {
    private readonly IUsuarioRepository $_usuarioRepository;

    public function __construct(IUsuarioRepository $usuarioRepository)
    {
      $this->_usuarioRepository = $usuarioRepository;
    }

    public function listar()
    {
      return $this->_usuarioRepository->listar();
    }

    public function inserir(
      $nome,
      $email,
      $documentoFederal,
      $permissaoID,
      $senha
    )
    {
      $this->_usuarioRepository->inserir(
        $nome,
        $email,
        $documentoFederal,
        $permissaoID,
        base64_encode($senha));
    }
  }
?>