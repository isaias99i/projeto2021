<?php
 require 'UsuarioDAO.php';
 class Usuario{
    private $codigoUsuario;
    private $nomeCompleto;
    private $cpf;
    private $telefone;
    private $email;
    private $login;
    private $senha;
    //private $situacao;
    //private $codigoresponsavel;
    private $codigoEscola;
    private $tipoUsuario;
    private $foto;
    private $nomeFoto;

    public function getCodigoUsuario(){
        return $this->codigoUsuario;
    }

    
    public function setCodigoUsuario($codigoUsuario){
        $this->codigoUsuario = $codigoUsuario;        
    }
    

    
    public function getNomeCompleto(){
        return $this->nomeCompleto;
    }

    
    public function setNomeCompleto($nomeCompleto){
        $this->nomeCompleto = $nomeCompleto;        
    }
    
    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;        
    }
               
    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;        
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;        
    }
    
    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;        
    }
    
    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;        
    }
    
    /*public function getSituacao(){
        return $this->situacao;
    }

    public function setSituacao($situacao){
        $this->situacao = $situacao;        
    }*/

    public function getCodigoEscola(){
        return $this->codigoEscola;
    }

    
    public function setCodigoEscola($codigoEscola){
        $this->codigoEscola = $codigoEscola;        
    }

    public function getTipoUsuario(){
        return $this->tipoUsuario;
    }

    
    public function setTipoUsuario($tipoUsuario){
        $this->tipoUsuario = $tipoUsuario;        
    }
    public function getFoto(){
        return $this->foto;
    }

    
    public function setFoto($foto){
        $this->foto = $foto;        
    }

    public function getNomeFoto(){
        return $this->nomeFoto;
    }

    
    public function setNomeFoto($nomeFoto){
        $this->nomeFoto = $nomeFoto;        
    }
    
    public function listarTodos(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->listarTodos($this);
    }
    public function incluirUsuario(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->incluirUsuario($this);
    }
     public function alterarUsuario(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->alterarUsuario($this);
    }
     public function excluirUsuario(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->excluirUsuario($this);
    }
 }
 
 /*
    public function incluirLivro(){
         $livroDAO = new LivroDAO();
         $livroDAO->incluirLivro($this);
    }

    public function excluirLivro(){
        $livroDAO = new LivroDAO();
        $livroDAO->excluirLivro($this);
    }

    public function pesquisaLivro(){
        $livroDAO = new LivroDAO();
        $livroDAO->pesquisaLivro($this);
    }

    public function alterarLivro(){
        $livroDAO = new LivroDAO();
        $livroDAO->alterarLivro($this);
    }

    public function listarTodos(){
        $livroDAO = new LivroDAO();
        return $livroDAO->listarTodos();
    }
    */
?>


