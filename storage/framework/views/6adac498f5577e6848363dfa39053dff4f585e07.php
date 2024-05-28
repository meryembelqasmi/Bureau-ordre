<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="dashboard">
    <div class="dashboard-nav">
        <header>
            <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
            <a href="<?php echo e(route('home')); ?>" class="brand-logo"><i class="fas fa-inbox"></i> <span>Bureau d'ordre</span></a>
        </header>
        <nav class="dashboard-nav-list">
            <a href="<?php echo e(route('home')); ?>" class="dashboard-nav-item"><i class="fas fa-home"></i> Home </a>
             <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Paramétre </a>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
            <div class="nav-item-divider"></div>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Déconnexion </a>
        </nav>
    </div>
    <div class="dashboard-app">
        <header class="dashboard-toolbar">
            <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
            <div class="title-and-logo"></div>
        </header>
        <div class="dashboard-content">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                    <h1>Bienvenue meryem </h1>
                    </div>
                    <div class="card-body">
                        <p>Le type de ce compte est: Administrator</p>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#" class="left-link"> <i class="fas fa-envelope"></i> Utilisateurs</a>
                        <div class="button-group">
                            <button type="button" class="btn btn-primary" id="btnAjouter">
                                <i class="fas fa-plus"></i> Ajouter
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="ajouterModal" tabindex="-1" role="dialog" aria-labelledby="ajouterModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div id="validationMessage"></div>
                                            <h5 class="modal-title" id="ajouterModalLabel">Ajouter un utilisateur</h5>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Votre formulaire -->
                                            <form id="ajouterForm">
                                                <div class="form-group">
                                                <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom..">
        
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Entrer username...">
        
        <label for="adresseemail">Adresse Email</label>
        <input type="email" class="form-control" id="adresseemail" name="adresseemail" placeholder="Entrer l'adresse email...">
        
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Entrer le mot de passe...">
        
        <label for="serviceconcerné">Service Concerné</label>
        <select class="form-control" id="serviceconcerné" name="serviceconcerné">
            <option value="">Selectionnez un service</option>
            <option value="dev-social">Services de développement social</option>
            <option value="programmation">Services de programmation</option>
            <option value="rh">Services des ressources humaines</option>
            <option value="affaires-presidence">Services des affaires de la présidence et du conseil</option>
        </select>
    </div>
</form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                            <button type="button" class="btn btn-primary" id="btnValider">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="btnImprimer" class="btn btn-secondary"><i class="fas fa-print"></i> Imprimer</button>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <table class="table table-bordered" id="tableau">
                            <thead>
                                <tr>
                                    
                                    <th>Nom</th>
                                    <th> username</th>
                                    <th>Email</th>
                                    <th>password</th>
                                    <th>service concerné</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
    // Afficher le modal pour ajouter un utilisateur
    $("#btnAjouter").click(function () {
        $("#ajouterForm")[0].reset();
        $("#validationMessage").html("");
        $("#ajouterModal .modal-title").text("Ajouter un utilisateur");
        $("#btnValider").text("Ajouter").removeClass("btn-edit-submit").addClass("btn-add-submit");
        $("#ajouterModal").modal("show");
    });

    // Valider et ajouter ou modifier un utilisateur
    $("#btnValider").click(function () {
        var nom = $("#nom").val();
        var username = $("#username").val();
        var adresseemail = $("#adresseemail").val();
        var password = $("#password").val();
        var serviceconcerné = $("#serviceconcerné").val();

        if (!nom || !username || !adresseemail || !password || !serviceconcerné) {
            $("#validationMessage").html("<div class='alert alert-danger'>Tous les champs sont obligatoires.</div>");
            return;
        }

        if ($(this).hasClass("btn-add-submit")) {
            // Ajouter un utilisateur
            var newRow = "<tr>" +
                "<td>" + nom + "</td>" +
                "<td>" + username + "</td>" +
                "<td>" + adresseemail + "</td>" +
                "<td>" + password + "</td>" +
                "<td>" + serviceconcerné + "</td>" +
                "<td>" +
                "<button class='btn btn-danger btn-delete' title='Supprimer'><i class='fas fa-trash-alt'></i></button>" +
                "<button class='btn btn-warning btn-edit' title='Modifier'><i class='fas fa-edit'></i></button>" +
                "</td>" +
                "</tr>";
            $("#tableau tbody").append(newRow);
        } else if ($(this).hasClass("btn-edit-submit")) {
            // Modifier un utilisateur existant
            var row = $("#tableau tbody").find("tr.selected");
            row.find("td:eq(0)").text(nom);
            row.find("td:eq(1)").text(username);
            row.find("td:eq(2)").text(adresseemail);
            row.find("td:eq(3)").text(password);
            row.find("td:eq(4)").text(serviceconcerné);
            row.removeClass("selected");
        }

        $("#ajouterModal").modal("hide");
        $("#ajouterForm")[0].reset();
        $("#validationMessage").html("");

        // Rafraîchir les événements des boutons Supprimer et Modifier
        $(".btn-delete").off("click").on("click", function () {
            $(this).closest("tr").remove();
            saveDataToLocalStorage();
        });
        $(".btn-edit").off("click").on("click", function () {
            var row = $(this).closest("tr");
            row.addClass("selected");

            var nom = row.find("td:eq(0)").text();
            var username = row.find("td:eq(1)").text();
            var adresseemail = row.find("td:eq(2)").text();
            var password = row.find("td:eq(3)").text();
            var serviceconcerné = row.find("td:eq(4)").text();

            $("#nom").val(nom);
            $("#username").val(username);
            $("#adresseemail").val(adresseemail);
            $("#password").val(password);
            $("#serviceconcerné").val(serviceconcerné);

            $("#ajouterModal .modal-title").text("Modifier un utilisateur");
            $("#btnValider").text("Modifier").removeClass("btn-add-submit").addClass("btn-edit-submit");
            $("#ajouterModal").modal("show");
        });

        saveDataToLocalStorage();
    });

    // Supprimer un utilisateur
    $(".btn-delete").click(function () {
        $(this).closest("tr").remove();
        saveDataToLocalStorage();
    });

    // Modifier un utilisateur
    $(".btn-edit").click(function () {
        var row = $(this).closest("tr");
        row.addClass("selected");

        var nom = row.find("td:eq(0)").text();
        var username = row.find("td:eq(1)").text();
        var adresseemail = row.find("td:eq(2)").text();
        var password = row.find("td:eq(3)").text();
        var serviceconcerné = row.find("td:eq(4)").text();

        $("#nom").val(nom);
        $("#username").val(username);
        $("#adresseemail").val(adresseemail);
        $("#password").val(password);
        $("#serviceconcerné").val(serviceconcerné);

        $("#ajouterModal .modal-title").text("Modifier un utilisateur");
        $("#btnValider").text("Modifier").removeClass("btn-add-submit").addClass("btn-edit-submit");
        $("#ajouterModal").modal("show");
    });

    // Sauvegarde des données dans le localStorage
    function saveDataToLocalStorage() {
        const tableRows = [];
        $("#tableau tbody tr").each(function () {
            const rowData = {
                nom: $(this).find("td:eq(0)").text(),
                username: $(this).find("td:eq(1)").text(),
                adresseemail: $(this).find("td:eq(2)").text(),
                password: $(this).find("td:eq(3)").text(),
                serviceconcerné: $(this).find("td:eq(4)").text()
            };
            tableRows.push(rowData);
        });
        localStorage.setItem("tableRows", JSON.stringify(tableRows));
    }

    // Chargement des données depuis le localStorage
    function loadSavedDataFromLocalStorage() {
        const savedRows = JSON.parse(localStorage.getItem("tableRows"));
        if (savedRows) {
            savedRows.forEach(function (rowData) {
                const newRow = "<tr>" +
                    "<td>" + rowData.nom + "</td>" +
                    "<td>" + rowData.username + "</td>" +
                    "<td>" + rowData.adresseemail + "</td>" +
                    "<td>" + rowData.password + "</td>" +
                    "<td>" + rowData.serviceconcerné + "</td>" +
                    "<td>" +
                    "<button class='btn btn-danger btn-delete' title='Supprimer'><i class='fas fa-trash-alt'></i></button>" +
                    "<button class='btn btn-warning btn-edit' title='Modifier'><i class='fas fa-edit'></i></button>" +
                    "</td>" +
                    "</tr>";
                $("#tableau tbody").append(newRow);
            });
        }
    }

    loadSavedDataFromLocalStorage();
});

</script>

</body>
</html>
<?php /**PATH C:\Users\Asus\Music\projetstage\resources\views/utilisateur.blade.php ENDPATH**/ ?>