<?php $back_page = '/JuquinhaEnsina/Main/home.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; // caminho absoluto "absolute path" ?> 


<header>    
</header>


<div class="menu-cards">

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Login/tutorlogin.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Login/Images/responsaveis.png" alt="responsaveis" width="70%">
            <p>Responsáveis</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Login/studentlogin.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Login/Images/alunos.png" alt="alunos" width="70%">
            <p>Alunos</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Login/teacherlogin.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Login/Images/professor.png" alt="professor" width="70%">
            <p>Professores/Coordenadores</p>
        </button>
    </form>


</div>