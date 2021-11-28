<?php
require "Conexao.php";
class LivroDAO{

    public function listarTodos(){
        //vai ao banco de dados e pega todos os livros
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from bd_livraria.livro ");
        
                
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
           $listaLiv=array();
           $i=0;

           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $livro = new Livro();
            $livro->setCodigo($linha['codigo']);
            $livro->setTitulo($linha['nome']);
            $livro->setEdicao($linha['edicao']);
            $livro->setAno($linha['ano']);
            $livro->setNomeImagem($linha['nomeImagem']);
            $listaLiv[$i] = $livro;
            $i++;
          }
        return $listaLiv;
       }
       catch(PDOException $e){
        return array();
       }
    }

    public function pesquisaLivro($liv){
        //vai ao banco de dados e pega todos os livros
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from bd_livraria.livro where codigo=:codigo");
            $sql->bindParam("codigo",$codigo);
            $codigo = $liv->getCodigo();
                
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $liv->setTitulo($linha['nome']);
            $liv->setEdicao($linha['edicao']);
            $liv->setAno($linha['ano']);
          }
        
       }
       catch(PDOException $e){
        
       }
    }

    public function incluirLivro($liv){
       try{
           $minhaConexao = Conexao::getConexao();
           $sql = $minhaConexao->prepare("insert into bd_livraria.livro (nome, edicao, ano) values (:nome, :edicao,:ano)");
           $sql->bindParam("nome",$nome);
           $sql->bindParam("edicao",$edicao);
           $sql->bindParam("ano",$ano);
           $nome = $liv->getTitulo();
           $edicao = $liv->getEdicao();
           $ano = $liv->getAno();
           $sql->execute();
           
           $last_id = $minhaConexao->lastInsertId();
           $liv->setCodigo($last_id);
           echo "Livro incluido com id=".$last_id;
           $imagem = $liv->getImagem();  
           if($imagem != NULL) {
             echo "entrou no if da imagem !=null";
            //defini o nome do novo arquivo, que será o id gerado para o livro
            $nomeFinal = $last_id.'.jpg';
            //move o arquivo para a pasta atual com esse novo nome
            if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
                echo "Copiou a imagem";
              //atualiza o banco de dados para guardar o nome do arquivo gerado.
               $sql = $minhaConexao->prepare("update bd_livraria.livro set nomeImagem = :nomeImagem where codigo=:codigo");
               $sql->bindParam("nomeImagem",$nomeFinal);
               $sql->bindParam("codigo",$last_id);
               $sql->execute();
               echo "atulizou o nome da imagem no bd";
               
             }
           }
           return $last_id;
        }
        catch(PDOException $e){
            //return "entrou no catch".$e->getmessage();
            return 0;
        }
    }

    public function alterarLivro($liv){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("update bd_livraria.livro set nome=:nome, edicao=:edicao, ano=:ano where codigo=:codigo");
            $sql->bindParam("codigo",$codigo);
            $sql->bindParam("nome",$nome);
            $sql->bindParam("edicao",$edicao);
            $sql->bindParam("ano",$ano);
            $codigo = $liv->getCodigo();
            $nome = $liv->getTitulo();
            $edicao = $liv->getEdicao();
            $ano = $liv->getAno();
            $sql->execute();
            
         }
         catch(PDOException $e){
             //echo "entrou no catch".$e->getmessage();
            
         }
     }

    public function excluirLivro($liv){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from bd_livraria.livro where codigo=:codigo");
            $sql->bindParam("codigo",$codigo);
            $codigo = $liv->getCodigo();
            
            $sql->execute();
            
         }
         catch(PDOException $e){
             echo "entrou no catch".$e->getmessage();
             exit();
         }
     }


}

?>