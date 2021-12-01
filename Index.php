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
			    case "LISTARUSUARIO":
					require "Controller/ControladorUsuarioListar.php";
                    $controlador = new ControladorUsuarioListar();
                    $controlador->processaRequisicao();
					break;
				case "NOVOUSUARIO":
					require "Controller/ControladorFormUsuario.php";
					$controlador = new ControladorFormUsuario();
					$controlador->processaRequisicao();
					break;
				case "INCLUIRUSUARIO":
					require "Controller/ControladorNovoUsuario.php";
					$controlador = new ControladorNovoUsuario();
					$controlador->processaRequisicao();
					break;
				case "INICIO":
					require "Controller/ControladorInicio.php";
					$controlador = new ControladorInicio();
					$controlador->processaRequisicao();
					break;
				case "FORMENTRARESCOLA":
					require "Controller/ControladorEntrarEscola.php";
					$controlador = new ControladorEntrarEscola();
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
				default:
				    require "Controller/ControladorEscolaListar.php";
				    $controlador = new ControladorEscolaListar();
				    $controlador->processaRequisicao();
				    break;
			
			}
			  
		}
		else                     //senão, vai para uma página padrão, neste caso a home do site
            $url = '404.php';

?>
	