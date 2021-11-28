<?php
 require 'LivroDAO.php';
 class Livro{
    private $codigo_fornecedor;
    private $nome_fornecedor;
    private $situacao;
    private $codigo_escola;    

    public function getCodifornecedor(){
        return $this->codigo_fornecedor;
    }

    
    public function setCodifornecedor($codigo_fornecedor){
        $this->codigo_fornecedor = $codigo_fornecedor;        
    }

    
    public function getNome_fornecedor(){
        return $this->nome_fornecedor;
    }

    
    public function setNome_fornecedor($nome_fornecedor){
        $this->nome_fornecedor = $nome_fornecedor;        
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


