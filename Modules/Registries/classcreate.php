<?php $back_page = '/JuquinhaEnsina/Modules/Coordenators/coordenatorclasses.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; ?> 


<header>
    <h1>Coordenador - Cadastrar Turma</h1><br>
</header>

<div class="Registries"> 
    <div>
        <form action="/JuquinhaEnsina/index.php" method="POST">
            <p>Nome da turma:</p>
            <input type="text" name="Name" placeholder="Nome da Turma" id="Name" required><br>
            <p>Ano da Turma:</p>
            <input type="text" name="Year" placeholder="Ano" id="Year" required><br>
            
            <!-- Hidden input to redirect to studentshome.php after submit -->
            <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Coordenators/coordenatorclasses.php">
            
            <input type="submit" value="Cadastrar"><br>
        </form>
    </div>
</div>