<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"/> -->
        <title>Change profile</title>
    </head>

    <body>
        <?php if (session_status() == PHP_SESSION_NONE){ session_start();} ?>
        <?php require_once 'User-pdo.php'; ?>
        <?php if(!$_SESSION){header('Location: connexion.php');} ?>
        <?php include 'header.php' ?>

        <main>

            <div class="centre changeProfil">

                <h2 class="title_change">CHANGE PROFILE</h2>

                <form action="" method="POST" class="formulaire">

                    <div class="group">      
                        <input type="text" name="login" value="<?php {echo $_SESSION['login'];} ?>" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Login</label>
                    </div>
                    
                    <div class="group">      
                        <input type="password" name="password" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Password</label>
                    </div>
                    
                    <div class="group">      
                        <input type="password" name="passwordNew" placeholder="New password">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>
                    
                    <div class="group">      
                        <input type="password" name="passwordNewConfirm" placeholder="Confirm new password">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>
                    
                    <div class="group">      
                        <input type="text" name="email" placeholder="Email">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>
                    
                    <div class="group">      
                        <input type="text" name="firstname" placeholder="First name">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>
                    
                    <div class="group">      
                        <input type="text" name="lastname" placeholder="Last name">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>

                    <div class="frame">
                        <button class="custom-btn btn-4" name="submit">Edit</button>
                    </div>

                    <?php
                        
                        if($_POST){
                        
                            echo $newUser->Update($_POST['login'], $_POST['password'], $_POST['passwordNew'], $_POST['passwordNewConfirm'], $_POST['email'], $_POST['firstname'], $_POST['lastname']);

                        }

                    ?>

                </form>

            </div>

        </main>
    </body>
</html>