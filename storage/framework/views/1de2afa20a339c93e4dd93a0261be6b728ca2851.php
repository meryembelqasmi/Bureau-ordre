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
            <a href="#" class="brand-logo"><i class="fas fa-inbox"></i> <span>Bureau d'ordre</span></a>
        </header>
        <nav class="dashboard-nav-list">
            <a href="#" class="dashboard-nav-item"><i class="fas fa-home"></i> Home </a>
            <a href="#" class="dashboard-nav-item active"><i class="fas fa-envelope-open"></i> Entrant </a>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-envelope"></i> Sortant </a>
            <div class="dashboard-nav-dropdown">
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-users"></i> Utilisateurs </a>
                <div class="dashboard-nav-dropdown-menu">
                    <a href="#" class="dashboard-nav-dropdown-item">All</a>
                </div>
            </div>
            <div class="dashboard-nav-dropdown">
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-bell"></i> Notifications </a>
            </div>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-trash-alt"></i> Corbeille </a>
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
                        <h1>Bienvenue Layla Alkhraz</h1>
                    </div>
                    <div class="card-body">
                        <p>Le type de ce compte est: Administrator</p>
                        <select name="annee" id="selectAnnee" class="form-control">
                            <option value="">Sélectionner l'année de courrier</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#" class="left-link"> <i class="fas fa-envelope"></i> Courrier sortant</a>
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
                                            <h5 class="modal-title" id="ajouterModalLabel">Ajouter un courrier</h5>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Votre formulaire -->
                                            <form id="ajouterForm">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Entrer la référence...">
                                                    <input type="date" class="form-control" id="dateDepart" name="dateDepart" placeholder="Entrer la date de départ...">
                                                    <input type="text" class="form-control" id="analyseAffaire" name="analyseAffaire" placeholder="Analyse de l'affaire...">
                                                    <input type="text" class="form-control" id="designationDestinataire" name="designationDestinataire" placeholder="Désignation du destinataire...">
                                                    <input type="text" class="form-control" id="destinateur" name="destinateur" placeholder="Destinateur...">
                                                    <select class="form-control" id="service" name="service">
                                                        <option value="">Sélectionner un service</option>
                                                        <option value="electricite">Electricité</option>
                                                        <option value="informatique">Informatique</option>
                                                        <option value="Gym">Gym</option>
                                                    </select>
                                                    <select class="form-control" id="employe" name="employe">
                                                        <option value="">Sélectionner un employé</option>
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
                        <input type="text" placeholder="Chercher par sujet ou numéro..." class="form-control">
                        <button id="btnRechercher" class="btn btn-primary mt-2"><i class="fas fa-search"></i> Rechercher</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <table class="table table-bordered" id="tableau">
                            <thead>
                                <tr>
                                    <th>Référence</th>
                                    <th>Date de départ</th>
                                    <th>Analyse de l'affaire</th>
                                    <th>Désignation du destinataire</th>
                                    <th>Destinateur</th>
                                    <th>Service</th>
                                    <th>Employé</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>26/12/123</td>
                                    <td>C'est l'autorisation de build de voiture</td>
                                    <td>Coopération scolaire</td>
                                    <td>Bureau d'ordre</td>
                                    <td>Informatique</td>
                                    <td>Meryem</td>
                                    <td>
                                        <button class="btn btn-danger btn-delete" title="Supprimer"><i class="fas fa-trash-alt"></i></button>
                                        <button class="btn btn-warning btn-edit" title="Modifier"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
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
    const mobileScreen = window.matchMedia("(max-width: 990px)");
    $(document).ready(function () {
        $(".dashboard-nav-dropdown-toggle").click(function () {
            $(this).closest(".dashboard-nav-dropdown")
                .toggleClass("show")
                .find(".dashboard-nav-dropdown")
                .removeClass("show");
            $(this).parent()
                .siblings()
                .removeClass("show");
        });
        $(".menu-toggle").click(function () {
            if (mobileScreen.matches) {
                $(".dashboard-nav").toggleClass("mobile-show");
            } else {
                $(".dashboard").toggleClass("dashboard-compact");
            }
        });

        $("#btnAjouter").click(function () {
            $("#ajouterModal").modal("show");
        });

        $("#btnValider").click(function () {
            var reference = $("#reference").val();
            var dateDepart = $("#dateDepart").val();
            var analyseAffaire = $("#analyseAffaire").val();
            var designationDestinataire = $("#designationDestinataire").val();
            var destinateur = $("#destinateur").val();
            var service = $("#service").val();
            var employe = $("#employe").val();

            if (!reference || !dateDepart || !analyseAffaire || !designationDestinataire || !destinateur || !service || !employe) {
                $("#validationMessage").html("<div class='alert alert-danger'>Tous les champs sont obligatoires.</div>");
                return;
            }

            var newRow = "<tr>" +
                "<td>" + reference + "</td>" +
                "<td>" + dateDepart + "</td>" +
                "<td>" + analyseAffaire + "</td>" +
                "<td>" + designationDestinataire + "</td>" +
                "<td>" + destinateur + "</td>" +
                "<td>" + service + "</td>" +
                "<td>" + employe + "</td>" +
                "<td>" +
                "<button class='btn btn-danger btn-delete' title='Supprimer'><i class='fas fa-trash-alt'></i></button>" +
                "<button class='btn btn-warning btn-edit' title='Modifier'><i class='fas fa-edit'></i></button>" +
                "</td>" +
                "</tr>";

            $("#tableau tbody").append(newRow);
            $("#ajouterModal").modal("hide");
            $("#ajouterForm")[0].reset();
            $("#validationMessage").html("");

            $(".btn-delete").off("click").on("click", function () {
                $(this).closest("tr").remove();
            });

            $(".btn-edit").off("click").on("click", function () {
                var row = $(this).closest("tr");
                var reference = row.find("td:eq(0)").text();
                var dateDepart = row.find("td:eq(1)").text();
                var analyseAffaire = row.find("td:eq(2)").text();
                var designationDestinataire = row.find("td:eq(3)").text();
                var destinateur = row.find("td:eq(4)").text();
                var service = row.find("td:eq(5)").text();
                var employe = row.find("td:eq(6)").text();

                $("#reference").val(reference);
                $("#dateDepart").val(dateDepart);
                $("#analyseAffaire").val(analyseAffaire);
                $("#designationDestinataire").val(designationDestinataire);
                $("#destinateur").val(destinateur);
                $("#service").val(service);
                $("#employe").val(employe);

                $("#ajouterModal").modal("show");
            });
        });

        $(".btn-delete").click(function () {
            $(this).closest("tr").remove();
        });

        $(".btn-edit").click(function () {
            var row = $(this).closest("tr");
            var reference = row.find("td:eq(0)").text();
            var dateDepart = row.find("td:eq(1)").text();
            var analyseAffaire = row.find("td:eq(2)").text();
            var designationDestinataire = row.find("td:eq(3)").text();
            var destinateur = row.find("td:eq(4)").text();
            var service = row.find("td:eq(5)").text();
            var employe = row.find("td:eq(6)").text();

            $("#reference").val(reference);
            $("#dateDepart").val(dateDepart);
            $("#analyseAffaire").val(analyseAffaire);
            $("#designationDestinataire").val(designationDestinataire);
            $("#destinateur").val(destinateur);
            $("#service").val(service);
            $("#employe").val(employe);

            $("#ajouterModal").modal("show");
        });
    });
    
</script>
</body>
</html>
<?php /**PATH C:\Users\Asus\Music\projetstage\resources\views/test.blade.php ENDPATH**/ ?>