<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"/> -->
        <title>Home</title>
    </head>

    <body>
        
        <?php require_once 'User-pdo.php'; ?>
        <?php require_once 'header.php' ?>
        <?php if (session_status() == PHP_SESSION_NONE){ session_start();} ?>

        <main>

            <div class="centre">

                <h1 class="welcome">WELCOME<?php echo $_SESSION ?  '&nbsp' . strtoupper($_SESSION['login']) : ''; ?></h1>
                <p>Play to the memory game online and reach the top of the ranking</p>

            </div>

        </main>
    </body>
</html>