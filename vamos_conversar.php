<?php
    include './estrutura_site/head.php';?>
    <link rel="stylesheet" href="./css/vamos_conversar.css" type="text/css" />
    <?php include './estrutura_site/header.php';
    
    $name_user = "";
    $email_user = "";
    $subject = "";
    $text = "";

    if(isset($_POST['enviar'])){
        
        $email_to = 'gustavohcsantos@gmail.com';
        $name_user = $_POST['name_user'];
        $email_user = $_POST['email_user'];
        $subject = $_POST['subject'];
        $text = $_POST['text'];

        if(empty($name_user) && empty($email_user) && empty($subject) && empty($text)){
            echo "Campos vazios. Por favor, preencha-os.<br><br>";
            $output_form = true;
        }
        if(empty($name_user) && !empty($email_user) && !empty($subject) && !empty($text)){
            echo "Por favor, preencha o campo NOME antes de enviar.<br><br>";
            $output_form = true;
        }
        if(!empty($name_user) && empty($email_user) && !empty($subject) && !empty($text)){
            echo "Por favor, preencha o campo e-MAIL antes de enviar.<br><br>";
            $output_form = true;
        }
        if(!empty($name_user) && !empty($email_user) && empty($subject) && !empty($text)){
            echo "Por favor, preencha o campo ASSUNTO antes de enviar.<br><br>";
            $output_form = true;
        }
        if(!empty($name_user) && !empty($email_user) && !empty($subject) && empty($text)){
            echo "Por favor, preencha o campo MENSAGEM antes de enviar.<br><br>";
            $output_form = true;
        }
    }else{
        $output_form = true;
    }
    if(!empty($name_user) && !empty($email_user) && !empty($subject) && !empty($text)){
        $msg = "Nome: $name_user<br /><br />Mensagem: $text";
        mail($email_to, $subject, $msg, 'From:' . $email_user);
        ?><script type="text/javascript">alert("E-mail enviado com sucesso!");</script><?php
    }
    if($output_form = true){
    ?>
        <main>
            <h4>
                Como está seu pet hoje? Espero que feliz. =)
            </h4>
            <div class="bloco_formulario">
                <div class="formulario">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="text" name="name_user" id="name_user" class="tamanho_entrada_dados" placeholder="Nome" value="<?php echo $name_user ?>" /><br />
                        <input type="text" name="email_user" id="email_user" class="tamanho_entrada_dados" placeholder="e-Mail" value="<?php echo $email_user ?>" /><br />
                        <input type="text" name="subject" id="subject" class="tamanho_entrada_dados" placeholder="Qual assunto?" value="<?php echo $subject ?>" /><br />
                        <textarea name="text" id="text" class="tamanho_entrada_dados" placeholder="Sobre o que quer falar?" ><?php echo $text ?></textarea><br /><br />
                        <input type="submit" name="enviar" id="enviar" value="Enviar"/>
                    </form>
                </div>
            </div>
        </main>
    <?php
    }
    include './estrutura_site/footer.php';
?>