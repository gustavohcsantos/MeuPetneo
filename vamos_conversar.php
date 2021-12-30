<?php
    /*include './estrutura_site/head.php';
    include './estrutura_site/header.php';
?>
    
    <main>
        <h3>
            Como está seu pet hoje? Espero que feliz. =)
        </h3>
        <div class="bloco_formulario">
            <div class="formulario">
                <form method="POST" action="php/index.php">
                    <input type="text" name="name_user" id="name_user" class="tamanho_entrada_dados" placeholder="Nome" required="required"/><br />
                    <input type="text" name="email_user" id="email_user" class="tamanho_entrada_dados" placeholder="e-Mail"required="required"/><br />
                    <input type="text" name="subject" id="subject" class="tamanho_entrada_dados" placeholder="Qual assunto?"required="required"/><br />
                    <textarea name="mensagem" id="mensagem" class="tamanho_entrada_dados" placeholder="Sobre o que quer falar?"required="required"></textarea><br /><br />
                    <input type="submit" name="enviar" id="enviar" value="Enviar"/>
                </form>
            </div>
        </div>
    </main>

<?php
    include './estrutura_site/footer.php';*/
?>

<?php
    include './estrutura_site/head.php';
    include './estrutura_site/header.php';
    
    $from = 'gustavohcsantos@gmail.com';
    $name_user = "";
    $email_user = "";
    $subject = "";
    $text = "";
    $output_form = false;

    if(isset($_POST['submit'])){
        $from = 'gustavohcsantos@gmail.com';
        $name_user = $_POST['name_user'];
        $email_user = $_POST['email_user'];
        $subject = $_POST['subject'];
        $text = $_POST['text'];

        if(empty($name_user)){
            echo "Por favor, preencha o campo NOME antes de enviar.<br><br>";
            $output_form = true;
        }else if(empty($email_user)){
            echo "Por favor, preencha o campo e-MAIL antes de enviar.<br><br>";
            $output_form = true;
        }else if(empty($subject)){
            echo "Por favor, preencha o campo ASSUNTO antes de enviar.<br><br>";
            $output_form = true;
        }else if(empty($text)){
            echo "Por favor, preencha o campo MENSAGEM antes de enviar.<br><br>";
            $output_form = true;
        }else{
            $msg = "Nome: $name_user<br /><br />Mensagem: $text";
            mail($email_user, $subject, $msg, 'From:' . $from);
            echo "enviado";
        }
    }else{
        $output_form = true;
    }

    if($output_form){
?>
        <main>
            <h3>
                Como está seu pet hoje? Espero que feliz. =)
            </h3>
            <div class="bloco_formulario">
                <div class="formulario">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="text" name="name_user" id="name_user" class="tamanho_entrada_dados" placeholder="Nome" required="required" value="<?php echo $name_user ?>" /><br />
                        <input type="text" name="email_user" id="email_user" class="tamanho_entrada_dados" placeholder="e-Mail" required="required" value="<?php echo $email_user ?>" /><br />
                        <input type="text" name="subject" id="subject" class="tamanho_entrada_dados" placeholder="Qual assunto?" required="required" value="<?php echo $subject ?>" /><br />
                        <textarea name="mensagem" id="mensagem" class="tamanho_entrada_dados" placeholder="Sobre o que quer falar?" required="required"><?php echo $text ?></textarea><br /><br />
                        <input type="submit" name="enviar" id="enviar" value="Enviar"/>
                    </form>
                </div>
            </div>
        </main>
    <?php
    }
    include './estrutura_site/footer.php';
?>