<?php $back_page = '/JuquinhaEnsina/Modules/Tutors/tutorstudent.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; ?> 


<header>
    <h1>Responsável - Início</h1><br>
</header>

<div class="menu-cards">

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Tutors/tutorgrades.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Tutors/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Visualiar Boletim do Aluno</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Tutors/tutorhomeworks.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Tutors/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Visualiar Lista de Tarefas</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Tutors/tutordatasheet.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Tutors/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Relatórios de Desempenho</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Tutors/tutorvideos.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Tutors/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Visualizar Videos Disponibilizados</p>
        </button>
    </form>


    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Tutors/tutoractivities.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Tutors/Images/semimagem.png" alt="responsaveis" width="60%">
            <p>Visualizar Lista de Atividades</p>
        </button>
    </form>

</div>