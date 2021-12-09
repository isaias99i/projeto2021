<?php
 require 'UsuarioDAO.php';
 class Usuario{
    private $codigoUsuario;
    private $nomeCompleto;
    private $matricula;
    private $turma;
    private $turno;
    private $cpf;
    private $telefone;
    private $email;
    private $login;
    private $senha;   
    private $saldo; 
    private $codigoresponsavel;
    private $codigoEscola;
    private $tipoUsuario;
    private $foto;
    private $nomeFoto;
    private $valorDeposito;



    // public function getUsuario(){
    //     $usuario = [$this->$usuario,$this->$codigoUsuario]
    //     return $usuario;
    // }

    public function getCodigoUsuario(){
        return $this->codigoUsuario;
    }

    
    public function setCodigoUsuario($codigoUsuario){
        $this->codigoUsuario = $codigoUsuario;        
    }
    

    
    public function getNomeCompleto(){
        return $this->nomeCompleto;
    }

    
    public function setNomeCompleto($nomeCompleto){
        $this->nomeCompleto = $nomeCompleto;        
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
    
    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;        
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

    public function getSaldo(){
        return $this->saldo;
    }
    
    public function setSaldo($saldo){
        $this->saldo = $saldo;        
    }
      

    public function setDeposito($valorDeposito){
        if($valorDeposito <= 0){
            echo "Valor indevido!";
        }else {
            $this->valorDeposito = $valorDeposito;
        }
    }    
    
    public function getDeposito(){
        return $this->valorDeposito;
    }

    public function getCodigoEscola(){
        return $this->codigoEscola;
    }

    
    public function setCodigoEscola($codigoEscola){
        $this->codigoEscola = $codigoEscola;        
    }

    public function getTipoUsuario(){
        return $this->tipoUsuario;
    }

    
    public function setTipoUsuario($tipoUsuario){
        $this->tipoUsuario = $tipoUsuario;        
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
    
    public function listarTodos(){
        $usuarioDAO = new UsuarioDAO();
        return $usuarioDAO->listarTodos();
    }
    public function incluirUsuario(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->incluirUsuario($this);
    }
    public function alterarUsuario(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->alterarUsuario($this);
    }
    public function excluirUsuario(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->excluirUsuario($this);
    }
    public function entrarUsuario(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->entrarUsuario($this);
    }
    public function depositoUsuario(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->depositoUsuario($this);
    }
    // public function logarUsuario(){
    //     $usuarioDAO = new UsuarioDAO();
    //     $usuarioDAO->logarUsuario($this);
    // }
 }
 
?>