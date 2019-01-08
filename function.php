<?php 
        // déclaration des fonctions
                function difficulteRecette (){
                    include 'auth.php';
                    $result = $pdo->query("SELECT difficulte FROM recettes");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                    if ($recette['difficulte'] == "Facile") {
                        echo "<div class='col-12'>";
                        echo "<p>Dificulté : <img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/fourchette.png'></p>";
                        echo '</div>';
                    }elseif($recette['difficulte'] == "Abordable") {
                        echo "<div class='col-6'>";
                        echo "<p>Dificulté : <img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/fourchette.png'></p>";
                        echo '</div>';
                        
                        echo "<div class='col-6'>";
                        echo "<img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/fourchette.png'>";
                        echo '</div>';
                    }else{
                        echo "A noter";
                    } 
                }

               function tempsCuisson (){
                include 'auth.php';
                $result = $pdo->query("SELECT tempsCuisson FROM recettes");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                    if ($recette['tempsCuisson'] == "10 min" || '15 min' ) {
                        echo "<div class='col-12'>";
                        echo "<p>Cuisson : <img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images\cuisson.png'></p>";
                        echo "</div>";
                    }elseif($recette['tempsCuisson'] == "30 min" || "45 min") {
                        echo "<div class='col-6'>";
                        echo "<p>Cuisson : <img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images\cuisson.png'></p>";
                        echo "</div>";

                        echo "<div class='col-6'>";
                        echo "<img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images\cuisson.png'>";
                        echo "</div>";
                    }elseif($recette['tempsCuisson'] == "1h 40 min" || "1h 30 min") {
                        echo "<div class='col-4'>";
                        echo "<p>Cuisson : <img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images\cuisson.png'></p>";
                        echo "</div>";

                        echo "<div class='col-4'>";
                        echo "<img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images\cuisson.png'>";
                        echo "</div>";

                        echo "<div class='col-4'>";
                        echo "<img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images\cuisson.png'>";
                        echo "</div>";
                    }else{
                        echo "A noter";
                    }
                }

                function tempsPreparation (){
                    include 'auth.php';
                    $result = $pdo->query("SELECT tempsPreparation FROM recettes");
                    $recette = $result->fetch(PDO::FETCH_ASSOC);
                        if ($recette['tempsPreparation'] == '15 min') {
                            echo "<div class='col-12'>";
                            echo "<p>Préparation : <img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/temps.png'></p>";
                            echo "</div>";
                        }elseif($recette['tempsPreparation'] == "30 min" || "35 min") {
                            echo "<div class='col-6'>";
                            echo "Préparation : <img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/temps.png'>";
                            echo "</div>";

                            echo "<div class='col-6'>";
                            echo "<img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/temps.png'>";
                            echo "</div>";
                        }elseif($recette['tempsPreparation'] == "40 min") {
                            echo "<div class='col-4'>";
                            echo "<p>Préparation : <img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/temps.png'></p>";
                            echo "</div>";

                            echo "<div class='col-4'>";
                            echo "<img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/temps.png'>";
                            echo "</div>";

                            echo "<div class='col-4'>";
                            echo "<img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/temps.png'>";
                            echo "</div>";
                        }else{
                            echo "A noter";
                        }
                    }

                    function prix (){
                        include 'auth.php';
                        $result = $pdo->query("SELECT prix FROM recettes");
                        $recette = $result->fetch(PDO::FETCH_ASSOC);
                            if ($recette['prix'] == 'Pas cher') {
                                echo "<div class='col-12'>";
                                echo "<p>Prix : <img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/prix.png'></p>";
                                echo "</div>";
                            }elseif($recette['prix'] == "Abordable") {
                                echo "<div class='col-6'>";
                                echo "<p>Prix : <img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/prix.png'></p>";
                                echo "</div>";

                                echo "<div class='col-6'>";
                                echo "<img class='rounded img-thumbnail' style='width : 40px; height : 40px;' src='images/prix.png'>";
                                echo "</div>";
                            }else{
                                echo "A noter";
                            }
                        }
                ?>