<?php
$title='Admin';
include 'header.php';
include 'auth.php';


if(!empty($_POST))
{
        $titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING);
        $chapo = filter_input(INPUT_POST, 'chapo', FILTER_SANITIZE_STRING);
        $preparation = filter_input(INPUT_POST, 'preparation', FILTER_SANITIZE_STRING);
        $ingredient = filter_input(INPUT_POST, 'ingredient', FILTER_SANITIZE_STRING);
        $categorie = filter_input(INPUT_POST, 'categorie', FILTER_SANITIZE_STRING);
        $tempsCuisson = filter_input(INPUT_POST, 'tempsCuisson', FILTER_SANITIZE_STRING);
        $tempsPreparation = filter_input(INPUT_POST, 'tempsPreparation', FILTER_SANITIZE_STRING);
        $difficulte = filter_input(INPUT_POST, 'difficulte', FILTER_SANITIZE_STRING);
        $prix = filter_input(INPUT_POST, 'prix', FILTER_SANITIZE_STRING);


        // Insertion :
        $result = $pdo->exec("INSERT INTO recettes (titre, chapo, preparation, ingredient, categorie, tempsCuisson, tempsPreparation, difficulte, prix) VALUES ('$titre', '$chapo', $preparation, $ingredient, '$categorie', '$tempsCuisson', '$tempsPreparation', '$difficulte', '$prix')");
        echo $result;

}
?>
<div class="container">
<div class="row">
    <a href="admin.php" style="margin-right: 2%;">Recettes</a><br>
    <a href="admin_membres.php" style="margin-right: 2%;">Membres</a>
</div>
      <div style="float: right;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#md_save">Ajouter</button></div><br><br>

      <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">idMembre</th>
                <th scope="col">titre</th>
                <th scope="col">chapo</th>
                <th scope="col">img</th>
                <th scope="col">preparation</th>
                <th scope="col">ingredient</th>
                <th scope="col">membre</th>
                <th scope="col">couleur</th>
                <th scope="col">dateCrea</th>
                <th scope="col">categorie</th>
                <th scope="col">tempsCuisson</th>
                <th scope="col">tempsPreparation</th>
                <th scope="col">difficulte</th>
                <th scope="col">prix</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $result = $pdo->query("SELECT * FROM recettes");

                while($demande = $result->fetch(PDO::FETCH_ASSOC))
                {
                    ?>
                        <tr>
                            <td><?php echo $demande["idRecette"] ?></td>
                            <td><?php echo $demande["titre"] ?></td>
                            <td><?php echo $demande["chapo"] ?></td>
                            <td><?php echo $demande["img"] ?></td>
                            <td><?php echo $demande["preparation"] ?></td>
                            <td><?php echo $demande["ingredient"] ?></td>
                            <td><?php echo $demande["membre"] ?></td>
                            <td><?php echo $demande["couleur"] ?></td>
                            <td><?php echo $demande["dateCrea"] ?></td>
                            <td><?php echo $demande["categorie"] ?></td>
                            <td><?php echo $demande["tempsCuisson"] ?></td>
                            <td><?php echo $demande["tempsPreparation"] ?></td>
                            <td><?php echo $demande["difficulte"] ?></td>
                            <td><?php echo $demande["prix"] ?></td>
                            <td>
                                <button type="button" class="btn btn-danger" onclick="deleteDemande('<?php echo $demande['idRecette'] ?>')"><i class="fas fa-trash-alt"></i></button>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#md_save" onclick="updateInfos('<?php echo $demande['idRecette'] ?>')"><i class="fas fa-edit"></i></button>
                            </td>
                        </tr>
                    <?php
                }
            ?>

        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" id="md_save" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form method="post" id="myform" action="adddemande_ajax.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter recette</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre">
                    </div>

                    <div class="form-group">
                        <label for="chapo">Résumé</label>
                        <textarea id="chapo" name="chapo" rows="5" cols="33" class="form-control" placeholder="Résumé"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="categorie">Image</label>
                        <input type="file" class="form-control" id="myimg" name="myimg" placeholder="Image">
                    </div>

                    <div class="form-group">
                        <label for="preparation">Préparation</label>
                        <textarea id="preparation" name="preparation" rows="5" cols="33" class="form-control" placeholder="Préparation"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="ingredient">Ingrédient</label>
                        <textarea id="ingredient" name="ingredient" rows="5" cols="33" class="form-control" placeholder="Ingrédient"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="categorie">Catégorie</label>
                        <input type="number" class="form-control" id="categorie" name="categorie" placeholder="Catégorie">
                    </div>

                    <div class="form-group">
                        <label for="tempsCuisson">Temps de cuisson</label>
                        <input type="text" class="form-control" id="tempsCuisson" name="tempsCuisson" placeholder="Temps de cuisson">
                    </div>

                    <div class="form-group">
                        <label for="tempsPreparation">Temps de préparation</label>
                        <input type="text" class="form-control" id="tempsPreparation" name="tempsPreparation" placeholder="Temps de préparation">
                    </div>

                    <div class="form-group">
                        <label for="difficulte">Difficulté</label>
                        <input type="text" class="form-control" id="difficulte" name="difficulte" placeholder="Difficulté">
                    </div>

                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="text" class="form-control" id="prix" name="prix" placeholder="Prix">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <input type="submit" class="btn btn-primary" value="Enregistrer"/>
                </div>
            </form>
        </div>
    </div>
    </div>

    <script type="text/javascript">/*


 //*********************************************** */
        //Fonction déclenché lorsque l'utilisateur click sur enregistrer
        //Elle ajoute une nouvelle demande en BDD
        //*********************************************** */
        $(document).ready(function (e) {
            $("form#myform").submit(function(e) {

                e.preventDefault();

                let request = $.ajax({
                    type: 'POST',
                    url: $("#myform").attr('action'),
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false
                });

                request.done(function(result){
                    
                    refreshData();
                    $('#md_save').modal('hide');

                });

                request.fail(function(result){
                    alert("NOT OK");
                });
            });
        });

        //*********************************************** */
        //Fonction déclenché lorsque l'utilisateur click sur ajouter
        //Elle vide les input de la modal
        //*********************************************** */
        function clear_modal() {
            $('#titre').val("");
            $('#chapo').val("");
            $('#preparation').val("");
            $('#ingredient').val("");
            $('#membre').val("");
            $('#categorie').val("");
            $('#tempsCuisson').val("");
            $('#tempsPreparation').val("");
            $('#difficulte').val("");
            $('#prix').val("");

            $("#alert_save").hide();
        }

        //*********************************************** */
        //Fonction déclenché lorsque l'utilisateur click sur modifier
        //Elle reécupére les données de la demande et les asignes aux input de la modal
        //*********************************************** */
        function getInfos(idRecette) {
            
            let request = $.ajax({
		        'url' : 'ajax.php',
		        'type' : 'GET',
                'data' : 'idRecette=' + idRecette + '&script=getInfos'
		    });
		    request.done(function(result) {

                let obj = jQuery.parseJSON(result);
               
                $('#titre').val(obj.titre);
                $('#chapo')val(obj.chapo);
                $('#preparation')val(obj.preparation);
                $('#ingredient')val(obj.ingredient);
                $('#membre')val(obj.membre);
                $('#categorie')val(obj.categorie);
                $('#tempsCuisson')val(obj.tempsCuisson);
                $('#tempsPreparation')val(obj.tempsPreparation);
                $('#difficulte')val(obj.difficulte);
                $('#prix')val(obj.prix);


		    });    
		    request.fail(function() {

		    });

        }

        //*********************************************** */
        //Fonction déclenché lorsque l'utilisateur click sur supprimer
        //Elle suprime la demande en BDD
        //*********************************************** */
        function deleteDemande(idRecette) {
            let request = $.ajax({
		        'url' : 'ajax.php',
		        'type' : 'GET',
                'data' : 'idRecette=' + idRecette + '&script=deleteDemande'
		    });
		    request.done(function(result) {

                if (result == 1) {

                    refreshData();

                }
		    });    
		    request.fail(function() {

		    });
        }

        //*********************************************** */
        //Fonction déclenché lorsque l'on veut rafraichir les données du tableau
        //*********************************************** */
        function refreshData() {
            let request = $.ajax({
                type: 'POST',
                url: 'getDemande_ajax.php',
            });

            request.done(function(result){
                
                $("#myTable").html(result);

            });

            request.fail(function(result){
                alert("NOOK");
            });
        }

        //*********************************************** */
        //Fonction déclenché après le rendu de la page pour charger les données dans le tableau
        //*********************************************** */
        $(document).ready(function (e) {
            refreshData();
        });

    // --------------------------------------------------

    </script>
    <?php
    include 'footer.php';
    ?>
