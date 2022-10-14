<?php
include('conexao.php');

if (isset($_POST['btnEnviar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nascimento =  $_POST['nascimento'];
    $time = $_POST['tempo'];
    $time = $time.':00';
    echo "time: " . $time;
    echo"nascimento:".$nascimento;
    $sql = "INSERT INTO usuarios (nome, email, senha, nascimento, tempo) 
            VALUES ('$nome', '$email', '$senha', '$nascimento', '$time')";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário cadastrado com sucesso.') </script>";
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
?>
<html>
<style>

</style>
<?php include('menu.php'); ?>
<div class='container'>
    <h3 class='p-3'>Cadastrar usuário</h3>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group font-weight-bold">
            Nome: <input class='form-control' type="text" name="nome" style="border: solid 1px #232426; border-radius: 20px; background-color: #ffffff" />
        </div>
        <div class="form-group font-weight-bold">
            Email: <input class='form-control' type="email" name="email" style="border: solid 1px #232426; border-radius: 20px; background-color: #ffffff" />
        </div>
        <div class="form-group font-weight-bold">
            Serviço:</br> <select class='form-select' type="password" name="senha" style="border: solid 1px #232426; border-radius: 20px; background-color: #ffffff; padding:8px">
                <option selected>Selecione um serviço</option>
                <option value="1">Biomédica</option>
                <option value="2">Cabeleireira</option>
                <option value="3">Depilação</option>
                <option value="4">Design de sobrancelha e micropegmentação</option>
                <option value="5">Estética</option>
                <option value="6">Extensão de cílios</option>
                <option value="7">Maquiadora e extesionista de cílios</option>
                <option value="8">Massagista</option>
                <option value="9">Manicure</option>
                <option value="10">Pedicure</option>
            </select>

        </div>
        <div class="form-group font-weight-bold">
            Data: <input class='form-control' type="date" name="nascimento" style="border: solid 1px #232426; border-radius: 20px; background-color: #ffffff" />
            <div class="form-group">
                Horário: <input class='form-control' type="time" name="tempo" style="border: solid 1px #232426; border-radius: 20px; background-color: #ffffff" />
            </div>
            <div class="form-group font-weight-bold">
                <input class='button-submit btn btn-success text-dark' type="submit" name="btnEnviar" style="background-color: #00000000; border: solid 1px green;" />
                <input class='btn btn-warning' type="reset" value="Limpar campos" />
            </div>
    </form>
</div>


</html>