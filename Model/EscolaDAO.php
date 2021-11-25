<?php
require "Conexao.php";
class EscolaDAO{

    public function listarTodos(){
        //vai ao banco de dados e pega todos os Escolas
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from bd_projeto2021.escola ");
        
                
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
           $listaEscola=array();
           $i=0;

           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $escola = new Escola();
            $escola->setNomeEscola($linha['nomeEscola']);
            $escola->setCnpj($linha['cnpj']);
            $escola->setTelefone($linha['telefone']);
            $escola->setEmail($linha['email']);
            $escola->setEndereco($linha['endereco']);
            $listaEscola[$i] = $escola;
            $i++;
          }
        return $listaEscola;
       }
       catch(PDOException $e){
        return array();
       }
    }

    

    public function incluirEscola($esc){
       try{
           $minhaConexao = Conexao::getConexao();
           $sql = $minhaConexao->prepare("insert into bd_projeto2021.escola (nomeEscola, cnpj, telefone) values (:nomeEscola, :cnpj,:telefone)");
           $sql->bindParam("nomeEscola",$nomeEscola);
           $sql->bindParam("cnpj",$cnpj);
           $sql->bindParam("telefone",$telefone);
           $nomeEscola = $esc->getNomeEscola();
           $cnpj = $esc->getCnpj();
           $telefone = $esc->getTelefone();
           $sql->execute();
           
           $last_id = $minhaConexao->lastInsertId();
           $esc->setCodigoEscola($last_id);
           echo "escola incluido com id=".$last_id;
           $logo = $esc->getLogo();  
           if($logo != NULL) {
             echo "entrou no if da logo !=null";
            //defini o nomeEscola do novo arquivo, que será o id gerado para o escola
            $nomeFinal = $last_id.'.jpg';
            //move o arquivo para a pasta atual com esse novo nomeEscola
            if (move_uploaded_file($logo['tmp_name'], $nomeFinal)) {
                echo "Copiou a logo";
              //atualiza o banco de dados para guardar o nomeEscola do arquivo gerado.
               $sql = $minhaConexao->prepare("update bd_projeto2021.escola set nomeLogo = :nomeLogo where codigoEscola=:codigoEscola");
               $sql->bindParam("nomeLogo",$nomeFinal);
               $sql->bindParam("codigoEscola",$last_id);
               $sql->execute();
               echo "atulizou o nomeEscola da logo no bd";
               
             }
           }
           return $last_id;
        }
        catch(PDOException $e){
            //return "entrou no catch".$e->getmessage();
            return 0;
        }
    }

    public function alterarEscola($esc){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("update bd_projeto2021.escola set nomeEscola=:nomeEscola, cnpj=:cnpj, telefone=:telefone where codigoEscola=:codigoEscola");
            $sql->bindParam("codigoEscola",$codigoEscola);
            $sql->bindParam("nomeEscola",$nomeEscola);
            $sql->bindParam("cnpj",$cnpj);
            $sql->bindParam("telefone",$telefone);
            $codigoEscola = $esc->getCodigoEscola();
            $nomeEscola = $esc->getNomeEscola();
            $cnpj = $esc->getCnpj();
            $telefone = $esc->getTelefone();
            $sql->execute();
            
         }
         catch(PDOException $e){
             //echo "entrou no catch".$e->getmessage();
            
         }
     }

    public function excluirEscola($esc){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from bd_projeto2021.escola where codigoEscola=:codigoEscola");
            $sql->bindParam("codigoEscola",$codigoEscola);
            $codigoEscola = $esc->getCodigoEscola();
            
            $sql->execute();
            
         }
         catch(PDOException $e){
             echo "entrou no catch".$e->getmessage();
             exit();
         }
     }


}

?>