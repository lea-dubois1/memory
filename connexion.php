
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"/> -->
        <title>Login</title>
    </head>

    <body>

        <?php require_once 'User-pdo.php'; ?>
        <?php require_once 'header.php' ?>

        <main>

            <div class="centre">

                <form action="" method="POST" class="formulaire">
                
                    <h2>LOGIN</h2>

                    <div class="group">      
                        <input type="text" name="login" required>
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

                    <div class="frame">
                        <button class="custom-btn btn-4" name="submit">Login</button>
                    </div>

                    <?php
                        
                        if($_POST){
                        
                            echo $newUser->Connect($_POST['login'], $_POST['password']);
                            header('Location:index.php');

                        }

                    ?>

                </form>

            </div>
            
        </main>
    </body>
</html>
