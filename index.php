<?php
    include './estrutura_site/head.php';
    include './estrutura_site/header.php';
?>
    <main>
        <div class="bloco_formulario_petneo">
            <div class="formulario_petneo">    
                <section id="">
                    <article id="informativo">
                        Cada pet tem um corpinho que é só dele.<br />
                        Veja aqui como escolher o tamanho certo para o seu:<br /><br />
                    </article>
                    <article id="instrucoes_medidas">
                        <ul>
                            <l1>- Com uma fita métrica, meça o <strong>comprimento</strong> da base do pescoço até a base da cauda;</li><br />
                            <l1>- Da mesma forma, meça a circunferência do peitoral (<strong>tórax</strong>) e a circunferência do <strong>pescoço</strong>;</li><br />
                            <l1>- O <strong>peso</strong> do seu pet também pode ajudar a tirar as dúvidas;</li><br />
                        </ul>
                    </article>
                </section>
                <form method="POST" action="php/index.php">
                    <section id="bloco_secao_input_dados">
                        <article class="dados_petneo">
                            <input type="text" name="torax" id="torax" class="entrada_dados_index" placeholder="Tórax (cm)" required="required" /><br />
                            <input type="text" name="pescoco" id="pescoco" class="entrada_dados_index" placeholder="Pescoço (cm)" required="required" /><br />
                        </article>
                        <article class="dados_petneo">
                            <input type="text" name="comprimento" id="comprimento" class="entrada_dados_index" placeholder="Comprimento (cm)" required="required" /><br />
                            <input type="text" name="peso" id="peso" class="entrada_dados_index" placeholder="Peso (Kg)" /><br />
                        </article>
                    </section>
                    <input type="reset" name="limpar" id="limpar" value="Limpar"/>
                    <input type="submit" name="calcular" id="calcular" value="Calcular" onclick="calcular_tamanho_roupa_pet()"/><br />
                    <input type="text" name="resultado" id="resultado" class="resultado_dados_index" placeholder="O RESULTADO APARECERÁ AQUI..." /><br />
                </form>
            </div>
        </div>
    </main>
<?php
    include './estrutura_site/footer.php';
?>