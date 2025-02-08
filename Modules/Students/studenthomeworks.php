<?php $back_page = '/JuquinhaEnsina/Modules/Students/studentshome.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; // caminho absoluto "absolute path" ?> 


<header>
    <h1>Aluno - Tarefas</h1><br>
</header>


<div class="secondary-menu-cards"> <!-- aqui vai um while com os links -->

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studenthomeworks.php" >
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="50%">
            <p>Atividade 1</p>
            <p>Até: xx/xx/xxxx</p>
        </button>
    </form>

</div>