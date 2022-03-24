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
                <input type="reset" value="Limpar" name="limpar" id="limpar" />
                <input type="submit" value="Entrar" name="entrar" id="entrar" />
            </div>
            <p id="cadastrar_usuario">
            <a href="#" alt="Quero me cadastrar">Quero me cadastrar</a>
            </p>
            <span id="ou">ou</span>
            <p id="esqueci_minha_senha">
                <a href="#" alt="Recuperar minha senha">Eita, esqueci minha senha.</a>
            </p>
        </div>
    </form>
</main>

<?php
    include './estrutura_site/footer.php';
?>