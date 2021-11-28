<?php
 require 'LivroDAO.php';
 class Livro{
    private $codigo;
    private $titulo;
    private $edicao;
    private $ano;
    private $imagem;
    private $nomeImagem;

    public function getCodigo(){
        return $this->codigo;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getEdicao(){
        return $this->edicao;
    }
    public function getAno(){
        return $this->ano;
    }
    public function getImagem(){
        return $this->imagem;
    }
    public function getNomeImagem(){
        return $this->nomeImagem;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setEdicao($edicao){
        $this->edicao = $edicao;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function setImagem($imagem){
        $this->imagem = $imagem;
    }
    public function setNomeImagem($nomeImagem){
        $this->nomeImagem = $nomeImagem;
    }
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
 }
?>