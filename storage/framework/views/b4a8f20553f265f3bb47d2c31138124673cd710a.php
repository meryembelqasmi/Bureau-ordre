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
            <a href="<?php echo e(route('home')); ?>" class="dashboard-nav-item"><i class="fas fa-home"></i> Home </a>
            <a href="<?php echo e(route('entrant')); ?>" class="dashboard-nav-item active"><i class="fas fa-envelope-open"></i> Entrant </a>
            <a href="<?php echo e(route('Sortant')); ?>" class="dashboard-nav-item"><i class="fas fa-envelope"></i> Sortant </a>
            <div class="dashboard-nav-dropdown">
                <a href="<?php echo e(route('utilisateur')); ?>" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-users"></i> Utilisateurs </a>
                <div class="dashboard-nav-dropdown-menu">
                    <a href="#" class="dashboard-nav-dropdown-item">All</a>
                </div>
            </div>
            <div class="dashboard-nav-dropdown">
                <a href="<?php echo e(route('notifications')); ?>" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-bell"></i> Notifications </a>
            </div>
            <a href="<?php echo e(route('corbeille')); ?>" class="dashboard-nav-item"><i class="fas fa-trash-alt"></i> Corbeille </a>
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
                        <select name="annee" id="selectAnnee" class="form-control">
                            <option>Sélectionner l'année de courrier</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                        </select>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="#" class="left-link"> <i class="fas fa-envelope"></i>Fiche d'utilisateurs</a>
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
                                            <h5  class="modal-title" id="ajouterModalLabel">Ajouter un nouveau utilisateur</h5>
                                            
                                        </div>
                                        <div class="modal-body">
                                            <!-- Votre formulaire -->
                                            <form id="ajouterForm">
                                                <div class="form-group">
                                                    
                                                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Nom...">
                                                    <input type="date" class="form-control" id="dateDepart" name="dateDepart" placeholder="Prenom...">
                                                    <input type="text" class="form-control" id="analyseAffaire" name="analyseAffaire" placeholder="Username.">
                                                    <input type="email" class="form-control" id="designationDestinataire" name="designationDestinataire" placeholder="Email..">
                                                    <input type="password" class="form-control" id="destinateur" name="destinateur" placeholder="password..">
                                                    <input type="password" class="form-control" id="destinateur" name="destinateur" placeholder="Confirmer password..">

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
                        <input type="text" id="searchAnalyse" placeholder="Rechercher par analyse" class="form-control">
                        <button id="btnRechercher" class="btn btn-primary mt-2"><i class="fas fa-search"></i> Rechercher</button>
                    </div>
                </div>
                <div class="card">
    <div class="card-header">
        <table class="table">
            <thead>
                <tr> 
                    <th>Nom</th>
                    <th>Nom d'utilisateur</th>
                    <th>Email</th>
                    <th>Service</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $employes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                       
                        <td><?php echo e($employe->nom); ?></td>
                        <td><?php echo e($employe->username); ?></td>
                        <td><?php echo e($employe->email); ?></td>
                        <td><?php echo e($employe->service); ?></td>
               
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    const mobileScreen = window.matchMedia("(max-width: 990px)");

    const employeesByService = {
        electricite: ["Ahmed", "Fatima", "Khalid"],
        informatique: ["Meryem", "Youssef", "Sara"],
        gym: ["Ali", "Nadia", "Omar"]
    };

    function saveDataToLocalStorage() {
        const tableRows = [];
        $("#tableau tbody tr").each(function () {
            const rowData = {
                reference: $(this).find("td:eq(0)").text(),
                dateDepart: $(this).find("td:eq(1)").text(),
                analyseAffaire: $(this).find("td:eq(2)").text(),
                designationDestinataire: $(this).find("td:eq(3)").text(),
                destinateur: $(this).find("td:eq(4)").text(),
                service: $(this).find("td:eq(5)").text(),
                employe: $(this).find("td:eq(6)").text(),
                dateAffectation: $(this).find("td:eq(7)").text(),
                datePrecis: $(this).find("td:eq(8)").text(),
            };
            tableRows.push(rowData);
        });
        localStorage.setItem("tableRows", JSON.stringify(tableRows));
    }

    function loadSavedDataFromLocalStorage() {
        const savedRows = JSON.parse(localStorage.getItem("tableRows"));
        if (savedRows) {
            savedRows.forEach(function (rowData) {
                const newRow = "<tr>" +
                    "<td>" + rowData.reference + "</td>" +
                    "<td>" + rowData.dateDepart + "</td>" +
                    "<td>" + rowData.analyseAffaire + "</td>" +
                    "<td>" + rowData.designationDestinataire + "</td>" +
                    "<td>" + rowData.destinateur + "</td>" +
                    "<td>" + rowData.service + "</td>" +
                    "<td>" + rowData.employe + "</td>" +
                    "<td >" + rowData.dateAffectation + "</td>" +
                    "<td>" + rowData.datePrecis + "</td>" +
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

    $("#service").change(function () {
        const selectedService = $(this).val();
        const employees = employeesByService[selectedService] || [];
        $("#employe").empty().append('<option value="">Sélectionner un employé</option>');
        employees.forEach(function (employee) {
            $("#employe").append(`<option value="${employee}">${employee}</option>`);
        });
    });

    $("#btnAjouter").click(function () {
        $("#ajouterModal").modal("show");
    });

    $("#typeCourrier").change(function () {
        if ($(this).val() === "courrier_travail") {
            $("#courrierTravailFields").show();
        } else {
            $("#courrierTravailFields").hide();
        }
    });

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

    $("#btnValider").click(function () {
        const typeCourrier = $("#typeCourrier").val();
        const reference = $("#reference").val();
        const dateDepart = $("#dateDepart").val();
        const analyseAffaire = $("#analyseAffaire").val();
        const designationDestinataire = $("#designationDestinataire").val();
        const destinateur = $("#destinateur").val();
        const service = $("#service").val();
        const employe = $("#employe").val();
        const dateAffectation = $("#dateAffectation").val();
        const datePrecis = $("#datePrecis").val();

        if (!typeCourrier || !reference || !dateDepart || !analyseAffaire || !designationDestinataire || !destinateur || !service || !employe || (typeCourrier === "courrier_travail" && (!dateAffectation || !datePrecis))) {
            $("#validationMessage").text("Tous les champs sont obligatoires.").css("color", "red");
            return;
        }

        let affectationCell = "";
        let precisCell = "";

        if (typeCourrier === "courrier_travail") {
            affectationCell = `<td style="background-color: #e97f7f;">${dateAffectation}</td>`;
            precisCell = `<td style="background-color: #97d59c;">${datePrecis}</td>`;
        } else {
            affectationCell = "<td></td>";
            precisCell = "<td></td>";
        }

        const newRow = `
            <tr>
                <td>${reference}</td>
                <td>${dateDepart}</td>
                <td>${analyseAffaire}</td>
                <td>${designationDestinataire}</td>
                <td>${destinateur}</td>
                <td>${service}</td>
                <td>${employe}</td>
                ${affectationCell}
                ${precisCell}
                <td><button class='btn btn-danger btn-delete' title='Supprimer'><i class='fas fa-trash-alt'></i></button>
                <button class='btn btn-warning btn-edit' title='Modifier'><i class='fas fa-edit'></i></button>
                </td>
            </tr>
        `;

        $("#tableau tbody").append(newRow);
        $("#ajouterModal").modal("hide");
        $("#ajouterForm")[0].reset();
        $("#validationMessage").text("");
        $("#courrierTravailFields").hide();

        saveDataToLocalStorage();
    });

    $("#tableau").on("click", ".btn-delete", function () {
        $(this).closest("tr").remove();
        saveDataToLocalStorage();
    });

    $("#tableau").on("click", ".btn-edit", function () {
        const row = $(this).closest("tr");
        row.addClass("selected");

        const reference = row.find("td:eq(0)").text();
        const dateDepart = row.find("td:eq(1)").text();
        const analyseAffaire = row.find("td:eq(2)").text();
        const designationDestinataire = row.find("td:eq(3)").text();
        const destinateur = row.find("td:eq(4)").text();
        const service = row.find("td:eq(5)").text();
        const employe = row.find("td:eq(6)").text();
        const dateAffectation = row.find("td:eq(7)").text();
        const datePrecis = row.find("td:eq(8)").text();

        $("#reference").val(reference);
        $("#dateDepart").val(dateDepart);
        $("#analyseAffaire").val(analyseAffaire);
        $("#designationDestinataire").val(designationDestinataire);
        $("#destinateur").val(destinateur);
        $("#service").val(service).trigger("change");
        $("#employe").val(employe);
        $("#dateAffectation").val(dateAffectation);
        $("#datePrecis").val(datePrecis);

        if (dateAffectation || datePrecis) {
            $("#courrierTravailFields").show();
            $("#typeCourrier").val("courrier_travail");
        } else {
            $("#courrierTravailFields").hide();
            $("#typeCourrier").val("autre");
        }

        $("#ajouterModal .modal-title").text("Modifier le courrier");
        $("#btnValider").text("Modifier");
        $("#btnValider").addClass("btn-edit-submit").removeClass("btn-add-submit");

        $("#ajouterModal").modal("show");
    });

    $("#btnImprimer").click(function () {
        const printWindow = window.open('', '_blank');
        const printContent = `
            <html>
            <head>
                <title>Imprimer les courriers</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <style>
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    th, td {
                        border: 1px solid #000;
                        padding: 8px;
                        text-align: left;
                    }
                    th {
                        background-color: #f2f2f2;
                    }
                </style>
            </head>
            <body>
                <table>
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Date de départ</th>
                            <th>Analyse de l'affaire</th>
                            <th>Désignation du destinataire</th>
                            <th>Destinateur</th>
                            <th>Service</th>
                            <th>Employé</th>
                            <th>Date d'affectation</th>
                            <th>Date précise</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${$("#tableau tbody").html()}
                    </tbody>
                </table>
            </body>
            </html>
        `;
        printWindow.document.open();
        printWindow.document.write(printContent);
        printWindow.document.close();
        printWindow.print();
    });

    $("#selectAnnee").change(function () {
        const selectedYear = $(this).val();

        $("#tableau tbody tr").each(function () {
            const dateDepart = $(this).find("td:eq(1)").text();
            const yearInRow = new Date(dateDepart).getFullYear();

            if (selectedYear === "selectionner l'anne du courrier" || yearInRow === parseInt(selectedYear)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

    $("#btnRechercher").click(function () {
        const searchAnalyse = $("#searchAnalyse").val().toLowerCase();

        $("#tableau tbody tr").each(function () {
            const analyse = $(this).find("td:eq(2)").text().toLowerCase();

            if (analyse.includes(searchAnalyse)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
</script>

</body>
</html>
<?php /**PATH C:\Users\Asus\Music\projetstage\resources\views/afficher_utilisateur.blade.php ENDPATH**/ ?>