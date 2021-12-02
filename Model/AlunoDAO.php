<?php
require "Conexao.php";
class AlunoDAO{

    public function listarTodos(){
        //vai ao banco de dados e pega todos os Alunos
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from bd_projeto2021.aluno ");
        
                
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
           $listaAluno=array();
           $i=0;

           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $aluno = new Aluno();
            $aluno->setCodigoAluno($linha['codigoAluno']);
            $aluno->setNomeAluno($linha['nomeAluno']);
            $aluno->setMatricula($linha['matricula']);
            $aluno->setTurma($linha['turma']);
            $aluno->setTurno($linha['turno']);
            $aluno->setTelefone($linha['telefone']);
            $aluno->setEmail($linha['email']);
            $aluno->setFoto($linha['nomeFoto']);
            $aluno->setSaldo($linha['saldo']);

            $listaAluno[$i] = $aluno;
            $i++;
          }
        return $listaAluno;
       }
       catch(PDOException $e){
        return array();
       }
    }

    

    public function incluirAluno($esc){
       try{
           $minhaConexao = Conexao::getConexao();
           $sql = $minhaConexao->prepare("insert into bd_projeto2021.aluno (nomeAluno, matricula, turma, turno, endereco) values (:nomeAluno, :matricula, :turma, :turno, :endereco)");
           $sql->bindParam("nomeAluno",$nomeAluno);
           $sql->bindParam("matricula",$matricula);
           $sql->bindParam("turma",$turma);
           $sql->bindParam("turno",$turno);
           $sql->bindParam("endereco",$endereco);
           $nomeAluno = $esc->getNomeAluno();
           $matricula = $esc->getMatricula();
           $turma = $esc->getTurma();
           $endereco = $esc->getEndereco();
           $turno = $esc->getTurno();
           $sql->execute();
           
           $last_id = $minhaConexao->lastInsertId();
           $esc->setCodigoAluno($last_id);
           echo "aluno incluido com id=".$last_id;
           $logo = $esc->getLogo();  
           if($logo != NULL) {
             echo "entrou no if da logo !=null";
            //defini o nomeAluno do novo arquivo, que será o id gerado para o aluno
            $nomeFinal = $last_id.'.jpg';
            //move o arquivo para a pasta atual com esse novo nomeAluno
            if (move_uploaded_file($logo['tmp_name'], $nomeFinal)) {
                echo "Copiou a logo";
              //atualiza o banco de dados para guardar o nomeAluno do arquivo gerado.
               $sql = $minhaConexao->prepare("update bd_projeto2021.aluno set nomeLogo = :nomeLogo where codigoAluno=:codigoAluno");
               $sql->bindParam("nomeLogo",$nomeFinal);
               $sql->bindParam("codigoAluno",$last_id);
               $sql->execute();
               echo "atualizou o nomeAluno da logo no bd";
               
             }
           }
           return $last_id;
        }
        catch(PDOException $e){
            //return "entrou no catch".$e->getmessage();
            return 0;
        }
    }

    public function alterarAluno($esc){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("update bd_projeto2021.aluno set nomeAluno=:nomeAluno, matricula=:matricula, turma=:turma where codigoAluno=:codigoAluno");
            $sql->bindParam("codigoAluno",$codigoAluno);
            $sql->bindParam("nomeAluno",$nomeAluno);
            $sql->bindParam("matricula",$matricula);
            $sql->bindParam("turma",$turma);
            $codigoAluno = $esc->getCodigoAluno();
            $nomeAluno = $esc->getNomeAluno();
            $matricula = $esc->getMatricula();
            $turma = $esc->getTurma();
            $sql->execute();
            
         }
         catch(PDOException $e){
             //echo "entrou no catch".$e->getmessage();
            
         }
     }
     
    public function excluirAluno($esc){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from bd_projeto2021.aluno where codigoAluno=:codigoAluno");
            $sql->bindParam("codigoAluno",$codigoAluno);
            $codigoAluno = $esc->getCodigoAluno();
            
            $sql->execute();
            
         }
         catch(PDOException $e){
             echo "entrou no catch".$e->getmessage();
             exit();
         }
     }

     public function entrarAluno($esc){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from bd_projeto2021.aluno where nomeAluno=:nomeAluno");
            //$sql->bindParam("codigoAluno",$codigoAluno);
            $sql->bindParam("nomeAluno",$nomeAluno);
            //$nomeAluno = $esc->getNomeAluno();
            
            $sql->execute();
            
         }
         catch(PDOException $e){
             echo "entrou no catch! ".$e->getmessage();
             exit();
         }
     }


}

?>