<?php
$title='Admin membres';
include 'header.php';
include 'auth.php';



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
                <th scope="col">gravatar</th>
                <th scope="col">login</th>
                <th scope="col">password</th>
                <th scope="col">statut</th>
                <th scope="col">prenom</th>
                <th scope="col">nom</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $result = $pdo->query("SELECT * FROM membres");

                while($demande = $result->fetch(PDO::FETCH_ASSOC))
                {
                    ?>
                        <tr>
                            <td><?php echo $demande["idMembre"] ?></td>
                            <td><?php echo $demande["gravatar"] ?></td>
                            <td><?php echo $demande["login"] ?></td>
                            <td><?php echo $demande["password"] ?></td>
                            <td><?php echo $demande["statut"] ?></td>
                            <td><?php echo $demande["prenom"] ?></td>
                            <td><?php echo $demande["nom"] ?></td>
                           
                            <td>
                                <button type="button" class="btn btn-danger" onclick="deleteDemande('<?php echo $demande['idMembre'] ?>')"><i class="fas fa-trash-alt"></i></button>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#md_save" onclick="updateInfos('<?php echo $demande['idMembre'] ?>')"><i class="fas fa-edit"></i></button>
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
        <form method="post" id="myform" action="adddemande_ajax_membres.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter recette</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                        <label for="categorie">Avatar</label>
                        <input type="file" class="form-control" id="myimg" name="myimg" placeholder="Avatar">
                    </div>

                    <div class="form-group">
                        <label for="login">login</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="login">
                    </div>

                    <div class="form-group">
                        <label for="categorie">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                    </div>

                    <div class="form-group">
                        <label for="statut">Statut</label>
                        <input type="text" class="form-control" id="statut" name="statut" placeholder="statut">
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
                    </div>

                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="prnomix" name="nom" placeholder="Nom">
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

    <?php
    include 'footer.php';
    ?>
