<p class='display-4 text-center'> Novo Carro </p>

<?php 
    $id = $_REQUEST["id"];
?>

<form class='mt-5' method='POST' action='?page=metodos&acao=cadastrarCarro&id=<?php print $id;?>'>
<div class='container'>
    <div class='row'>
        <div class='col-md-1'>
            <label> Modelo: </label> 
        </div>  
        <div class='col-md-5'>
            <input name="modelo" type='text' class='form-control'/> 
        </div>
        <div class='col-md-1'>
            <label> Placa: </label> 
        </div>  
        <div class='col-md-5'>
            <input type='text' name="placa" class='form-control'/> 
        </div>
    </div>

    <div class='row'>
        <div class='col-md-12 mt-5'>
            <input type='submit' style="width: 100%;" class='btn btn-primary' value='Adicionar'/>
        </div>         
    </div>

<div>
</form>