<?php
    include 'head.php';
    include 'header.php';
    
    echo '
        <main>
            <h3>
                Como está seu pet hoje? Espero que feliz. =)
            </h3>
            <div class="bloco_formulario">
                <div class="formulario">
                    <form method="POST" action="php/index.php">
                        <input type="text" name="subject" id="name_user" class="tamanho_entrada_dados" placeholder="Nome" required="required"/><br />
                        <input type="text" name="subject" id="email_user" class="tamanho_entrada_dados" placeholder="e-Mail"required="required"/><br />
                        <input type="text" name="subject" id="subject" class="tamanho_entrada_dados" placeholder="Qual assunto?"required="required"/><br />
                        <textarea name="elvismail" id="elvismail" class="tamanho_entrada_dados" placeholder="Sobre o que quer falar?"required="required"></textarea><br /><br />
                        <input type="submit" name="enviar" id="enviar" value="Enviar"/>
                    </form>
                </div>
            </div>
        </main>
    ';

    include 'footer.php';
?>