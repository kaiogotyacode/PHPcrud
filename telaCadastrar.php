<p class='display-4 text-center'> Tela de Cadastro </p>

<form class='mt-5' method='POST' action='?page=metodos&acao=cadastrar'>
<div class='container'>
    <div class='row'>
        <div class='col-md-1'>
            <label> Nome: </label> 
        </div>  
        <div class='col-md-5'>
            <input name="nome" type='text' class='form-control'/> 
        </div>
        <div class='col-md-1'>
            <label> Salário: </label> 
        </div>  
        <div class='col-md-5'>
            <input type='number' name="salario"  min='1' step='any' class='form-control'/> 
        </div>
    </div>

    <div class='row'>
        <div class='col-md-12 mt-5'>
            <input type='submit' style="width: 100%;" class='btn btn-success' value='Cadastrar'/>
        </div>         
    </div>

<div>
</form>