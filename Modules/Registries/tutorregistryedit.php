<?php $back_page = '/JuquinhaEnsina/Modules/Registries/tutorregistryselect.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; ?> 


<header>
    <h1>Coordenador - Editar Responsável</h1><br>
</header>

<div class="Registries"> 
    <div>
        <form action="/JuquinhaEnsina/index.php" method="POST">
            <p>Nome:</p>
            <input type="text" name="Name" placeholder="Nome Completo" id="Name" required><br>
            <p>Data de Nascimento:</p>
            <input type="date" name="BirthDate" id="BirthDate" required>
            <p>CPF:</p>
            <input type="text" name="CPF" placeholder="xxx.xxx.xxx-xx" id="CPF" value="123.456.789-00" readonly required><br>
            <p>Email:</p>
            <input type="email" name="Email" id="Email">
            <p>Telefone:</p><small>xxx-xxxxx-xxxx</small><br>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{5}-[0-9]{4}" required />
            <p>Data de Registro:</p>
            <input type="date" name="RegistryDate" id="RegistryDate"><br><br>
            <p>Usuário:</p>
            <input type="text" name="user" placeholder="user" id="user" value="user123" readonly required><br>
            <p>Senha do Usuario:</p>
            <input type="text" name="password" placeholder="Senha" id="password" required><br><br>
            <input type="checkbox" name="Active" id="Active"> Inativar Usuario <br><br>
            <!-- Hidden input to redirect to studentshome.php after submit -->


            <p>Endereço</p>
            <p>Digite o CEP</p>
            <p>Rua</p>
            <p>Número</p>

            <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/tutorregistryselect.php">
            <input type="submit" value="Editar"><br>
        </form>
       
    </div>
</div>

<p>Adicionar/Remover um Dependente</p>
<div class="list-menu-cards"> <!-- enfiar um for aqui -->

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/selectstudent.php">
        <button type="submit">
            <p>Adicionar Outro Dependente</p>
        </button>
    </form>

    <form action="/JuquinhaEnsina/index.php" method="POST">
        <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/tutorregistryedit.php">
        <button type="submit" class="custom-button">
            <div class="info-section">
                <div class="info">
                    <p>Depente 01</p>
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