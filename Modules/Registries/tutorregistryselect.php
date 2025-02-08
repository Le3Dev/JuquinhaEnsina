<?php $back_page = '/JuquinhaEnsina/Modules/Coordenators/coordenatorregistries.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; ?> 


<header>
    <h1>Coordenador - Cadastro de Responsáveis</h1><br>
</header>

<div class="filters">
    <form action="/JuquinhaEnsina/index.php" method="POST">
        <select name="filters" id="filters">
            <option value="0">Filtros ⇩ </option>
            <option value="1">Ativos</option>
            <option value="2">Inativos</option>
        </select>
        <input type="text" placeholder="Nome do Docente">
        <input type="text" placeholder="CPF do Docente">
        <input type="submit" value="Filtrar"><Docente>
    </form>
</div>


<div class="list-menu-cards"> <!-- enfiar um for aqui -->

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/tutorregistrycreate.php">
        <button type="submit">
            <p>Novo Responável</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/tutorregistryedit.php">
        <button type="submit" class="custom-button">
            <div class="info-section">
                <div class="info">
                    <p>Responsável 01</p>
                    <p>CPF</p>
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
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/tutorregistryedit.php">
        <button type="submit" class="custom-button">
            <div class="info-section">
                <div class="info">
                    <p>Responsável 02</p>
                    <p>CPF</p>
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