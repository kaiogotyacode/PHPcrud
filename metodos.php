<?php

    switch(@$_REQUEST["acao"]){
        case "cadastrar":

            $nome = $_POST["nome"];
            $salario = $_POST["salario"];

            $sql = "INSERT INTO PESSOA (NOME, SALARIO) VALUES ('{$nome}',{$salario}); ";

            $resp = $conexao->query($sql);

            if($resp){
                print "<script> 
                alert('Cadastro realizado!');
                window.location.href='index.php'; 
                </script>";
            }else{
                print "<script> 
                alert('Falha no cadastro!');
                window.location.href='?page=cadastrar'; 
                </script>";
            }


        break;
        case "listar":
            print ("<p class='display-4 text-center'> Lista de Pessoa(s) </p>");
            
            print "<table class='table table-hover table-fixed table-striped'>";

            print "<thead class='table-dark'>
                    <tr>
                        <th scope='col'> # </th>
                        <th scope='col'> Nome </th>
                        <th scope='col' class='text-center'> Salário </th>
                        <th scope='col' class='text-center'> Ação </th>
                    </tr>
                </thead>
            ";

            print  "<tbody>";
            
            $sql = "SELECT * FROM Pessoa";
            $resp = $conexao->query($sql);
            
            //Se > 0 = EXISTE PESSOA NO BANCO.
            if($resp->num_rows >  0){
                while($row = $resp->fetch_object()){
                    print "<tr>";
                        // # = ID
                        print "<th  scope='row'>";
                            print $row->idPessoa;
                        print "</th>";

                        // NOME 
                        print "<td>";
                            print $row->nome;
                        print "</td>";

                        // SALÁRIO
                        print "<td class='text-center'>";
                            print "R$".$row->salario;
                        print "</td>";

                        // AÇÕES
                        print "<td class='text-center'>";
                            print "<button class='btn btn-primary' style='margin-right: 1vw;' onclick='window.location.href=\"?page=atualizar&id=".$row->idPessoa."\" '> Detalhes </button>";

                            print "<button class='btn btn-danger' style='margin-left: 1vw;' onclick=\"
                                if(confirm('Você realmente deseja excluir o usuário ".$row->nome." ? ')){
                                    window.location.href='?page=metodos&acao=excluir&id=".$row->idPessoa."';
                                }else{
                                    false;
                                };
                            \"> Excluir </button>";
                        print "</td>";

                    print "</tr>";
                }
            }

            print "</tbody>";

            print "</table>";

        break;       
        case "atualizar":
            // receive via $_POST[''];
            $nome = $_POST['nome'];
            $salario = $_POST['salario'];
            $id = $_POST['idPessoa'];

            $sql = "UPDATE Pessoa SET nome = '{$nome}', salario = {$salario} WHERE idPessoa = {$id}; ";

            $resp = $conexao->query($sql);
            if($resp){
                print "<script> 
                    alert('Atualizado com sucesso!');
                </script>";
            }else{
                print "<script> 
                    alert('Falha ao atualizar!');
                </script>";
            }
                    
            print "<script> window.location.href='?page=metodos&acao=listar'; </script>";
        break;
        case "cadastrarCarro":
            $modelo = $_POST["modelo"];
            $placa= $_POST["placa"];

            $id = $_REQUEST["id"];

            $sql = "INSERT INTO Carro (modelo,placa,proprietario) VALUES ('{$modelo}', '{$placa}',{$id});";
            $resp = $conexao->query($sql);

            if($resp){
                print "<script> alert('Carro cadastrado com sucesso!') </script>";
            }else{
                print "<script> alert('Falha ao cadastrar o carro!') </script>";
            }
            print "<script> window.location.href='?page=atualizar&id=".$id."'</script>";

        break;                    
        case "excluir":
            $sql = "DELETE FROM PESSOA WHERE idPessoa  = ".$_REQUEST["id"];
            $resp = $conexao->query($sql);                        
            if($resp){
                print "<script>
                 alert('Usuário deletado com sucesso!') 
                 </script>";                
                }else{
                    print "<script>
                    alert('Falha ao deletar usuário!') 
                    </script>";                                    
                }
                print "<script> window.location.href='?page=metodos&acao=listar'; </script>";
        break;
        default:
        break;
    }

?>

