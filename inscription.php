<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"/> -->
        <title>Signup</title>
    </head>

    <body>

        <?php require_once 'User-pdo.php'; ?>
        <?php require_once 'header.php' ?>

        <main>

            <div class="centre">

                <form action="" method="POST" class="formulaire">

                    <h2>SIGNUP</h2>

                    <div class="group">      
                        <input type="text" name="login">
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
                        <input type="password" name="passwordConfirm">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Confirm password</label>
                    </div>

                    <div class="group">      
                        <input type="text" name="email">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>

                    <div class="group">      
                        <input type="text" name="firstname">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>First name</label>
                    </div>

                    <div class="group">      
                        <input type="text" name="lastname">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Last name</label>
                    </div>

                    <div class="frame">
                        <button class="custom-btn btn-4" name="submit">Singup</button>
                    </div>

                    <?php
                        
                        if($_POST){
                        
                            foreach($newUser->Register($_POST['login'], $_POST['password'], $_POST['passwordConfirm'], $_POST['email'], $_POST['firstname'], $_POST['lastname']) as $key => $value){

                                if(preg_match("/error/", $key) && $value != ""){

                                    echo $value;

                                }elseif($key == "ok" && $value != ""){

                                    echo $value;

                                }

                            }

                        }


                    ?>

                </form>

            </div>

        </main>
    </body>
</html>