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
<div class='dashboard'>
    <div class="dashboard-nav">
        <header>
            <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
            <a href="#" class="brand-logo"><i class="fas fa-inbox"></i> <span>Bureau d'ordre</span></a>
        </header>
        <nav class="dashboard-nav-list">
            <a href="#" class="dashboard-nav-item"><i class="fas fa-home"></i> Home </a>
            <a href="#" class="dashboard-nav-item active"><i class="fas fa-envelope-open"></i> Entrant </a>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-envelope"></i> Sortant </a>
           
            <div class='dashboard-nav-dropdown'>
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-users"></i> Utilisateurs </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="#" class="dashboard-nav-dropdown-item">All</a>
                  
                </div>
            </div>
            <div class='dashboard-nav-dropdown'>
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-bell"></i> Notifications </a>
              
            </div>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-trash-alt"></i> Corbeille </a>

            <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Paramétre </a>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
            <div class="nav-item-divider"></div>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Déconnexion </a>
        </nav>
    </div>
    
    <div class='dashboard-app'>
    <header class="dashboard-toolbar">
    <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
    <div class="title-and-logo">
       
    </div>
</header>


</header>       
        <div class='dashboard-content'>
            
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <h1>Bienvenue layla alkhraz</h1>
                    </div>
                    <div class='card-body'>
                        <p>le type de ce compte est: Administrator</p>
                        <select name="" id="">
                <option value=""> 2024</option>
             </select>
                    </div>
                </div>
                
          <div class='carde'>
               <div class='carde-header'>
            <a href="#" class="left-link"> <i class="fas fa-envelope"></i>Courrier sortant</a>
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
        <!-- Your form goes here -->
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
</select>
<select class="form-control" id="employe" name="employe">
    <option value="">Sélectionner un employé</option>
    <option value="hamide">Hamide</option>
    <option value="meryem">Meryem</option>
    <option value="hoda">Hoda</option>
</select>


            </div>
            <!-- Other form fields go here -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" id="btnValider">Valider</button>
      </div>
    </div>
  </div>
</div>

<button id="btnImprimer"><i class="fas fa-print"></i> Imprimer</button>

            </div>
        </div>
       
    </div>
</div>
<div class='rechercher'>
               <div class='rechercher-header'>
             <input type="text" placeholder=" chercher par sujet ou numero...">
             <button> <i class=" fas fa-search"></i>Rechercher</button>
             
        </div>
    </div>
    

</div>

      <div class='table'>
               <div class='table-header'>
          
               <table border="1"id="tableau">
                <thead>
                    <tr>
                       <th>Réference</th>
                        <th>Date de départ</th>
                        <th> Analyse de l'affaire</th>
                        <th>Designation du destinataire </th>
                        <th> Destinateure</th>
                        <th> Service</th>
                        <th> Employe</th>
                        <th> Action</th>
                       
    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>26/12/123</td>
                    <td>c'est l'autorisation de bulid de voiture</td>
                    <td>coopreation scolaire</td>
                    <td> Bureau d'ordre</td>
                    <td> iformatique</td>
                    <td> Meryem</td>
                    <td>
            <button class="btn-delete" title="Supprimer"><i class="fas fa-trash-alt"></i></button>
            <button class="btn-edit" title="Modifier"><i class="fas fa-edit"></i></button>
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
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    const mobileScreen = window.matchMedia("(max-width: 990px )");
    $(document).ready(function () {
        console.log("Document is ready."); // Debugging statement
        $(".dashboard-nav-dropdown-toggle").click(function () {
            console.log("Dropdown toggle clicked."); // Debugging statement
            $(this).closest(".dashboard-nav-dropdown")
                .toggleClass("show")
                .find(".dashboard-nav-dropdown")
                .removeClass("show");
            $(this).parent()
                .siblings()
                .removeClass("show");
        });
        $(".menu-toggle").click(function () {
            console.log("Menu toggle clicked."); // Debugging statement
            if (mobileScreen.matches) {
                $(".dashboard-nav").toggleClass("mobile-show");
            } else {
                $(".dashboard").toggleClass("dashboard-compact");
            }
        });
    });

    $(document).ready(function () {
        // Existing code
        
         // Click event for the Ajouter button to show the modal
         $("#btnAjouter").click(function () {
            $("#ajouterModal").modal("show");
        });

        
        // Click event for the Valider button inside the modal
        $("#btnValider").click(function() {
            // Here you can handle form validation or submission
            // For now, just close the modal
            $("#ajouterModal").modal("hide");
        });

        
        // Print the table only
        $("#btnImprimer").click(function() {
            var printContents = document.getElementById('tableau').outerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = "<html><head><title>Print</title></head><body>" + printContents + "</body></html>";
            window.print();
            document.body.innerHTML = originalContents;
        });
    });
    function getTableDataFromLocalStorage() {
            var tableData = localStorage.getItem("tableData");
            if (tableData) {
                $("#tableau tbody").html(tableData);
            }
        }

        $(document).ready(function () {
            // Click event for the Valider button inside the modal
            $("#btnValider").click(function () {
                // Récupérer les valeurs des champs du formulaire
                var reference = $("#reference").val();
                var dateDepart = $("#dateDepart").val();
                var analyseAffaire = $("#analyseAffaire").val();
                var designationDestinataire = $("#designationDestinataire").val();
                var destinateur = $("#destinateur").val();
                var service = $("#service").val();
                var employe = $("#employe").val();

                // Vérifier si tous les champs sont remplis
                if (reference && dateDepart && analyseAffaire && designationDestinataire && destinateur && service && employe) {
                    // Créer une nouvelle ligne dans le tableau avec ces valeurs
                    var newRow = "<tr>" +
                        "<td>" + reference + "</td>" +
                        "<td>" + dateDepart + "</td>" +
                        "<td>" + analyseAffaire + "</td>" +
                        "<td>" + designationDestinataire + "</td>" +
                        "<td>" + destinateur + "</td>" +
                        "<td>" + service + "</td>" +
                        "<td>" + employe + "</td>" +
                        "<td>" +
                        "<button class='btn-delete' title='Supprimer'><i class='fas fa-trash-alt'></i></button>" +
                        "<button class='btn-edit' title='Modifier'><i class='fas fa-edit'></i></button>" +
                        "</td>" +
                        "</tr>";

                    // Ajouter la nouvelle ligne au tableau
                    $("#tableau tbody").append(newRow);

                    // Stocker les données du tableau dans le localStorage
                    localStorage.setItem("tableData", $("#tableau tbody").html());

                    // Cacher le modal
                    $("#ajouterModal").modal("hide");

                    // Réinitialiser les valeurs du formulaire
                    $("#ajouterForm")[0].reset();

                    // Afficher un message de validation
                    $("#validationMessage").text("Validation réussie.").css("color", "green").fadeIn();
                    setTimeout(function () {
                        $("#validationMessage").fadeOut();
                    }, 3000);
                } else {
                    // Afficher une alerte d'erreur
                    
                    alert("Veuillez remplir tout les champs");
                }
            });

            // Click event for the Annuler button inside the modal
            $("#ajouterModal").on("hidden.bs.modal", function () {
                // Réinitialiser les valeurs du formulaire
                $("#ajouterForm")[0].reset();
            });

            // Gérer la suppression d'une ligne
            $(document).on("click", ".btn-delete", function () {
                $(this).closest("tr").remove();
                // Mettre à jour les données du tableau dans le localStorage après la suppression
                localStorage.setItem("tableData", $("#tableau tbody").html());
            });

            // Appel de la fonction pour récupérer les données du tableau lors du chargement de la page
            getTableDataFromLocalStorage();
        });
    </script>
</body>
</html>
    
    
</script>
</body>
</html><?php /**PATH C:\Users\Asus\Music\projetstage\resources\views/agent.blade.php ENDPATH**/ ?>