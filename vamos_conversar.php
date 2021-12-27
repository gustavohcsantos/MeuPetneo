<?php
    include 'head.php';
    include 'header.php';
    
    echo '
        <main>
            <div class="bloco_formulario"><!-- Bloco da tela de acesso -->
                <div class="formulario"><!-- Formulário de acesso do usuário -->
                    <form method="POST" action="php/index.php">
                        <!--<input type="text" placeholder="Usuário" name="user" id="user" alt="Por favor, informe o seu nome de usuário." /><br /><br />
                        <input type="password" placeholder="Senha" name="password_user" id="password_user" alt="Por favor, informe sua senha."/><br /><br />
                        
                        <input type="submit" name="entrar" id="entrar" value="Entrar" />-->

                            <input type="text" name="subject" id="name_user" class="tamanho_entrada_dados" placeholder="Nome" required="required"/><br />
                            <input type="text" name="subject" id="email_user" class="tamanho_entrada_dados" placeholder="e-Mail"required="required"/><br />
                            <input type="text" name="subject" id="subject" class="tamanho_entrada_dados" placeholder="Qual assunto?"required="required"/><br />
                            <textarea name="elvismail" id="elvismail" class="tamanho_entrada_dados" placeholder="Sobre o que quer falar?"required="required"></textarea><br /><br />
                        <input type="submit" name="enviar" id="enviar" value="Enviar" />
                    </form>
                </div>
            </div>
        </main>
    ';

    include 'footer.php';
?>