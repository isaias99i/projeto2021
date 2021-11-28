<?php
 require 'LivroDAO.php';
 class Livro{
    private $codigo_responsavel;
    private $codigo_escola;
    private $nome_responsavel;
    private $cpf;
    private $cpf;
    private $telefone;
    private $email;
    private $login;
    private $senha;
    private $situacao;    
    private $codigo_escola;
    
    public function getCodigo_responsavel(){
        return $this->codigo_responsavel;
    }

    
    public function setCodigo_responsavel($codigo_responsavel){
        $this->codigo_responsavel = $codigo_responsavel;        
    }
    
    public function getNome_responsavel(){
        return $this->nome_responsavel;
    }

    
    public function setNome_responsavel($nome_responsavel){
        $this->nome_responsavel = $nome_responsavel;        
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

    public function getSituacao(){
        return $this->situacao;
    }

    public function setSituacao($situacao){
        $this->situacao = $situacao;        
    }

    public function getCodigo_escola(){
        return $this->codigo_escola;
    }

    public function setCodigo_escola($codigo_escola){
        $this->codigo_escola = $codigo_escola;        
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


