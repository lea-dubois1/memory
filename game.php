<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"/> -->
        <title>Game</title>
    </head>

    <body>
        
        <?php require_once 'User-pdo.php'; ?>
        <?php require_once 'header.php' ?>
        <?php require_once 'Cards.php'; ?>
        <?php if (session_status() == PHP_SESSION_NONE){ session_start();} ?>

        <main>

            <div class="centre">

                <form action="" method="GET" class="formulaire">

                    <label for="diff">Choose a difficulty :</label>

                    <select name="diff" id="diff">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>

                    <div class="frame">
                        <button class="custom-btn btn-4" name="submit">Login</button>
                    </div>


                    <table>

                        <tbody>

                            <tr>

                                <?php 

                                    if($_GET) {

                                        // Sélectionner les images par rapport à la difficulté
                                        $nb_paires = $_GET['diff'] * 3;

                                        $cartes = new Card();

                                        $cartes->Melange_img($nb_paires);

                                        $cards = array();
                                        for ( $i = 0; $i < $nb_paires; ++$i ){
                                            $cards[$i] = $cartes->card_files[$i];
                                        }

                                        $cartes->Create_pairs($cards);
                                        
                                        foreach ($cartes->pairs as $value){
                                            $cartes->Create_card($value);
                                        }

                                        if(isset($_POST[1])) {

                                            $paire_retourne = false;

                                            if($_POST[0] == $_POST[1]) {

                                                $paire_retourne = true;

                                            }

                                        }

                                    }

                                ?>

                            </tr>

                        </tbody>

                    </table>

                </form>

            </div>

        </main>
    </body>
</html>

<?php

    var_dump($_GET);

?>