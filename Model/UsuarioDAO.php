<?php
require "Conexao.php";
class UsuarioDAO{

    /*public function listarTodos(){
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
            $escola->setcodigoEscola($linha['codigoEscola']);
            $escola->setNomeEscola($linha['nomeEscola']);
            $escola->setCnpj($linha['cnpj']);
            $escola->setTelefone($linha['telefone']);
            $escola->setEmail($linha['email']);
            $escola->setFoto($linha['nomeFoto']);
            $escola->setEndereco($linha['endereco']);
            $listaEscola[$i] = $escola;
            $i++;
          }
        return $listaEscola;
       }
       catch(PDOException $e){
        return array();
       }
    }*/

    

    public function incluirUsuario($esc){
       try{
           $minhaConexao = Conexao::getConexao();
           $sql = $minhaConexao->prepare("insert into bd_projeto2021.usuario (nomeCompleto, cpf, telefone, email, login, senha, tipoUsuario) values (:nomeCompleto, :cpf, :telefone, :email, :login, :senha, :tipoUsuario)");
           $sql->bindParam("nomeCompleto",$nomeCompleto);
           $sql->bindParam("cpf",$cpf);
           $sql->bindParam("telefone",$telefone);
           $sql->bindParam("email",$email);
           $sql->bindParam("login",$login);
           $sql->bindParam("senha",$senha);
           $sql->bindParam("tipoUsuario",$tipoUsuario);
           $nomeCompleto = $esc->getNomeCompleto();
           $cpf = $esc->getCpf();
           $telefone = $esc->getTelefone();
           $login = $esc->getLogin();
           $senha = $esc->getSenha();
           $email = $esc->getEmail();
           $tipoUsuario = $esc->getTipoUsuario();
           $sql->execute();
           
           $last_id = $minhaConexao->lastInsertId();
           $esc->setCodigoUsuario($last_id);
           echo "Usuario incluido com id=".$last_id;
           $foto = $esc->getFoto();  
           if($foto != NULL) {
             echo "entrou no if da foto !=null";
            //defini o nomeCompleto do novo arquivo, que será o id gerado para o Usuario
            $nomeFinal = $last_id.'.jpg';
            //move o arquivo para a pasta atual com esse novo nomeCompleto
            if (move_uploaded_file($foto['tmp_name'], $nomeFinal)) {
                echo "Copiou a foto";
              //atualiza o banco de dados para guardar o nomeCompleto do arquivo gerado.
               $sql = $minhaConexao->prepare("update bd_projeto2021.Usuario set nomeFoto = :nomeFoto where codigoUsuario=:codigoUsuario");
               $sql->bindParam("nomeFoto",$nomeFinal);
               $sql->bindParam("codigoUsuario",$last_id);
               $sql->execute();
               echo "atualizou o nomeCompleto da foto no bd";
               
             }
           }
           return $last_id;
        }
        catch(PDOException $e){
            //return "entrou no catch".$e->getmessage();
            return 0;
        }
    }

    public function alterarUsuario($esc){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("update bd_projeto2021.escola set nomeCompleto=:nomeCompleto cpf=:cpf telefone=:telefone email=:email login=:login senha=:senha where codigoUsuario=:codigoUsuario");
            $sql->bindParam("nomeCompleto",$nomeCompleto);
           $sql->bindParam("cpf",$cpf);
           $sql->bindParam("telefone",$telefone);
           $sql->bindParam("login",$login);
           $sql->bindParam("senha",$senha);
           $sql->bindParam("email",$email);
           $nomeCompleto = $esc->getNomeCompleto();
           $cpf = $esc->getCpf();
           $telefone = $esc->getTelefone();
           $login = $esc->getLogin();
           $senha = $esc->getSenha();
           $email = $esc->getEmail();
            $sql->execute();
            
         }
         catch(PDOException $e){
             //echo "entrou no catch".$e->getmessage();
            
         }
     }     

    public function excluirUsuario($esc){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from bd_projeto2021.usuario where codigoUsuario=:codigoUsuario");
            $sql->bindParam("codigoUsuario",$codigoUsuario);
            $codigoUsuario = $esc->getCodigoUsuario();
            
            $sql->execute();
            
         }
         catch(PDOException $e){
             echo "entrou no catch".$e->getmessage();
             exit();
         }
     }


}

?>