<?php
session_start();
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
            // variavel no valor default
            $page = 'Main/home.php';
            $back_page = 'Main/home.php'; // Default back page

            // Check if the page was passed via POST method
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['page'])) {
                $page = $_POST['page'];
            }

            // validação das paginas
            $valid_pages = [
                'Main/home.php',
                'Modules/Login/tutorlogin.php',
                'Modules/Login/teatcherlogin.php',
                'Modules/Login/studentlogin.php',
                'Modules/Students/studentshome.php',
                'Modules/Students/studentactivities.php'
            ];

            // Caso a pagina solicitada for invalida tratar para virar home
            if (!in_array($page, $valid_pages)) {
                $page = 'Main/home.php'; // Padrão home
            }
        ?>


        <div class="main-content">
            <section class="content-section">
                <?php include $page; ?>
            </section>
        </div>

        <?php include 'Main/footer.php'; ?>

    </body>
</html> 