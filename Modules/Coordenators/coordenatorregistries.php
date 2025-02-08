<?php $back_page = '/JuquinhaEnsina/Modules/Coordenators/coordenatorhome.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; // caminho absoluto "absolute path" ?> 


<header>
    <h1>Coordenador - Início</h1><br>
</header>

<div class="menu-cards">

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/teacherregistryselect.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Cadastro de Docentes</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/studentregistryselect.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Cadastro de Alunos</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/tutorregistryselect.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Cadastro de Responsáveis</p>
        </button>
    </form>

</div>