<?php
 require 'ProdutoDAO.php';
 class Produto{
    private $codigoProduto;
    private $nomeProduto;
    private $tipoProduto;
    private $ingredientes;
    private $fornecedor;
    private $foto;
    private $nomeFoto;        
    private $preco;
    private $codigoFornecedor;
    private $codigoEscola;

    public function getCodigoProduto(){
        return $this->codigoProduto;
    }

    
    public function setCodigoProduto($codigoProduto){
        $this->codigoProduto = $codigoProduto;        
    }
    

    
    public function getNomeProduto(){
        return $this->nomeProduto;
    }

    
    public function setNomeProduto($nomeProduto){
        $this->nomeProduto = $nomeProduto;        
    }
    
    public function getTipoProduto(){
        return $this->tipoProduto;
    }

    public function setTipoProduto($tipoProduto){
        $this->tipoProduto = $tipoProduto;        
    }
               
    public function getIngredientes(){
        return $this->ingredientes;
    }

    public function setIngredientes($ingredientes){
        $this->ingredientes = $ingredientes;        
    }
    
    public function getFornecedor(){
        return $this->fornecedor;
    }

    public function setFornecedor($fornecedor){
        $this->fornecedor = $fornecedor;        
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
    
    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;        
    }
    
    public function getCodigoFornecedor(){
        return $this->codigoFornecedor;
    }

    public function setCodigoFornecedor($codigoFornecedor){
        $this->codigoFornecedor = $codigoFornecedor;        
    }
    
    public function getCodigoEscola(){
        return $this->codigoEscola;
    }

    public function setCodigoEscola($codigoEscola){
        $this->codigoEscola = $codigoEscola;        
    }
    
    public function listarTodos(){
        $produtoDAO = new ProdutoDAO();
        return $produtoDAO->listarTodos();
    }
    public function incluirProduto(){
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->incluirProduto($this);
    }
    public function alterarProduto(){
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->alterarProduto($this);
    }
    public function excluirProduto(){
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->excluirProduto($this);
    }
    public function entrarProduto(){
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->entrarProduto($this);
    }
 }
 
 ?>


