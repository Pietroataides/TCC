<html>
<?php
include('conexao.php');
include('menu.php');
$sql = "SELECT * FROM usuarios";
$query = mysqli_query($conn, $sql);
?>
<div class='container'>
  <div class="jumbotron">

    <h3 class='p-3'>Usuários cadastrados</h3>

    <a href="cadastraUsuario.php" class="btn btn-dark">Cadastrar novo </a>
   

    <table class='table table-hover'>
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>senha</td>
            <td>nascimento</td>
            <td>tempo</td>
            <td class="text-center">Ação</td>
        </tr>

        <?php while ($dados = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $dados['nome'] ?></td>
                <td><?php echo $dados['email'] ?></td>
                <td><?php echo $dados['senha'] ?></td>
                <td><?php echo $dados['nascimento'] ?></td>
                <td><?php echo $dados['tempo'] ?></td>
                
                
                <td colspan="2" class="text-center">
                    <a class='btn btn-info btn-sm' href='editaUsuario.php?codigo=<?php echo $dados['codigo'] ?>'>Editar</a>
                    <a class='btn btn-dark btn-sm' href='#' onclick='confirmar("<?php echo $dados['codigo'] ?>")'>Excluir</a></td>
            </tr>
        <?php } ?>
    </table>
</div>
<script>
    function confirmar(codigo) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'excluiUsuario.php?codigo=' + codigo;
    }
</script>