<?php $back_page = '/JuquinhaEnsina/Modules/Login/teacherlogin.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; // caminho absoluto "absolute path" ?> 


<header>
    <h1>Coordenador - Início</h1><br>
</header>

<div class="menu-cards">

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Coordenators/coordenatorregistries.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Cadastros</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Coordenators/coordenatorclasses.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Turmas</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentvideos.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Disciplinas</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentvideos.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Cronogramas de Ensino</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentvideos.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Relatórios de Desempenho</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentvideos.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Liberar Vídeos</p>
        </button>
    </form>

</div>

