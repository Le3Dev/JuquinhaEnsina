<?php $back_page = '/JuquinhaEnsina/Modules/Registries/studentregistryselect.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; ?> 


<header>
    <h1>Coordenador - Cadastrar Aluno</h1><br>
</header>

<div class="Registries"> 
    <div>
        <form action="/JuquinhaEnsina/index.php" method="POST">
            <p>Nome:</p>
            <input type="text" name="Name" placeholder="Nome Completo" id="Name" required><br>
            <p>Genero</p>
            <p>Data de Nascimento:</p>
            <input type="date" name="BirthDate" id="BirthDate" required>
            <p>CPF:</p>
            <input type="text" name="CPF" placeholder="xxx.xxx.xxx-xx" id="CPF" required><br>
            <p>Data de Registro:</p>
            <input type="date" name="RegistryDate" id="RegistryDate"><br><br>
            <p>Necessidade Especial</p>

            <p>Senha do Usuario:</p>
            <input type="text" name="password" placeholder="Senha" id="password" required><br><br>

            
            <!-- Hidden input to redirect to studentshome.php after submit -->
            <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/studentregistryselect.php">
            
            <input type="submit" value="Cadastrar"><br>
        </form>
    </div>
</div>