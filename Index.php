<?php
    
	//testa a variável url que veio lá do htaccess
	if (isset($_GET['url'])) //se estiver preenchida, pega o valor
	  {
            $url =  strtoupper($_GET['url']);
           // echo $url;
    		switch ($url){
	    		case "NOVAESCOLA":
					require "Controller/ControladorFormEscola.php";    
				    $controlador = new ControladorFormEscola();
					$controlador->processaRequisicao();
					break;
				case "INCLUIRESCOLA":
					require "Controller/ControladorNovaEscola.php";    
					$controlador = new ControladorNovaEscola();
					$controlador->processaRequisicao();
					break;
				case "EXCLUIRESCOLA":
					require "Controller/ControladorEscolaExcluir.php";    
					$controlador = new ControladorEscolaExcluir();
					$controlador->processaRequisicao();
					break;
				case "FORMALTERARESCOLA":
					require "Controller/ControladorFormEscolaAlterar.php";    
					$controlador = new ControladorFormEscolaAlterar();
					$controlador->processaRequisicao();
					break;
				case "ALTERARESCOLA":
					require "Controller/ControladorEscolaAlterar.php";    
					$controlador = new ControladorEscolaAlterar();
					$controlador->processaRequisicao();
					break;
			    case "LISTARESCOLA":
					require "Controller/ControladorEscolaListar.php";
                    $controlador = new ControladorEscolaListar();
                    $controlador->processaRequisicao();
					break;
				case "NOVOUSUARIO":
					require "Controller/ControladorFormUsuario.php";
					$controlador = new ControladorFormUsuario();
					$controlador->processaRequisicao();
					break;
				case "NOVOALUNO":
					require "Controller/ControladorFormAluno.php";
					$controlador = new ControladorFormAluno();
					$controlador->processaRequisicao();
					break;
				case "INCLUIRUSUARIO":
					require "Controller/ControladorNovoUsuario.php";
					$controlador = new ControladorNovoUsuario();
					$controlador->processaRequisicao();
					break;
				case "INCLUIRALUNO":
					require "Controller/ControladorNovoAluno.php";
					$controlador = new ControladorNovoAluno();
					$controlador->processaRequisicao();
					break;
				case "EXCLUIRUSUARIO":
					require "Controller/ControladorUsuarioExcluir.php";
					$controlador = new ControladorUsuarioExcluir();
					$controlador->processaRequisicao();
					break;
			    case "LISTARUSUARIO":
					require "Controller/ControladorUsuarioListar.php";
                    $controlador = new ControladorUsuarioListar();
                    $controlador->processaRequisicao();
					break;
				case "FORMALTERARUSUARIO":
					require "Controller/ControladorFormUsuarioAlterar.php";    
					$controlador = new ControladorFormUsuarioAlterar();
					$controlador->processaRequisicao();
					break;
				case "ALTERARUSUARIO":
					require "Controller/ControladorUsuarioAlterar.php";    
					$controlador = new ControladorUsuarioAlterar();
					$controlador->processaRequisicao();
					break;
				case "LOGIN":
					require "Controller/ControladorLogin.php";
					$controlador = new ControladorLogin();
					$controlador->processaRequisicao();
					break;			
				case "NOVOPRODUTO":
					require "Controller/ControladorFormProduto.php";    
					$controlador = new ControladorFormProduto();
					$controlador->processaRequisicao();
					break;
				case "INCLUIRPRODUTO":
					require "Controller/ControladorNovoProduto.php";    
					$controlador = new ControladorNovoProduto();
					$controlador->processaRequisicao();
					break;
				case "EXCLUIRPRODUTO":
					require "Controller/ControladorProdutoExcluir.php";    
					$controlador = new ControladorProdutoExcluir();
					$controlador->processaRequisicao();
					break;
				case "FORMALTERARPRODUTO":
					require "Controller/ControladorFormProdutoAlterar.php";    
					$controlador = new ControladorFormProdutoAlterar();
					$controlador->processaRequisicao();
					break;
				case "ALTERAPRODUTO":
					require "Controller/ControladorProdutoAlterar.php";    
					$controlador = new ControladorProdutoAlterar();
					$controlador->processaRequisicao();
					break;
				case "LISTAPRODUTO":
					require "Controller/ControladorProdutoListar.php";
					$controlador = new ControladorProdutoListar();
					$controlador->processaRequisicao();
					break;
				case "LISTASALDOALUNO":
					require "Controller/ControladorSaldoListarAluno.php";
					$controlador = new ControladorSaldoListarAluno();
					$controlador->processaRequisicao();
					break;
				case "TELAALUNO":
					require "Controller/ControladorTelaAluno.php";
					$controlador = new ControladorTelaAluno();
					$controlador->processaRequisicao();
					break;
				case "TELARESPONSAVEL":
					require "Controller/ControladorTelaResponsavel.php";
					$controlador = new ControladorTelaResponsavel();
					$controlador->processaRequisicao();
					break;
				case "FORMTELARESPONSAVEL":
					require "Controller/ControladorFormTelaResponsavel.php";
					$controlador = new ControladorFormTelaResponsavel();
					$controlador->processaRequisicao();
					break;
				case "PRINCIPAL":				
				    require "Controller/ControladorEscolaListar.php";
				    $controlador = new ControladorEscolaListar();
				    $controlador->processaRequisicao();
				    break;
				case "PROCESSALOGIN":					
					require "Controller/ControladorProcessaLogin.php";
					$controlador = new ControladorProcessaLogin();
					$controlador->processaRequisicao();
					break;
				case "LOGIN":					
					require "Controller/ControladorLogin.php";
					$controlador = new ControladorLogin();
					$controlador->processaRequisicao();
					break;
				case "DEPOSITOUSUARIO":				
					require "Controller/ControladorUsuarioDeposito.php";
					$controlador = new ControladorUsuarioDeposito();
					$controlador->processaRequisicao();
					break;
				case "FORMDEPOSITOUSUARIO":				
					require "Controller/ControladorFormUsuarioDeposito.php";
					$controlador = new ControladorFormUsuarioDeposito();
					$controlador->processaRequisicao();
					break;
				case "FORMCOMPRAPRODUTO":				
					require "Controller/ControladorFormCompraProduto.php";
					$controlador = new ControladorFormCompraProduto();
					$controlador->processaRequisicao();
					break;
				case "FORMCOMPRA":				
					require "Controller/ControladorFormCompra.php";
					$controlador = new ControladorFormCompra();
					$controlador->processaRequisicao();
					break;
				case "COMPRARPRODUTO":
					require "Controller/ControladorComprarProduto.php";    
					$controlador = new ControladorComprarProduto();
					$controlador->processaRequisicao();
					break;
				case "REALIZARCOMPRA":
					require "Controller/ControladorRealizarCompra.php";    
					$controlador = new ControladorRealizarCompra();
					$controlador->processaRequisicao();
					break;
				default:
				require "Controller/ControladorLogin.php";
					$controlador = new ControladorLogin();
					$controlador->processaRequisicao();
					break;
			
			}
			  
		}
		else                     //senão, vai para uma página padrão, neste caso a home do site
            $url = '404.php';

?>
	