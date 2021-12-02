<?php
 require 'AlunoDAO.php';
 class Aluno{
    private $codigoAluno;
    private $nomeAluno;
    private $matricula;
    private $turma;
    private $turno;
    private $telefone;
    private $email;
    private $foto;
    private $nomeFoto;
    private $login;
    private $senha;    
    private $saldo;    
    private $codigo_responsavel;
    private $codigo_escola;

    public function getCodigoAluno(){
        return $this->codigoAluno;
    }

    public function setCodigoAluno($codigoAluno){
        $this->codigoAluno = $codigoAluno;
    }

    public function getNomeAluno(){
        return $this->nomeAluno;
    }

    public function setNomeAluno($nomeAluno){
        $this->nomeAluno = $nomeAluno;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getTurma(){
        return $this->turma;
    }

    public function setTurma($turma){
        $this->turma = $turma;
    }

    public function getTurno(){
        return $this->turno;
    }

    public function setTurno($turno){
        $this->turno = $turno;
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

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getCodigo_responsavel(){
        return $this->codigo_responsavel;
    }

    public function setCodigo_responsavel($codigo_responsavel){
        $this->codigo_responsavel = $codigo_responsavel;
    }

    public function getCodigo_escola(){
        return $this->codigo_escola;
    }

    public function setCodigo_escola($codigo_escola){
        $this->codigo_escola = $codigo_escola;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    
    public function setSaldo($saldo){
        $this->saldo = $saldo;        
    }
    public function incluirAluno(){
        $alunoDAO = new AlunoDAO();
        $alunoDAO->incluirAluno($this);
    }
    
    public function excluirAluno(){
       $alunoDAO = new AlunoDAO();
       $alunoDAO->excluirAluno($this);
    }
    
    public function pesquisaAluno(){
       $alunoDAO = new AlunoDAO();
       $alunoDAO->pesquisaAluno($this);
    }
    
    public function alterarAluno(){
       $alunoDAO = new AlunoDAO();
       $alunoDAO->alterarAluno($this);
    }
    
    public function listarTodos(){
       $alunoDAO = new AlunoDAO();
       return $alunoDAO->listarTodos();
                
    }
}

?>


