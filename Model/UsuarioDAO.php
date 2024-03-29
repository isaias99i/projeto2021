<?php
require "Conexao.php";
class UsuarioDAO{

    public function listarTodos(){
        //vai ao banco de dados e pega todos os Usuarios
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from bd_projeto2021.usuario ");
                        
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
           $listaUsuario=array();
           $i=0;

           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $usuario = new Usuario();
            $usuario->setCodigoUsuario($linha['codigoUsuario']);
            $usuario->setNomeCompleto($linha['nomeCompleto']);
            $usuario->setCpf($linha['cpf']);
            $usuario->setTelefone($linha['telefone']);
            $usuario->setEmail($linha['email']);
            $usuario->setFoto($linha['nomeFoto']);
            $usuario->setLogin($linha['login']);
            $usuario->setSenha($linha['senha']);
            $usuario->setTipoUsuario($linha['tipoUsuario']);
            $usuario->setSaldo($linha['saldo']);
            $listaUsuario[$i] = $usuario;
            $i++;
          }
        return $listaUsuario;
       }
       catch(PDOException $e){
        return array();
       }
    }
    public function listarTodosFilhos(){
        //vai ao banco de dados e pega todos os Filhps
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from bd_projeto2021.usuario where codigoResponsavel=1");
            
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
           $listaUsuario=array();
           $i=0;

           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $usuario = new Usuario();
            $usuario->setCodigoUsuario($linha['codigoUsuario']);
            $usuario->setNomeCompleto($linha['nomeCompleto']);
            $usuario->setCpf($linha['cpf']);
            $usuario->setTelefone($linha['telefone']);
            $usuario->setEmail($linha['email']);
            $usuario->setFoto($linha['nomeFoto']);
            $usuario->setLogin($linha['login']);
            $usuario->setSenha($linha['senha']);
            $usuario->setTipoUsuario($linha['tipoUsuario']);
            $usuario->setSaldo($linha['saldo']);
            $usuario->setCodigoResponsavel($linha['codigoResponsavel']);
            $listaUsuario[$i] = $usuario;
            $i++;
          }
        return $listaUsuario;
       }
       catch(PDOException $e){
        return array();
       }
    }

    

    public function incluirUsuario($esc){
       try{
           $minhaConexao = Conexao::getConexao();
           $sql = $minhaConexao->prepare("insert into bd_projeto2021.usuario (nomeCompleto, cpf, telefone, email, login, senha, tipoUsuario, codigoResponsavel) values (:nomeCompleto, :cpf, :telefone, :email, :login, :senha, :tipoUsuario, :codigoResponsavel)");
           $sql->bindParam("nomeCompleto",$nomeCompleto);
           $sql->bindParam("cpf",$cpf);
           $sql->bindParam("telefone",$telefone);
           $sql->bindParam("email",$email);
           $sql->bindParam("login",$login);
           $sql->bindParam("senha",$senha);
           $sql->bindParam("tipoUsuario",$tipoUsuario);
           $sql->bindParam("codigoResponsavel",$codigoResponsavel);
           $nomeCompleto = $esc->getNomeCompleto();
           $cpf = $esc->getCpf();
           $telefone = $esc->getTelefone();
           $login = $esc->getLogin();
           $senha = $esc->getSenha();
           $email = $esc->getEmail();
           $tipoUsuario = $esc->getTipoUsuario();
           $codigoResponsavel = $esc->getCodigoResponsavel();
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
               $sql = $minhaConexao->prepare("update bd_projeto2021.usuario set nomeFoto = :nomeFoto where codigoUsuario=:codigoUsuario");
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
            $sql = $minhaConexao->prepare("update bd_projeto2021.usuario set nomeCompleto=:nomeCompleto cpf=:cpf telefone=:telefone email=:email login=:login senha=:senha where codigoUsuario=:codigoUsuario");
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

     public function depositoUsuario($esc){
        try{
            session_start();
            $valorDeposito = $esc->getDeposito();
            $codigoUsuario = $esc->getCodigoUsuario();

            $saldo = $this->consultaSaldo($codigoUsuario);
            $valorDeposito = $valorDeposito + $saldo;
            $_SESSION['saldo']=$valorDeposito;
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("update bd_projeto2021.usuario set saldo=:valorDeposito where codigoUsuario=:codigoUsuario ");
           // $sql->bindParam("nomeCompleto",$nomeCompleto);
           // $sql->bindParam("saldo",$saldo);        
            $sql->bindParam("codigoUsuario",$codigoUsuario);           
            $sql->bindParam("valorDeposito",$valorDeposito); 
            
            

            // var_dump($valorDeposito);
            // return false;
           // $nomeCompleto = $esc->getNomeCompleto();

            
            // var_dump($codigoUsuario);
            $sql->execute();
            
         }
         catch(PDOException $e){
             echo "entrou no catch".$e->getmessage();
            
         }
     }

     /*
     saldo=50
     preço=5

     preço = 50-5= 45

     */

     public function consultaSaldo($codigoUsuario){
   
        $minhaConexao = Conexao::getConexao();
        $sql = $minhaConexao->prepare("select saldo from bd_projeto2021.usuario where codigoUsuario=:codigoUsuario");
        $sql->bindParam("codigoUsuario",$codigoUsuario);           
        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        return intval($result[0]['saldo']);

     }
          

    public function logarUsuario($esc){
        try{
        $minhaConexao = Conexao::getConexao();
        $sql = $minhaConexao->prepare("select * from bd_projeto2021.usuario where login=:login AND senha=:senha");
        $sql->bindParam("login",$login);        
        $sql->bindParam("senha",$senha);        
        
        $login = $esc->getLogin();
        $senha = $esc->getSenha();
        $tipoUsuario = $esc->getTipoUsuario();
            
        $sql->execute();               
        
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);        
        
        session_start();
        
        $_SESSION['nomeCompleto'] = $result[0]['nomeCompleto'];
        $_SESSION['codigoUsuario'] = $result[0]['codigoUsuario'];
        $_SESSION['tipoUsuario'] = $result[0]['tipoUsuario'];
        $_SESSION['saldo'] = $result[0]['saldo'];
        return ($_SESSION);
        

        
        }catch(PDOException $e){
        echo "entrou no catch".$e->getmessage();
        exit();

    }

    }

    }

?>