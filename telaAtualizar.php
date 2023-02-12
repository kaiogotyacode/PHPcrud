<?php
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM PESSOA WHERE idPessoa = $id";

    $resp = $conexao->query($sql);
    $row = $resp->fetch_object();
    
?>


<p class='display-4 text-center'> Tela de Atualização </p>

<form class='mt-5' method='POST' action='?page=metodos&acao=atualizar&id=<?php print $id; ?>'>
<div class='container'>
    <div class='row'>
        <input type="hidden" name="idPessoa" value="<?php print $row->idPessoa; ?>"/>
        <div class='col-md-1'>
            <label> Nome: </label> 
        </div>  
        <div class='col-md-5'>
            <input name="nome" type='text' value="<?php print $row->nome; ?>" class='form-control'/> 
        </div>
        <div class='col-md-1'>
            <label> Salário: </label> 
        </div>  
        <div class='col-md-5'>
            <input type='number' name="salario" value="<?php print $row->salario; ?>"  min='1' step='any' class='form-control'/> 
        </div>
    </div>

    <div class='row'>
        <div class='col-md-12 mt-5'>
            <input type='submit' style="width: 100%;" class='btn btn-warning' value='Atualizar'/>
        </div>         
    </div>

<div>
</form>