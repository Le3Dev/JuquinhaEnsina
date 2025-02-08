<?php $back_page = '/JuquinhaEnsina/Modules/Login/tutorlogin.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; ?> 


<header>
    <h1>Responsável - Selecione o Aluno</h1><br>
</header>

<div class="list-menu-cards"> <!-- aqui vai um for com a lista de alunos pelo login do tutor -->

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Tutors/tutorhome.php">
        <button type="submit">
            <p>Aluno 01</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Tutors/tutorhome.php">
        <button type="submit">
            <p>Aluno 02</p>
        </button>
    </form>

</div>