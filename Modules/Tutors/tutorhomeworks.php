<?php $back_page = '/JuquinhaEnsina/Modules/Tutors/tutorhome.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; // caminho absoluto "absolute path" ?> 


<header>
    <h1>Responsável - Tarefas do Aluno</h1><br>
</header>

<div class="secondary-menu-cards"> <!-- aqui vai um while com os links -->

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Tutors/tutorhomeworks.php" >
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Tutors/Images/semimagem.png" alt="responsaveis" width="50%">
            <p>Atividade 1</p>
            <p>Disponibilizado em: xx/xx/xxxx</p>
            <p>Data Limite: xx/xx/xxxx</p>
            <p>Concluida em: xx/xx/xxxx</p>
            <p>Descrição:</p>
        </button>
    </form>

</div>