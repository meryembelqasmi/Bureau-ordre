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
                                                   
                                                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Entrer la référence..."> <br/>
                                                    <input type="date" class="form-control" id="dateDepart" name="dateDepart" placeholder="Entrer la date de départ..."> <br/>
                                                    <input type="text" class="form-control" id="analyseAffaire" name="analyseAffaire" placeholder="Analyse de l'affaire..."> <br/>
                                                    <input type="text" class="form-control" id="destinateur" name="destinateur" placeholder="Destinateur..."> <br/>

                                                    <select class="form-control" id="typeDestinataire" name="typeDestinataire">
    <option value="">Sélectionner le type de destinataire</option>
    <option value="particulier">Particulier</option>
    <option value="entreprise">Entreprise</option>
</select>
                                                    
                                                    <div id="particulierInput" class="mt-2" style="display: none;">
                                                        <input type="text" class="form-control" id="nomParticulier" name="nomParticulier" placeholder="Nom du particulier...">
                                                    </div>
                                                    
                                                    <div id="entrepriseInputs" class="mt-2" style="display: none;">
                                                        <select class="form-control" id="entreprise" name="entreprise">
                                                            <option value="">Sélectionner une entreprise</option>
                                                            <option value="entreprise1">C.R.O</option>
                                                            <option value="entreprise2">C.P.O.A</option>
                                                            <option value="entreprise3">B.H</option>
                                                            <option value="entreprise4">C.C.O</option>

                                                        </select>
                                                        <select class="form-control mt-2" id="serviceEntreprise" name="serviceEntreprise">
                                                            <option value="">Sélectionner un service</option>
                                                        </select>
                                                    </div>

                                                   
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
                        <table class="table table-bordered" id="tableau">
                            <thead>
                                <tr>
                                    <th>Référence</th>
                                    <th>Date de départ</th>
                                    <th>Analyse de l'affaire</th>
                                    <th>Désignation du destinataire</th>
                                    <th>Destinateur</th>
                                    <th> entreprise</th>
                                    <th></th>
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
    const mobileScreen = window.matchMedia("(max-width: 990px)");

    const serviceByType = {
        entreprise1: [
            { value: 'service1', text: 'MEHEJ' },
            { value: 'service2', text: 'JJKE' }
        ],
        entreprise2: [
            { value: 'service3', text: 'Services de devloppement social' },
            { value: 'service4', text: 'Services des travaux equipement' }, 
            { value: 'service3', text: 'Services de programmation' },
            { value: 'service4', text: 'Services des ressources humaines' }, 
            { value: 'service4', text: 'Services des affaires de la presidences et du consiel' }
        ]

    };

    $("#typeDestinataire").change(function () {
        const selectedType = $(this).val();
        if (selectedType === "particulier") {
            $("#particulierInput").show();
            $("#entrepriseInputs").hide();
        } else if (selectedType === "entreprise") {
            $("#particulierInput").hide();
            $("#entrepriseInputs").show();
        } else {
            $("#particulierInput").hide();
            $("#entrepriseInputs").hide();
        }
    });

    $("#entreprise").change(function () {
        const selectedEntreprise = $(this).val();
        const services = serviceByType[selectedEntreprise] || [];
        const serviceSelect = $("#serviceEntreprise");
        serviceSelect.empty();
        serviceSelect.append('<option value="">Sélectionner un service</option>');
        services.forEach(service => {
            serviceSelect.append(`<option value="${service.value}">${service.text}</option>`);
        });
    });

    function saveDataToLocalStorage() {
    const tableRows = [];
    $("#tableau tbody tr").each(function () {
        const rowData = {
            reference: $(this).find("td:eq(0)").text(),
            dateDepart: $(this).find("td:eq(1)").text(),
            analyseAffaire: $(this).find("td:eq(2)").text(),
            designationDestinataire: $(this).find("td:eq(3)").text(),
            destinateur: $(this).find("td:eq(4)").text(),
            entreprise: $(this).find("td:eq(5)").text(), // Modifier service en entreprise
            service: $(this).find("td:eq(6)").text() // Modifier employe en service
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
                "<td>" + rowData.entreprise + "</td>" + // Modifier service en entreprise
                "<td>" + rowData.service + "</td>" + // Modifier employe en service
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
        $("#ajouterForm")[0].reset();
        $("#validationMessage").html("");
        $("#ajouterModal .modal-title").text("Ajouter un courrier");
        $("#btnValider").text("Ajouter");
        $("#btnValider").removeClass("btn-edit-submit").addClass("btn-add-submit");
        $("#ajouterModal").modal("show");
    });


    $("#btnValider").click(function () {
    var reference = $("#reference").val();
    var dateDepart = $("#dateDepart").val();
    var analyseAffaire = $("#analyseAffaire").val();
    var designationDestinataire = $("#designationDestinataire").val();
    var destinateur = $("#destinateur").val();
    var entreprise = $("#entreprise").val();
    var service = $("#serviceEntreprise").val(); // Remplacer "employe" par "service"

        if (!reference || !dateDepart || !analyseAffaire || !designationDestinataire || !destinateur || !service || !employe) {
            $("#validationMessage").html("<div class='alert alert-danger'>Tous les champs sont obligatoires.</div>");
            return;
        }

        if ($("#btnValider").hasClass("btn-add-submit")) {
        // Création d'une nouvelle ligne dans le tableau
        var newRow = "<tr>" +
            "<td>" + reference + "</td>" +
            "<td>" + dateDepart + "</td>" +
            "<td>" + analyseAffaire + "</td>" +
            "<td>" + designationDestinataire + "</td>" +
            "<td>" + destinateur + "</td>" +
            "<td>" + entreprise + "</td>" + // Remplacer "service" par "entreprise"
            "<td>" + service + "</td>" + // Remplacer "employe" par "service"
            "<td>" +
            "<button class='btn btn-danger btn-delete' title='Supprimer'><i class='fas fa-trash-alt'></i></button>" +
            "<button class='btn btn-warning btn-edit' title='Modifier'><i class='fas fa-edit'></i></button>" +
            "</td>" +
            "</tr>";

            $("#tableau tbody").append(newRow);
    }  else if ($("#btnValider").hasClass("btn-edit-submit")) {
        // Mettre à jour la ligne existante
        var row = $("#tableau tbody").find("tr.selected");
        row.find("td:eq(0)").text(reference);
        row.find("td:eq(1)").text(dateDepart);
        row.find("td:eq(2)").text(analyseAffaire);
        row.find("td:eq(3)").text(designationDestinataire);
        row.find("td:eq(4)").text(destinateur);
        row.find("td:eq(5)").text(entreprise); // Remplacer "service" par "entreprise"
        row.find("td:eq(6)").text(service);

            // Supprimer la classe "selected"
            row.removeClass("selected");
        }

        $("#ajouterModal").modal("hide");
       $("#ajouterForm")[0].reset();
       $("#validationMessage").html("");


       $(".btn-delete").off("click").on("click", function () {
        $(this).closest("tr").remove();
        
    });
    $(".btn-edit").off("click").on("click", function () {
        var row = $(this).closest("tr");
        row.addClass("selected");

        var reference = row.find("td:eq(0)").text();
        var dateDepart = row.find("td:eq(1)").text();
        var analyseAffaire = row.find("td:eq(2)").text();
        var designationDestinataire = row.find("td:eq(3)").text();
        var destinateur = row.find("td:eq(4)").text();
        var entreprise = row.find("td:eq(5)").text();
        var service = row.find("td:eq(6)").text();

        $("#reference").val(reference);
        $("#dateDepart").val(dateDepart);
        $("#analyseAffaire").val(analyseAffaire);
        $("#designationDestinataire").val(designationDestinataire);
        $("#destinateur").val(destinateur);
        $("#entreprise").val(entreprise);
        $("#serviceEntreprise").val(service);

            // Modifier le titre du modal
            $("#ajouterModal .modal-title").text("Modifier le courrier");

            // Modifier le texte du bouton Valider du modal
            $("#btnValider").text("Modifier");

            // Ajouter une classe pour distinguer le bouton Valider en mode modification
            $("#btnValider").addClass("btn-edit-submit").removeClass("btn-add-submit");

            $("#ajouterModal").modal("show");
           
        });
        saveDataToLocalStorage();
    });

    $(".btn-delete").click(function () {
                $(this).closest("tr").remove();
                saveDataToLocalStorage(); // Sauvegarder les données après la suppression
            });

            $(".btn-edit").click(function () {
    var row = $(this).closest("tr");
    row.addClass("selected");

    var reference = row.find("td:eq(0)").text();
    var dateDepart = row.find("td:eq(1)").text();
    var analyseAffaire = row.find("td:eq(2)").text();
    var designationDestinataire = row.find("td:eq(3)").text();
    var destinateur = row.find("td:eq(4)").text();
    var entreprise = row.find("td:eq(5)").text(); // Remplacer "service" par "entreprise"
    var service = row.find("td:eq(6)").text();

        $("#reference").val(reference);
        $("#dateDepart").val(dateDepart);
        $("#analyseAffaire").val(analyseAffaire);
        $("#designationDestinataire").val(designationDestinataire);
        $("#destinateur").val(destinateur);
        $("#entreprise").val(entreprise);
        $("#service").val(service);

        // Modifier le titre du modal
        $("#ajouterModal .modal-title").text("Modifier le courrier");

        // Modifier le texte du bouton Valider du modal
        $("#btnValider").text("Modifier");

        // Ajouter une classe pour distinguer le bouton Valider en mode modification
        $("#btnValider").addClass("btn-edit-submit").removeClass("btn-add-submit");

        $("#ajouterModal").modal("show");
        
    });

    $("#btnImprimer").click(function () {
    var printWindow = window.open('', '_blank');
    var printContent = `
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
                        <th>entreprise</th>
                        <th>service</th>
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

    // Gérer le changement de sélection dans le menu déroulant de l'année
    $("#selectAnnee").change(function () {
    const selectedYear = $(this).val(); // Récupérer l'année sélectionnée

    // Parcourir les lignes du tableau
    $("#tableau tbody tr").each(function () {
        const dateDepart = $(this).find("td:eq(1)").text(); // Récupérer la date de départ
        const yearInRow = new Date(dateDepart).getFullYear(); // Extraire l'année de la date de départ

        // Vérifier si l'année de départ correspond à l'année sélectionnée ou si l'option "Sélectionner l'année du courrier" est choisie
        if (selectedYear === "selectionner l'anne du courrier" || yearInRow === parseInt(selectedYear)) {
            $(this).show(); // Afficher la ligne si l'année correspond ou si l'option "Sélectionner l'année du courrier" est choisie
        } else {
            $(this).hide(); // Masquer la ligne sinon
        }
    });
});


        $("#btnRechercher").click(function () {
            var searchAnalyse = $("#searchAnalyse").val().toLowerCase();

            $("#tableau tbody tr").each(function () {
                var analyse = $(this).find("td:eq(2)").text().toLowerCase();

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
<?php /**PATH C:\Users\Asus\Music\projetstage\resources\views/sortant.blade.php ENDPATH**/ ?>