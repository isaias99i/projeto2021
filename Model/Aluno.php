<?php
 require 'LivroDAO.php';
 class Livro{
    private $codigo_aluno;
    private $nome;
    private $matricula;
    private $turma;
    private $turno;
    private $telefone;
    private $email;
    private $login;
    private $senha;
    private $situacao;
    private $codigo_responsavel;
    private $codigo_escola;

    public function getCodigo_aluno(){
        return $this->codigo_aluno;
    }

    
    public function setCodigo_aluno($codigo_aluno){
        $this->codigo_aluno = $codigo_aluno;        
    }

    
    public function getNome(){
        return $this->nome;
    }

    
    public function setNome($nome){
        $this->nome = $nome;        
    }
    
    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;        
    }
    
    public function getTurma(){
        return $this->turma;
    }

    public function setTurma($turma){
        $this->turma = $turma;        
    }
    
    public function getTurno(){
        return $this->turno;
    }

    public function setTurno($turno){
        $this->turno = $turno;        
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
    
    public function getCodigo_responsavel(){
        return $this->codigo_responsavel;
    }

    public function setCodigo_responsavel($codigo_responsavel){
        $this->codigo_responsavel = $codigo_responsavel;        
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


