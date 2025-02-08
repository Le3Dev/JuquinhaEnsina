<?php $back_page = '/JuquinhaEnsina/Main/home.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/toolbar.php'; // caminho absoluto "absolute path" ?> 


<div class="logins">
    <div>
        <img src="/JuquinhaEnsina/Modules/Login/Images/alunos.png" alt="">
        <p>Aluno</p>
        <form action="/JuquinhaEnsina/index.php" method="POST">
            <input type="text" name="username" placeholder="Usuário" id="Usuario"><br>
            <input type="password" name="password" placeholder="Senha" id="Senha"><br>
            <input type="checkbox" id="LembrarSenha">Lembrar minha senha<br><br>
            
            <!-- Hidden input to redirect to studentshome.php after submit -->
            <input type="hidden" name="page" value="/JuquinhaEnsina/Modules/Students/studentshome.php">
            
            <input type="submit" value="Entrar"><br>
        </form>
    </div>
</div>