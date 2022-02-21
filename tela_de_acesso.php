<?php
    include './estrutura_site/head.php';?>
    <link rel="stylesheet" href="./css/tela_de_acesso.css" type="text/css" />
    <?php include './estrutura_site/header.php';
?>

<main>
    <form action="painel_do_usuario.php" method="POST">
        <div id="bloco_acesso">
            <div id="entrada_de_dados">
                <input type="text" name="user_access" id="user_access" placeholder="Usuário" /><br />
                <input type="password" name="password_access" id="password_access" placeholder="Senha" />
            </div>
            <div id="botoes_entrar_ou_limpar">
                <input type="reset" value="Limpar" />
                <input type="submit" value="Entrar" />
            </div>
            <p id="esqueci_minha_senha">
                <a href="#" alt="Recuperar minha senha">Eita, esqueci minha senha.</a>
            </p>
        </div>
    </form>
</main>

<?php
    include './estrutura_site/footer.php';
?>