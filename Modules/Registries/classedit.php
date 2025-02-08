<?php $back_page = '/JuquinhaEnsina/Modules/Coordenators/coordenatorclasses.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; ?> 


<header>
    <h1>Coordenador - Editar Turma</h1><br>
</header>

<div class="Registries"> 
    <div>
        <form action="/JuquinhaEnsina/index.php" method="POST">
        <p>Nome da turma:</p>
            <input type="text" name="Name" placeholder="Nome da Turma" id="Name" readonly required><br>
            <p>Ano da Turma:</p>
            <input type="text" name="Year" placeholder="Ano" id="Year" readonly required><br>

        </form>
       
    </div>
</div>

<p>Adicionar/Remover um Cronograma</p>
<div class="list-menu-cards"> <!-- enfiar um for aqui -->

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/selectcronogram.php">
        <button type="submit">
            <p>Adicionar um Cronograma</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/classedit.php">
        <button type="submit" class="custom-button">
            <div class="info-section">
                <div class="info">
                    <p>Cronograma 01</p>
                </div>
                <div class="extra-info">
                    <p>Data Criação</p>
                    <p>xx/xx/xxxx</p>
                    <p>Remover</p>
                </div>
            </div>
        </button>
    </form>
</div>