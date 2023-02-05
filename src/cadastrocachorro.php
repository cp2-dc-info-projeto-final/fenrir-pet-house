<?php include "conectauser.inc";
session_start();?>
<?php
                $operacao = $_POST["operacao"];

                if($operacao == "inserir"){
                    $nome = $_POST["nome"]; 
                    $raca = $_POST["raca"];
                    $idade = $_POST["idade"];

                    $erro = 0;

                    if(empty($nome)){                      
                        $erro = 1;
                    }

                    if(empty($raca)){                       
                        $erro = 1;
                    }

                    if(empty($idade)){                        
                        $erro = 1;
                    }

                    if ($erro == 0){
                      $sql = "INSERT INTO cachorro (nome, idade, raca, email_dono)";
                        $sql .= "VALUES ('$nome', '$idade', '$raca', '{$_SESSION["email"]}');";  
                        mysqli_query($mysqli,$sql);
                        header ("Location: agendamento.php");
                        echo mysqli_error($mysqli);
                        mysqli_close($mysqli);
                    }
                    if ($erro == 1){
                      echo '<script type="text/javascript">';
                      echo 'alert("Erro no cadastro! Revise suas credenciais e tente novamente.");';
                      echo 'window.location.href = "reserva.html";';
                      echo '</script>';
                    }
                  }
              