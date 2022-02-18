<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $dose = $_POST['dose'];
        $horarios = $_POST['horarios'];
        $por_quantos_dias = $POST['tempo'];

        if(($nome != "") && ($dose != "") && ($horarios != "") && ($por_quantos_dias != "")){
            include 'connectDB.php';
            $query = "INSERT INTO medication_list(nome, dose, horarios, por_quantos_dias) values()";
        }
    ?>
</body>
</html>