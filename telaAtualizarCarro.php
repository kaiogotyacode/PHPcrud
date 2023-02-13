<p class='display-4 text-center'> Atualizar Carro </p>

<?php 
    $id = $_REQUEST["id"];
    $idCarro = $_REQUEST["idCarro"];
    
    $sql = "SELECT * FROM Pessoa P INNER JOIN Carro C ON (p.idPessoa = c.proprietario) WHERE c.idCarro = $idCarro"; 

    $resp = $conexao->query($sql);
    $row = $resp->fetch_object();

?>

<form class='mt-5' method='POST' action='?page=metodos&acao=atualizarCarro&id=<?php print $id;?>&idCarro=<?php print $idCarro;?>'>
<div class='container'>
    <div class='row'>
        <div class='col-md-1'>
            <label> Modelo: </label> 
        </div>  
        <div class='col-md-5'>
            <input name="modelo" type='text' value="<?php print $row->modelo;?>" class='form-control'/> 
        </div>
        <div class='col-md-1'>
            <label> Placa: </label> 
        </div>  
        <div class='col-md-5'>
            <input type='text' name="placa"  value="<?php print $row->placa;?>" class='form-control'/> 
        </div>
    </div>

    <div class='row'>
        <div class='col-md-12 mt-5'>
            <input type='submit' style="width: 100%;" class='btn btn-warning' value='Atualizar'/>
        </div>         
    </div>

<div>
</form>