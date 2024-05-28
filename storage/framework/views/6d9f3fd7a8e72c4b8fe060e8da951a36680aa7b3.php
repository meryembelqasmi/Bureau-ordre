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
            <a href="<?php echo e(route('entrant')); ?>" class="dashboard-nav-item active"><i class="fas fa-envelope-open"></i> Entrant </a>
            <a href="<?php echo e(route('Sortant')); ?>" class="dashboard-nav-item"><i class="fas fa-envelope"></i> Sortant </a>
            <div class="dashboard-nav-dropdown">
            <a href="<?php echo e(route('utilisateur')); ?>" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-users"></i> Utilisateurs </a>
                <div class="dashboard-nav-dropdown-menu">
                <a href="<?php echo e(route('utilisateur')); ?>" class="dashboard-nav-dropdown-item">All</a>
                </div>
            </div>
            <div class="dashboard-nav-dropdown">
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-bell"></i> Notifications </a>
            </div>
            <a href="<?php echo e(route('corbeille')); ?>" class="dashboard-nav-item"><i class="fas fa-trash-alt"></i> Corbeille </a>
            <a href="<?php echo e(route('courrier-employe')); ?>" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Paramétre </a>
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
                    <h1>Bienvenue Hoda </h1>
                    </div>
                    <div class="card-body">
                        <p>Le type de ce compte est: Employe</p>
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
                        <a href="#" class="left-link"> <i class="fas fa-envelope"></i> Courrier a traité</a>
                       
                        <div class="button-group">
                            <button type="button" class="btn btn-primary" id="btnAjouter">
                                <i class="fas fa-plus"></i> Import
                            </button>
                              
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
                                    <th> Date reçu</th>
                                    <th>Analyse de l'affaire</th>
                                    <th>Désignation du destinataire</th>
                                    <th>Destinateur</th>
                                    
                                    <th> service</th>
                                    <th> type courrier</th>
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

</body>
</html>
<?php /**PATH C:\Users\Asus\Music\projetstage\resources\views/courrier-employe.blade.php ENDPATH**/ ?>