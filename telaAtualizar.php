<?php
$id = $_REQUEST['id'];

$sql = "SELECT * FROM PESSOA WHERE idPessoa = $id";

$resp = $conexao->query($sql);
$row = $resp->fetch_object();

?>


<p class='display-4 text-center'> Detalhes do Usuário </p>

<form class='mt-5' method='POST' action='?page=metodos&acao=atualizar&id=<?php print $id; ?>' >
    <div class='container'>

        <div class='row'>
            <input type="hidden" name="idPessoa" value="<?php print $row->idPessoa; ?>" />
            <div class='col-md-1'>
                <label> Nome: </label>
            </div>
            <div class='col-md-5'>
                <input name="nome" type='text' value="<?php print $row->nome; ?>" class='form-control' />
            </div>
            <div class='col-md-1'>
                <label> Salário: </label>
            </div>
            <div class='col-md-5'>
                <input type='number' name="salario" value="<?php print $row->salario; ?>" min='1' step='any'
                    class='form-control' />
            </div>
        </div>

        <p class='display-4 text-center mt-5'> Carros Cadastrados </p>
        <div>
            <?php 
                                
                $sql = "SELECT * FROM Carro C INNER JOIN Pessoa P ON (c.proprietario = p.idPessoa) WHERE p.idPessoa = {$row->idPessoa}";
                $resp = $conexao->query($sql);
                
                //Se > 0 = EXISTE PESSOA NO BANCO.
                if($resp->num_rows >  0){

                    print "<table class='table table-hover table-fixed table-striped'>";
    
                    print "<thead class='table-light'>
                            <tr>
                                <th scope='col'> # </th>
                                <th scope='col'> Modelo </th>
                                <th scope='col' class='text-center'> Placa </th>
                                <th scope='col' class='text-center'> Ação </th>
                            </tr>
                        </thead>
                    ";
                print  "<tbody>";
        
                    while($row = $resp->fetch_object()){

                        print "<tr>";
                            // # = ID
                            print "<th  scope='row'>";
                                print $row->idPessoa;
                            print "</th>";
    
                            // NOME 
                            print "<td>";
                                print $row->modelo;
                            print "</td>";
    
                            // SALÁRIO
                            print "<td class='text-center'>";
                                print $row->placa;
                            print "</td>";
    
                            // AÇÕES
                            print "<td class='text-center'>";
                                print "<button type='button' class='btn btn-primary' style='margin-right: 1vw;' onclick='window.location.href=\"?page=atualizarCarro&id=".$row->idPessoa."&idCarro=".$row->idCarro."\" '> Editar </button>";
    
                                print "<button type='button' class='btn btn-danger' style='margin-left: 1vw;' onclick=\"
                                    if(confirm('Você realmente deseja excluir o modelo ".$row->modelo." ? ')){
                                        window.location.href='?page=metodos&acao=excluirCarro&idCarro=".$row->idCarro."&id=".$row->idPessoa."';  
                                    }else{
                                        false;
                                    };
                                \"> Excluir </button>";
                            print "</td>";
    
                        print "</tr>";
                    }
                }else{
                    print "<p class='form-control text-center' disabled style='width: 100%'> Não há carros cadastrados para este usuário! </p>";
                }

                print "</tbody>";

                print "</table>";
    
            ?>
        </div>

    </div>

    <div class='row'>
        <div class='col-md-12 mt-5'>
            <button type="button" style="width: 100%;" class='btn btn-success' onclick="<?php print "window.location.href='?page=cadastrarCarro&id=".$_REQUEST["id"]; ?>'"> Adicionar Carro </button>
        </div>
    </div>

    <div class='row'>
        <div class='col-md-12 mt-1'>
            <input type='submit' style="width: 100%;" class='btn btn-warning' value='Atualizar' />
        </div>        
    </div>

</form>