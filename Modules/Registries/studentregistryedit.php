<?php $back_page = '/JuquinhaEnsina/Modules/Registries/studentregistryselect.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; ?> 


<header>
    <h1>Coordenador - Editar Aluno</h1><br>
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
            <input type="text" name="CPF" placeholder="xxx.xxx.xxx-xx" id="CPF" value="123.456.789-00" readonly required><br>
            <p>Data de Registro:</p>
            <input type="date" name="RegistryDate" id="RegistryDate"><br><br>
            <p>Necessidade Especial</p>

            <p>Usuário:</p>
            <input type="text" name="user" placeholder="user" id="user" value="user123" readonly required><br>
            <p>Senha do Usuario:</p>
            <input type="text" name="password" placeholder="Senha" id="password" required><br><br>
            <input type="checkbox" name="Active" id="Active"> Inativar Usuario <br><br>

            <!-- Hidden input to redirect to studentshome.php after submit -->
            <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/studentregistryselect.php">

            <input type="submit" value="Editar"><br>
        </form>
       
  
    </div>
</div>

<p>Adicionar/Remover um Responsável</p>
<div class="list-menu-cards"> <!-- enfiar um for aqui -->

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/selecttutor.php">
        <button type="submit">
            <p>Adicionar Outro Responsável</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/studentregistryedit.php">
        <button type="submit" class="custom-button">
            <div class="info-section">
                <div class="info">
                    <p>Responsável 01</p>
                    <p>CPF</p>
                </div>
                <div class="extra-info">
                    <p>Data Criação</p>
                    <p>xx/xx/xxxx</p>
                    <p>Remover</p>
                </div>
            </div>
        </button>
    </form>
</div>

<p>Adicionar/Alterar Turma</p>
<div class="list-menu-cards"> <!-- enfiar um for aqui, se já existir uma turma apenas a opção de remoção irá aparecer -->

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/selectclass.php">
        <button type="submit">
            <p>Adicionar Turma</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/studentregistryedit.php">
        <button type="submit" class="custom-button">
            <div class="info-section">
                <div class="info">
                    <p>Turma 01</p>
                </div>
                <div class="extra-info">
                    <p>Data Criação</p>
                    <p>xx/xx/xxxx</p>
                    <p>Remover</p>
                </div>
            </div>
        </button>
    </form>

</div>