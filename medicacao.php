<?php
    include './estrutura_site/head.php';?>
    <link rel="stylesheet" href="./css/medicacao.css" type="text/css" />
    <?php include './estrutura_site/header.php';
?>
    <main>
        <form action="addmedicacao.php" method="POST">
        <div id="medicacao">
            <div class="quadro_medicacao">
                <h5>NOME MEDICAÇÃO</h5>
                <input type="text" name="nome" id="nome" class="itens_medicacao" />
            </div>
            <div class="quadro_medicacao">
                <h5>DOSAGEM</h5>
                <input type="text" name="dose" id="dose" class="itens_medicacao" />
            </div>
            <div class="quadro_medicacao">
                <h5>HORÁRIOS</h5>
                <input type="text" name="horarios" id="horarios" class="itens_medicacao" />
            </div>
            <div class="quadro_medicacao">
                <h5>TEMPO EM DIAS</h5>
                <input type="text" name="tempo" id="tempo" class="itens_medicacao" />
            </div>
            <p>
                <input type="submit" name="adicionar" id="adicionar" value="ADICIONAR">
            </p>
        </div>
    </main>
<?php
    include './estrutura_site/footer.php';
?>