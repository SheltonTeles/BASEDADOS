<?php
$servername = "localhost";
$database = "recrutamento";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//  echo "Connected";
// mysqli_close($conn);

function insertData()
{
    global $conn;
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];

        if ($_POST['password'] == $_POST['confPwd']) {
            $pwd = $_POST['password'];
        }

        $phone = $_POST['phone'];
        $type = 1;

        $sq = "SELECT * FROM `users`";
        $res = mysqli_query($conn, $sq);
        $row = mysqli_fetch_assoc($res);
        if ($row["email"] == $email) {
            echo '<p class="error">User existente</p>';
        } else {
            $sql = "insert into `users` (name,surname,phone,email,password,type) values('$name','$surname','$phone','$email','$pwd','$type')";

            $result = mysqli_query($conn, $sql);
            if ($result) {
                header('location:userList.php');
            } else {
                die(mysqli_error($conn));
            }
        }
    }
}

function checkUser()
{
    session_start();
    global $conn;
    if (isset($_POST['uemail']) && isset($_POST['upassword'])) {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST['uemail']);
        $password = validate($_POST['upassword']);
        // $name = validate($_POST['name']);

        if (empty($email)) {
            header("Location: ./signIn.php?error=Utilizador necessario");
            exit();
        } else if (empty($password)) {
            header("Location: ./signIn.php?error=Palavra-passe necessaria");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                // global $row;
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row['password'] === $password) {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['surname'] = $row['surname'];
                    $_SESSION['phone'] = $row['phone'];
                    $_SESSION['bi'] = $row['bi'];

                    if ($row['type'] == 0) {
                        header("location:adminIndex.php");
                    } else {
                        header("location:home.php");
                    }
                    // echo"Ola"+ $_SESSION['email'];
                } else {
                    // header("Location: ./signIn.php?error=Incorrect email or Password");
                }
            } else {
                // header("Location: ./signIn.php?error=Incorrect email or Password");
            }
        }
    }
}

function adicionarVaga(){
    global $conn;
    if (isset($_POST['submit'])) { //Se $_POST['submit'] significa que o formulário foi submetido
        $nome_vaga = $_POST['nomeVaga'];
        $descricao_vaga = $_POST['descricao_vaga'];
        $data_termino = $_POST['data_termino'];
        $sector_vaga = $_POST['sector_vaga'];
        $id_admin = 1;
        $sql = "insert into `vaga`  (nome_vaga, descricao, data_termino, sector, id_admin) values('$nome_vaga','$descricao_vaga','$data_termino','$sector_vaga','$id_admin')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location:listaVagas.php');
        } else {
            die(mysqli_error($conn));
        }
    }
}
//

//---CANDIDATURA
function candidatar($id_vaga){
    global $conn;
    if (isset($_POST['submit'])) { //Se $_POST['submit'] significa que o formulário foi submetido
        $nome_candidato = $_POST['nome_candidato'];
        $data_nascimento = $_POST['data_nascimento'];
        $titulo = $_POST['titulo'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $telemovel = $_POST['telemovel'];
        $pais_residencia = $_POST['pais_residencia'];
        $nacionalidade = $_POST['nacionalidade'];
        $linkedIn = $_POST['linkedIn'];
        $mais_sobre = $_POST['mais_sobre'];
        $sql = "insert into `candidato`  (nome, data_nascimento, titulo, idade, email, telemovel, pais_residencia,nacionalidade,linked_in) values('$nome_candidato','$data_nascimento','$titulo','$idade','$email','$telemovel','$pais_residencia','$nacionalidade','$linkedIn')";
        $result = mysqli_query($conn, $sql);

        $ultimo_candidato="SELECT id FROM candidato ORDER BY ID DESC LIMIT 1";
        $ultimo_candidato=mysqli_query($conn, $sql);
        $ultima_linha_candidato=mysqli_fetch_row($ultimo_candidato);

        $vaga_candidato_sql="insert into `candidato_vaga` (id_candidato, id_vaga) values ('$ultima_linha_candidato[0]','$id_vaga')";
        if ($result) {
            header('location:../home.php');
        } else {
            die(mysqli_error($conn));
        }
    }
}
?>