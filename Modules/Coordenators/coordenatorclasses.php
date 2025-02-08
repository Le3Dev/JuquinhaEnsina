<?php $back_page = '/JuquinhaEnsina/Modules/Coordenators/coordenatorhome.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; ?> 


<header>
    <h1>Coordenador - Criação de Turmas</h1><br>
</header>

<div class="filters">
    <form action="/JuquinhaEnsina/index.php" method="POST">
        <select name="filters" id="filters">
            <option value="0">Filtros ⇩ </option>
            <option value="1">Ativos</option>
            <option value="2">Inativos</option>
        </select>
        <input type="text" placeholder="Nome da Turma">
        <input type="text" placeholder="Ano da Turma">
        <input type="submit" value="Filtrar">
    </form>
</div>


<div class="list-menu-cards"> <!-- enfiar um for aqui -->

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/classcreate.php">
        <button type="submit">
            <p>Nova Turma</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/classedit.php">
        <button type="submit" class="custom-button">
            <div class="info-section">
                <div class="info">
                    <p>Turma 01</p>
                    <p>Ano: 2024</p>
                    <p>Cronograma: </p>
                </div>
                <div class="extra-info">
                    <p>Data Criação</p>
                    <p>xx/xx/xxxx</p>
                    <p>Ativo:</p>
                </div>
            </div>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/classedit.php">
        <button type="submit" class="custom-button">
            <div class="info-section">
                <div class="info">
                    <p>Turma 02</p>
                    <p>Ano: 2024</p>
                    <p>Cronograma: </p>
                </div>
                <div class="extra-info">
                    <p>Data Criação</p>
                    <p>xx/xx/xxxx</p>
                    <p>Ativo:</p>
                </div>
            </div>
        </button>
    </form>

</div>