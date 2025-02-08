<?php
session_start();

class User {
    public $userid;
    public $userrole;
}

$user = new User();
$user->userid="10";
$_SESSION ['USER'] = $user;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - Aulas PHP</title>
        <link rel="stylesheet" href="Style/style.css">
    </head>
    <body>

        <?php
            // Variavel no valor default, caminhos absolutos
            $page = $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/home.php';
            $back_page = $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/home.php'; // Default back page

            // Verifica se a pagina foi passada pelo metodo post
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['page'])) {
                $page = $_SERVER['DOCUMENT_ROOT'] . $_POST['page'];
            }

            // validação das paginas
            $valid_pages = [
                // paginas para todos os visitantes
                '/JuquinhaEnsina/Main/home.php',
                '/JuquinhaEnsina/Modules/Login/tutorlogin.php',
                '/JuquinhaEnsina/Modules/Login/teacherlogin.php',
                '/JuquinhaEnsina/Modules/Login/studentlogin.php',
                // paginas apenas para alunos
                '/JuquinhaEnsina/Modules/Students/studentshome.php',
                '/JuquinhaEnsina/Modules/Students/studentactivities.php',
                '/JuquinhaEnsina/Modules/Students/studenthomeworks.php',
                '/JuquinhaEnsina/Modules/Students/studentvideos.php',
                // paginas apenas para professores
                '/JuquinhaEnsina/Modules/Teachers/teacherhome.php',
                // paginas apenas para coordenadores e administradores
                '/JuquinhaEnsina/Modules/Coordenators/coordenatorhome.php',
                    // Registro de alunos, responsáveis e docentes
                '/JuquinhaEnsina/Modules/Coordenators/coordenatorregistries.php',
                '/JuquinhaEnsina/Modules/Registries/teacherregistryselect.php',
                '/JuquinhaEnsina/Modules/Registries/teacherregistrycreate.php',
                '/JuquinhaEnsina/Modules/Registries/teacherregistryedit.php',
                '/JuquinhaEnsina/Modules/Registries/studentregistryselect.php',
                '/JuquinhaEnsina/Modules/Registries/studentregistrycreate.php',
                '/JuquinhaEnsina/Modules/Registries/studentregistryedit.php',
                '/JuquinhaEnsina/Modules/Registries/tutorregistryselect.php',
                '/JuquinhaEnsina/Modules/Registries/tutorregistrycreate.php',
                '/JuquinhaEnsina/Modules/Registries/tutorregistryedit.php',
                '/JuquinhaEnsina/Modules/Registries/selectclass.php',
                '/JuquinhaEnsina/Modules/Registries/selecttutor.php',
                '/JuquinhaEnsina/Modules/Registries/selectstudent.php',
                    // Registro de classes
                '/JuquinhaEnsina/Modules/Coordenators/coordenatorclasses.php',
                '/JuquinhaEnsina/Modules/Registries/classcreate.php',
                '/JuquinhaEnsina/Modules/Registries/classedit.php',
                '/JuquinhaEnsina/Modules/Registries/selectcronogram.php',
                // paginas apenas para tutores
                '/JuquinhaEnsina/Modules/Tutors/tutorstudent.php',
                '/JuquinhaEnsina/Modules/Tutors/tutorhome.php',
                '/JuquinhaEnsina/Modules/Tutors/tutorgrades.php',
                '/JuquinhaEnsina/Modules/Tutors/tutoractivities.php',
                '/JuquinhaEnsina/Modules/Tutors/tutordatasheet.php',
                '/JuquinhaEnsina/Modules/Tutors/tutorhomeworks.php',
                '/JuquinhaEnsina/Modules/Tutors/tutorvideos.php'
            ];

            // Caso a pagina solicitada for invalida tratar para virar home
            if (!in_array(str_replace($_SERVER['DOCUMENT_ROOT'], '',$page), $valid_pages)) {
                $page = $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/home.php'; // Padrão home
            }
        ?>


        <div class="main-content">
            <section class="content-section">
                <?php include $page; ?>
            </section>
        </div>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/JuquinhaEnsina/Main/footer.php'; ?>

    </body>
</html> 