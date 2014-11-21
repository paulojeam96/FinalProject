<?php
            
include "database/conectaSQL.php";

            #define tamanho e tipo do arquivo recebido
            $tamanho_maximo = $_POST['MAX_SIZE_FILE'];
            $tipos_aceitos = array("image/x-png","image/jpeg","image/gif","image/bmp");

            #Validação do arquivo recebido
            $arquivo = $_FILES['arquivo'];

            if($arquivo['error'] != 0){
                    switch($arquivo['error']){
                            #Tamanho maior que o pHp suporta
                            case UPLOAD_ERR_INI_SIZE:
                                    echo "Erro: O aquivo excede o tamanho máximo permitido";
                                    exit;
                                    break;
                            #Tamanho maior que o definido
                            case UPLOAD_ERR_FORM_SIZE:
                                    echo "Erro: Arquivo muito grande";
                                    exit;
                                    break;
                            #Problema durante o envio
                            case UPLOAD_ERR_PARTIAL:
                                    echo "Erro: Envio não concluído";
                                    exit;
                                    break;
                            #Usuário não enviou um arquivo
                            case UPLOAD_ERR_NO_FILE:
                                    echo "Erro: você não enviou um arquivo<br/>";
                                    exit;
                                    break;
                    }
                    #Verifica o tipo (extensão) do arquivo enviado
                    if(array_search($arquivo['type'],$tipos_aceitos)===FALSE){
                            echo "Erro: Tipo de dados não permitido: Utilize apenas JPG, PNG, BMP ou GIF";
                            exit;
                    }
                    #Verifica se o arquivo enviado é vazio
                    if($arquivo['size']==0 OR $arquivo['temp_name']==NULL){
                            echo "Erro Arquivo vazio.";
                            exit;
                    }
                    #Tamanho maior que o permitido
                    if($arquivo['size']>$tamanho_maximo){
                            echo "Erro: Arquivo maior que o permitido";
                            exit;
                    }
            }
            else{
                    #Onde será salvo
                    session_start();
                    $usuario=$_SESSION['FEEGusuario'];
                    if(!file_exists('user/'.$usuario)){
                            mkdir('user/'.$usuario,0777, true);
                    }
                    $destino='user/'.$usuario.'/imgperfil.gif';
                    #Move o temporário para o destino e verifica se está tudo ok
                    if(move_uploaded_file($arquivo['tmp_name'],$destino)){
                            echo header("location:index.php");
                    }
                    else{
                            echo "Erro ao salvar o arquivo";
                    }
            }
     ?>