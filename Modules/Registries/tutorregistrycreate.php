<?php $back_page = '/JuquinhaEnsina/Modules/Registries/tutorregistryselect.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; ?> 


<header>
    <h1>Coordenador - Cadastrar Responsável</h1><br>
</header>

<div class="Registries"> 
    <div>
        <form action="/JuquinhaEnsina/index.php" method="POST">
            <p>Nome:</p>
            <input type="text" name="Name" placeholder="Nome Completo" id="Name" required><br>
            <p>Data de Nascimento:</p>
            <input type="date" name="BirthDate" id="BirthDate" required>
            <p>CPF:</p>
            <input type="text" name="CPF" placeholder="xxx.xxx.xxx-xx" id="CPF" required><br>
            <p>Email:</p>
            <input type="email" name="Email" id="Email">
            <p>Telefone:</p><small>xxx-xxxxx-xxxx</small><br>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{5}-[0-9]{4}" required />
            <p>Data de Registro:</p>
            <input type="date" name="RegistryDate" id="RegistryDate"><br><br>
            <p>Senha do Usuario:</p>
            <input type="text" name="password" placeholder="Senha" id="password" required><br><br>

            <p>Endereço</p>
            <p>Digite o CEP</p>
            <p>Rua</p>
            <p>Número</p>
            
            <!-- Hidden input to redirect to studentshome.php after submit -->
            <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Registries/tutorregistryselect.php">
            
            <input type="submit" value="Cadastrar"><br>
        </form>
    </div>
</div>