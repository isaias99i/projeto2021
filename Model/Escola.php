<?php
 require 'EscolaDAO.php';
 class Escola{
    private $codigoEscola;
    private $nomeEscola;
    private $cnpj;
    private $telefone;
    private $email;
    private $logo;
    private $endereco;
    private $situacao;
    private $codigoResponsavel;    

    public function getCodigoEscola(){
        return $this->codigoEscola;
    }

    public function setCodigoEscola($codigoEscola){
        $this->codigoEscola = $codigoEscola;        
    }    

    public function getNomeEscola(){
        return $this->nomeEscola;
    }

    public function setNomeEscola($nomeEscola){
        $this->nomeEscola = $nomeEscola;        
    }
    
    public function getCnpj(){
        return $this->cnpj;
    }
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;        
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
    
    public function getLogo(){
        return $this->logo;
    }
    public function setLogo($logo){
        $this->logo = $logo;        
    }
    
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;        
    }
    public function getCodigoResponsavel(){
        return $this->codigoResponsavel;
    }
    public function setCodigoResponsavel($codigoResponsavel){
        $this->codigoResponsavel = $codigoResponsavel;        
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


