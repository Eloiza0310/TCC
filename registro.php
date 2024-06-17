<<?php  ?>
<?php session_start();

# CRIAR A CONEXÃO COM O BANCO

$servername = "localhost";
$database = "tcc";
$username = "root";
$password = "";

$conexao = mysqli_connect($servername, $username, $password);
$banco = mysqli_select_db($conexao, $database);
mysqli_set_charset ($conexao , "utf8mb4" );

if (!$conexao) {

    die("Conexão falhou: " . mysqli_connect_error());

}

# CAPTURA AS INFORMÇÕES DIGITADAS NO FORMULÁRIO

$usuario = $_POST['usuarioALUNO'];
$senha = $_POST['senhaALUNO'];


# EXECUTAR O COMANDO QUE INSERE OS DADOS NO BANCO

$query = mysqli_query($conexao, "INSERT INTO cadastro VALUES($usuario, $senha");
    
    if($query)
    {
        echo "<script type='text/javascript'>alert('Cadastrado com Sucesso!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=cad_usuario.php'>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('ERRO ao Inserir os Dados!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=cad_usuario.php'>";
    }


?>