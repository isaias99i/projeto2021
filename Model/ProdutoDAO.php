<?php
require "Conexao.php";
class ProdutoDAO{

    public function listarTodos(){
        //vai ao banco de dados e pega todos os Produtos
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from bd_projeto2021.produto ");
        
                
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
           $listaProduto=array();
           $i=0;

           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $produto = new Produto();
            $produto->setCodigoProduto($linha['codigoProduto']);
            $produto->setNomeProduto($linha['nomeProduto']);
            $produto->setTipoProduto($linha['tipoProduto']);
            $produto->setIngredientes($linha['ingredientes']);
            $produto->setFornecedor($linha['fornecedor']);
            $produto->setFoto($linha['nomeFoto']);
            $produto->setPreco($linha['preco']);
            $listaProduto[$i] = $produto;
            $i++;
          }
        return $listaProduto;
       }
       catch(PDOException $e){
        return array();
       }
    }

    

    public function incluirProduto($esc){
       try{
           $minhaConexao = Conexao::getConexao();
           $sql = $minhaConexao->prepare("insert into bd_projeto2021.produto (nomeProduto, tipoProduto, ingredientes, fornecedor, preco) values (:nomeProduto, :tipoProduto, :ingredientes, :fornecedor, :preco)");
           $sql->bindParam("nomeProduto",$nomeProduto);
           $sql->bindParam("tipoProduto",$tipoProduto);
           $sql->bindParam("ingredientes",$ingredientes);
           $sql->bindParam("fornecedor",$fornecedor);
           $sql->bindParam("preco",$preco);
           /*$sql->bindParam("codigoFornecedor",$codigoFornecedor);
           $sql->bindParam("codigoEscola",$codigoEscola);*/
           $nomeProduto = $esc->getNomeProduto();
           $tipoProduto = $esc->getTipoProduto();
           $ingredientes = $esc->getIngredientes();
           $fornecedor = $esc->getFornecedor();
           $preco = $esc->getPreco();
           /*$codigoFornecedor = $esc->getCodigoFornecedor();
           $codigoEscola = $esc->getCodigoEscola();*/
           $sql->execute();
           
           $last_id = $minhaConexao->lastInsertId();
           $esc->setCodigoProduto($last_id);
           echo "Produto incluido com id=".$last_id;
           $foto = $esc->getFoto();  
           if($foto != NULL) {
             echo "entrou no if da foto !=null";
            //defini o nomeProduto do novo arquivo, que será o id gerado para o Produto
            $nomeFinal = $last_id.'.jpg';
            //move o arquivo para a pasta atual com esse novo nomeProduto
            if (move_uploaded_file($foto['tmp_name'], $nomeFinal)) {
                echo "Copiou a foto";
              //atualiza o banco de dados para guardar o nomeProduto do arquivo gerado.
               $sql = $minhaConexao->prepare("update bd_projeto2021.produto set nomeFoto = :nomeFoto where codigoProduto=:codigoProduto");
               $sql->bindParam("nomeFoto",$nomeFinal);
               $sql->bindParam("codigoProduto",$last_id);
               $sql->execute();
               echo "atualizou o nomeProduto da foto no bd";
               
             }
           }
           return $last_id;
        }
        catch(PDOException $e){
            //return "entrou no catch".$e->getmessage();
            return 0;
        }
    }

    public function alterarProduto($esc){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("update bd_projeto2021.produto set nomeProduto=:nomeProduto tipoProduto=:tipoProduto ingredientes=:ingredientes fornecedor=:fornecedor preco=:preco where codigoProduto=:codigoProduto");
            $sql->bindParam("nomeProduto",$nomeProduto);
            $sql->bindParam("tipoProduto",$tipoProduto);
            $sql->bindParam("ingredientes",$ingredientes);
            $sql->bindParam("fornecedor",$fornecedor);
            $sql->bindParam("preco",$preco);
            $sql->bindParam("codigoFornecedor",$codigoFornecedor);
            $sql->bindParam("codigoEscola",$codigoEscola);
            $nomeProduto = $esc->getNomeProduto();
            $tipoProduto = $esc->gettipoProduto();
            $ingredientes = $esc->getIngredientes();
            $fornecedor = $esc->getFornecedor();
            $preco = $esc->getPreco();
            /*$codigoFornecedor = $esc->getFornecedor();
            $codigoEscola = $esc->getEscola();*/
            $sql->execute();
            
         }
         catch(PDOException $e){
             echo "entrou no catch".$e->getmessage();
            
         }
     }     

    // public function excluirProduto($esc){
    //     try{
    //         $minhaConexao = Conexao::getConexao();
    //         $sql = $minhaConexao->prepare("delete from bd_projeto2021.produto where codigoProduto=:codigoProduto");
    //         $preco = $esc->getPreco();            
    //         //$saldo = $esc->getSaldo();            
    //         $preco = $saldo - $preco;
    //         $sql = $minhaConexao->prepare("update bd_projeto2021.usuario set saldo=saldo-:preco where codigoUsuario=:3 ");
    //         $sql->bindParam("preco",$preco);
    //         $sql->bindParam("codigoProduto",$codigoProduto);
    //         $codigoProduto = $esc->getCodigoProduto();
    //         $preco = $esc->getPreco();
            
    //         $sql->execute();
            
    //      }
    //      catch(PDOException $e){
    //          echo "entrou no catch".$e->getmessage();
    //          exit();
    //      }
    //  }
    public function excluirProduto($esc){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from bd_projeto2021.produto where codigoProduto=:codigoProduto");
            $sql->bindParam("codigoProduto",$codigoProduto);
            $codigoProduto = $esc->getCodigoProduto();
            
            $sql->execute();
            
         }
         catch(PDOException $e){
             echo "entrou no catch".$e->getmessage();
             exit();
         }
     }
    
     public function comprarProduto($esc){
        try{
            
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("update bd_projeto2021.usuario set saldo=saldo-:preco where codigoUsuario=2");
            
            //$sql->bindParam("codigoUsuario",$codigoUsuario);              
            $sql->bindParam("preco",$preco);  
            $preco = $esc->getPreco();
            $codigoProduto = $esc->getCodigoProduto();            
            $preco = $this->consultaPreco($codigoProduto);
            
            $sql->execute();
            
         }
         catch(PDOException $e){
             echo "entrou no catch".$e->getmessage();
            
         }
     }

    public function consultaPreco($codigoProduto){

    $minhaConexao = Conexao::getConexao();
    $sql = $minhaConexao->prepare("select preco from bd_projeto2021.produto where codigoProduto=:codigoProduto");
    $sql->bindParam("codigoProduto",$codigoProduto);           
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    return intval($result[0]['preco']);

    }


}

?>