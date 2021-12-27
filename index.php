<?php
    include './estrutura_site/head.php';
    include './estrutura_site/header.php';
    
    echo '
        <main>
            <h3>
                Informe os dados do seu Petneo. =)
            </h3>
            <div class="bloco_formulario_petneo">
                <div class="formulario_petneo">
                    <form method="POST" action="php/index.php">
                        <div class="dados_petneo">
                            <input type="text" name="torax" id="torax" class="entrada_dados_index" placeholder="Tórax (cm)" required="required" /><br />
                            <input type="text" name="pescoco" id="pescoco" class="entrada_dados_index" placeholder="Pescoço (cm)" required="required" /><br />
                        </div>
                        <div class="dados_petneo">
                        <input type="text" name="comprimento" id="comprimento" class="entrada_dados_index" placeholder="Comprimento (cm)" required="required" /><br />
                            <input type="text" name="peso" id="peso" class="entrada_dados_index" placeholder="Peso (Kg)" required="required" /><br />
                        </div>
                        <input type="submit" name="calcular" id="calcular" value="Calcular"/>
                    </form>
                </div>
            </div>
        </main>
    ';

    include './estrutura_site/footer.php';
?>