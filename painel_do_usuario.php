<?php
    include './estrutura_site/head.php';?>
    <link rel="stylesheet" href="./css/tela_de_acesso.css" type="text/css" />
    <?php include './estrutura_site/header.php';

    if(isset($_POST['submit'])){
        $usuario = $_POST['user_access'];
        $senha = $_POST['password_access'];

        if((empty($usuario)) && (empty($senha))){
            echo 'Por favor, preencha todos os campos!';
        }else{
            include 'connectDB.php';
            $query = "SELECT user_access, password_access FROM data_user;";
            $result = mysqli_query($dbc, $query);

            if($result === true){
                
            }
            else{
                echo "Os dados de acesso informados não correspondem com nossa base de dados. Por favor, revise-os.";
            }
        }
    }

    include './estrutura_site/footer.php';
?>