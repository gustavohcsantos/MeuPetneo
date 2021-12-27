<?php
    include './estrutura_site/head.php';
    include './estrutura_site/header.php';
    
    echo '
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
    ';

    include './estrutura_site/footer.php';
?>

<?php
    /*include './estrutra_site/head.php';
    include './estrutra_site/header.php';
    
    if(isset($_POST['submit'])){
        $from = 'gustavohcsantos.emaildeteste@gmail.com';
        
        $name_user = $_POST['name_user'];
        $email_user = $_POST['email_user'];
        $subject = $_POST['subject'];
        $text = $_POST['text'];

        $output_form = false;
        
        if((empty($name_user)) && (empty($email_user)) && (empty($subject)) && (empty($text))){
            echo "Ambos campos estão vazios.<br>Por favor, preencha-os antes de enviar.<br><br>";
            $output_form = true;
        }//Verifica se TODOS OS CAMPOS estão vazios
        
        if((empty($name_user)) && (!empty($email_user)) && (!empty($subject)) && (!empty($text))){
            echo "Por favor, preencha o campo nome antes de enviar.<br><br>";
            $output_form = true;
        }//Verifica se apenas o input NOME está vazio

        if((!empty($name_user)) && (empty($email_user)) && (!empty($subject)) && (!empty($text))){
            echo "Por favor, preencha o campo e-mail antes de enviar.<br><br>";
            $output_form = true;
        }//Verifica se apenas o input E-MAIL está vazio

        if((!empty($name_user)) && (!empty($email_user)) && (empty($subject)) && (!empty($text))){
            echo "Por favor, preencha o campo assunto antes de enviar.<br><br>";
            $output_form = true;
        }//Verifica se apenas o input ASSUNTO está vazio

        if((!empty($name_user)) && (!empty($email_user)) && (!empty($subject)) && (empty($text))){
            echo "Por favor, preencha o campo mensagem antes de enviar.<br><br>";
            $output_form = true;
        }//Verifica se apenas o input MENSAGEM está vazio
        
        if((!empty($name_user)) && (!empty($email_user)) && (!empty($subject)) && (!empty($text))){
            $msg = "Nome: $name_user<br /><br />Mensagem: $text";
            mail($email_user, $subject, $msg, 'From:' . $from);
        }
    }else{$output_form = true;}

    if($output_form){
        echo "
            <main>
                <h3>
                    Como está seu pet hoje? Espero que feliz. =)
                </h3>
                <div class='bloco_formulario'>
                    <div class='formulario'>
                        <form method='POST' action="php/index.php">
                            <input type='text' name='subject' id='name_user' class='tamanho_entrada_dados' placeholder='Nome' required='required' value="<?php echo $name_user ?>" /><br />
                            <input type='text' name='subject' id='email_user' class='tamanho_entrada_dados' placeholder='e-Mail' required='required' value="<?php echo $email_user ?>" /><br />
                            <input type='text' name='subject' id='subject' class='tamanho_entrada_dados' placeholder='Qual assunto?' required='required' value="<?php echo $subject ?>" /><br />
                            <textarea name='mensagem' id='mensagem' class='tamanho_entrada_dados' placeholder='Sobre o que quer falar?' required='required' value="<?php echo $text ?>" ></textarea><br /><br />
                            <input type='submit' name='enviar' id='enviar' value='Enviar'/>
                        </form>
                    </div>
                </div>
            </main>
        ";
    }

    include './estrutra_site/footer.php';*/

?>