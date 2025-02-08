<?php $back_page = '/JuquinhaEnsina/Modules/Login/studentlogin.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; // caminho absoluto "absolute path" ?> 


<header>
    <h1>Aluno - Início</h1><br>
</header>

<div class="menu-cards">

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentactivities.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Atividades</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studenthomeworks.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Tarefas</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentvideos.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Vídeos</p>
        </button>
    </form>

</div>