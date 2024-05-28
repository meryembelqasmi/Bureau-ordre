<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
            <a href="{{route('home')}}" class="dashboard-nav-item"><i class="fas fa-home"></i> Home </a>
            <a href="{{route('entrant')}}" class="dashboard-nav-item active"><i class="fas fa-envelope-open"></i> Entrant </a>
            <a href="{{route('Sortant')}}" class="dashboard-nav-item"><i class="fas fa-envelope"></i> Sortant </a>
            <div class="dashboard-nav-dropdown">
                <a href="{{route('utilisateur')}}" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-users"></i> Utilisateurs </a>
                <div class="dashboard-nav-dropdown-menu">
                    <a href="#" class="dashboard-nav-dropdown-item">All</a>
                </div>
            </div>
            <div class="dashboard-nav-dropdown">
                <a href="{{route('notifications')}}" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-bell"></i> Notifications </a>
            </div>
            <a href="{{route('corbeille')}}" class="dashboard-nav-item"><i class="fas fa-trash-alt"></i> Corbeille </a>
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
                        <a href="#" class="left-link"> <i class="fas fa-envelope"></i> Courrier entrant</a>
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

                                                    <select class="form-control mt-2" id="typecourrier" name="type courrier">
                                                            <option value="">Sélectionner le type de courrier</option>
                                                            <option value=" archive">Archive</option>

                                                            <option value=" courrier travail">courrier Travail</option>

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
                        <input type="text" id="searchAnalyse" placeholder="Rechercher par courrier" class="form-control">
                        <button id="btnRechercher" class="btn btn-primary mt-2"><i class="fas fa-search"></i> Rechercher</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <table class="table">
                            <thead>
                                <tr>
                                   
                                    <th>Référence</th>
                                    <th>Nom de l'entreprise</th>
                                    <th>Date de réception</th>
                                    <th>Analyse</th>
                                    <th>Code</th>
                                    <th>Service concerné</th>
                                    <th>Type de courrier</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($entrants as $entrant)
                                <tr>
                                   
                                    <td>{{ $entrant->reference }}</td>
                                    <td>{{ $entrant->nom_entreprise }}</td>
                                    <td>{{ $entrant->date_recu }}</td>
                                    <td>
                                        <span class="short-content">{{ Str::limit($entrant->analyse, 30) }}</span>
                                        <span class="full-content" style="display: none;">{{ $entrant->analyse }}</span>
                                        <a href="#" class="toggle-content">Voir</a>
                                    </td>
                                    <td>{{ $entrant->code }}</td>
                                    <td>{{ $entrant->service_concerne }}</td>
                                    <td>{{ $entrant->type_de_courrier }}</td>
                                   {{--
                                    <td> 
                                        <a href="{{route('ajouter_courrier_entrant_store',[
                                            'reference'=>$entrant->reference,
                                            'date_recu'=>$entrant->date_recu,
                                            'analyse'=>$entrant->analyse,
                                            'nom_entreprise'=>$entrant->nom_entreprise,
                                            'code'=>$entrant->code,
                                            'service_concerne'=>$entrant->service_concerne,
                                            'type_de_courrier'=>$entrant->type_de_courrier,
                                            'id_notification'=>$entrant->id,
                                        ])}}"><button class="btn btn-primary">Ajouter</button>
                                        </a>
                                    </td>
                                    --}}
                                    <td>
                                        <a href="{{ route('ajouter_courrier_employe', [
                                            'id_entrant' => $entrant->id,
                                            'reference' => $entrant->reference,
                                            'daterecu' => $entrant->date_recu,
                                            'analyse' => $entrant->analyse,
                                            'code' => $entrant->code,
                                            'type_courrier' => $entrant->type_de_courrier,
                                            'service_concerne' => $entrant->service_concerne,
                                        ]) }}">
                                        <button class="btn btn-success">Affecter</button>
                                    </a>
                                    </td>

                                    <td>
                                        <a href="{{route('supprimer_courrier_entrant',['id'=>$entrant->id])}}">
                                        <button  class="btn btn-danger"> Supprimer</button>
                                    </a>
                                    </td>
                                </tr>
                                @endforeach
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
            { value: 'gym', text: 'gym' },
            { value: 'programmation', text: 'programmation' }
        ],
        entreprise2: [
            { value: 'Services de devloppement social', text: 'Services de devloppement social' },
            { value: 'Services des travaux equipement', text: 'Services des travaux equipement' }, 
            { value: 'Services de programmation', text: 'Services de programmation' },
            { value: 'Services des ressources humaines', text: 'Services des ressources humaines' }, 
            { value: 'Services des affaires de la presidences et du consiel', text: 'Services des affaires de la presidences et du consiel' }
        ],
        entreprise3: [
        { value: 'Marketing', text: 'Marketing' },
        { value: 'Finances', text: 'Finances' }
    ],
    entreprise4: [
        { value: 'Recherche et Développement', text: 'Recherche et Développement' },
        { value: 'Support Technique', text: 'Support Technique' }
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
            datereçu: $(this).find("td:eq(1)").text(),
            analyseAffaire: $(this).find("td:eq(2)").text(),
            designationDestinataire: $(this).find("td:eq(3)").text(),
            destinateur: $(this).find("td:eq(4)").text(),
            service: $(this).find("td:eq(5)").text(), // Modifier service en entreprise
            typecourrier: $(this).find("td:eq(6)").text() // Modifier employe en service
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
                "<td>" + rowData.datereçu + "</td>" +
                "<td>" + rowData.analyseAffaire + "</td>" +
                "<td>" + rowData.designationDestinataire + "</td>" +
                "<td>" + rowData.destinateur + "</td>" +
                "<td>" + rowData.service + "</td>" + // Modifier service en entreprise
                "<td>" + rowData. typecourrier + "</td>" + // Modifier employe en service
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
    var datereçu = $("#dateDepart").val();
    var analyseAffaire = $("#analyseAffaire").val();
    var designationDestinataire = $("#typeDestinataire").val() === "particulier" 
        ? $("#nomParticulier").val() 
        : $("#entreprise").val();
            var destinateur = $("#destinateur").val();
    var service = $("#service").val();
    var typecourrier = $("#typecourrier").val(); // Remplacer "employe" par "service"

        if (!reference || !datereçu || !analyseAffaire ) {
            $("#validationMessage").html("<div class='alert alert-danger'>Tous les champs sont obligatoires.</div>");
            return;
        }

        $("#btnValider").click(function () {
    var reference = $("#reference").val();
    var datereçu = $("#dateDepart").val();
    var analyseAffaire = $("#analyseAffaire").val();
    var designationDestinataire = $("#nomParticulier").val() || $("#entreprise option:selected").text();
    var destinateur = $("#destinateur").val();
    var service = $("#serviceEntreprise").val();
    var typecourrier = $("#typecourrier").val();

    if (!reference || !datereçu || !analyseAffaire) {
        $("#validationMessage").html("<div class='alert alert-danger'>Tous les champs sont obligatoires.</div>");
        return;
    }

    if ($("#btnValider").hasClass("btn-add-submit")) {
        // Création d'une nouvelle ligne dans le tableau
        var newRow = "<tr>" +
            "<td>" + reference + "</td>" +
            "<td>" + datereçu + "</td>" +
            "<td>" + analyseAffaire + "</td>" +
            "<td>" + designationDestinataire + "</td>" +
            "<td>" + destinateur + "</td>" +
            "<td>" + service + "</td>" +
            "<td>" + typecourrier + "</td>" +
            "<td>" +
            "<button class='btn btn-danger btn-delete' title='Supprimer'><i class='fas fa-trash-alt'></i></button>" +
            "<button class='btn btn-warning btn-edit' title='Modifier'><i class='fas fa-edit'></i></button>" +
            "</td>" +
            "</tr>";

        $("#tableau tbody").append(newRow);
    } else if ($("#btnValider").hasClass("btn-edit-submit")) {
        // Mettre à jour la ligne existante
        var row = $("#tableau tbody").find("tr.selected");
        row.find("td:eq(0)").text(reference);
        row.find("td:eq(1)").text(datereçu);
        row.find("td:eq(2)").text(analyseAffaire);
        row.find("td:eq(3)").text(designationDestinataire);
        row.find("td:eq(4)").text(destinateur);
        row.find("td:eq(5)").text(service);
        row.find("td:eq(6)").text(typecourrier);

        // Supprimer la classe "selected"
        row.removeClass("selected");
    }

    $("#ajouterModal").modal("hide");
    $("#ajouterForm")[0].reset();
    $("#validationMessage").html("");

    $(".btn-delete").off("click").on("click", function () {
        $(this).closest("tr").remove();
        saveDataToLocalStorage();
    });
    $(".btn-edit").off("click").on("click", function () {
        var row = $(this).closest("tr");
        row.addClass("selected");

        var reference = row.find("td:eq(0)").text();
        var datereçu = row.find("td:eq(1)").text();
        var analyseAffaire = row.find("td:eq(2)").text();
        var designationDestinataire = row.find("td:eq(3)").text();
        var destinateur = row.find("td:eq(4)").text();
        var service = row.find("td:eq(5)").text();
        var typecourrier = row.find("td:eq(6)").text();

        $("#reference").val(reference);
        $("#datereçu").val(datereçu);
        $("#analyseAffaire").val(analyseAffaire);
        $("#nomParticulier").val(designationDestinataire);
        $("#entreprise").val(designationDestinataire);
        $("#destinateur").val(destinateur);
        $("#serviceEntreprise").val(service);
        $("#typecourrier").val(typecourrier);

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

    });

    $(".btn-delete").click(function () {
                $(this).closest("tr").remove();
                saveDataToLocalStorage(); // Sauvegarder les données après la suppression
            });
            $(".btn-edit").click(function () {
    var row = $(this).closest("tr");
    row.addClass("selected");

    var reference = row.find("td:eq(0)").text();
    var datereçu = row.find("td:eq(1)").text();
    var analyseAffaire = row.find("td:eq(2)").text();
    var designationDestinataire = row.find("td:eq(3)").text();
    var destinateur = row.find("td:eq(4)").text();
    var service = row.find("td:eq(5)").text();
    var typecourrier = row.find("td:eq(6)").text();

    $("#reference").val(reference);
    $("#datereçu").val(datereçu);
    $("#analyseAffaire").val(analyseAffaire);
    $("#nomParticulier").val(designationDestinataire);
    $("#entreprise").val(designationDestinataire);
    $("#destinateur").val(destinateur);
    $("#serviceEntreprise").val(service);
    $("#typecourrier").val(typecourrier);

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
                        <th>Date reçu</th>
                        <th>Analyse de l'affaire</th>
                        <th>Désignation du destinataire</th>
                        <th>Destinateur</th>
                        <th>service</th>
                        <th>typecourrier</th>
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
        const datereçu = $(this).find("td:eq(1)").text(); // Récupérer la date de départ
        const yearInRow = new Date(datereçu).getFullYear(); // Extraire l'année de la date de départ

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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.toggle-content').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();
                var shortContent = this.previousElementSibling.previousElementSibling;
                var fullContent = this.previousElementSibling;

                if (shortContent.style.display === 'none') {
                    shortContent.style.display = 'inline';
                    fullContent.style.display = 'none';
                    this.textContent = 'Voir';
                } else {
                    shortContent.style.display = 'none';
                    fullContent.style.display = 'inline';
                    this.textContent = 'Voir moins';
                }
            });
        });
    });
</script>
</body>
</html>
