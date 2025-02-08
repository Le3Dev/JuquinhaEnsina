<?php $back_page = '/JuquinhaEnsina/Modules/Students/studentshome.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; // caminho absoluto "absolute path" ?> 


<header>
    <h1>Aluno - Vídeos</h1><br>
</header>

<div class="filters">
    <form action="/JuquinhaEnsina/index.php" method="POST">
        <select name="filters" id="filters">
            <option value="0">Filtros ⇩ </option>
            <option value="1">Mais Jogados</option>
            <option value="2">Mais longos</option>
            <option value="3">Mais divertidos</option>
            <option value="4">Mais difíceis</option>
        </select>
        <input type="text" placeholder="Nome do Vídeo">

        <input type="submit" value="Filtrar"><br>
    </form>
</div>

 
<div class="videos-menu-cards"> <!-- aqui vai um while com os links -->

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentvideos.php" >
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="50%">
            <p>Atividade 1</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentvideos.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="50%">
            <p>Atividade 2</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentvideos.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="50%">
            <p>Atividade 3</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentvideos.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="50%">
            <p>Atividade 4</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentvideos.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="50%">
            <p>Atividade 5</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentvideos.php">
        <button type="submit">
            <img src="/JuquinhaEnsina/Modules/Students/Images/semimagem.png" alt="responsaveis" width="50%">
            <p>Atividade 6</p>
        </button>
    </form>

</div>