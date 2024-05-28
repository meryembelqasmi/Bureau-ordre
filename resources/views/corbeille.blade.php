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
  <style>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .dashboard-toolbar {
            background-color: #fff;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .dashboard-toolbar .menu-toggle {
            color: #111;
            font-size: 24px;
            cursor: pointer;
        }
        .dashboard-toolbar .title-and-logo {
            display: flex;
            align-items: center;
        }
        .dashboard-toolbar .title-and-logo img {
            max-width: 50px;
            margin-right: 15px;
        }
        .dashboard-toolbar .title-and-logo h1 {
            font-size: 24px;
            margin: 0;
            color: #fff;
        }
        .dashboard-content {
            padding: 20px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #fff;
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }
        .card-header img {
            max-width: 100px;
            margin-bottom: 10px;
        }
        .card-body {
            padding: 20px;
            background-color: #fff;
        }
        .card-body p {
            font-size: 16px;
            color: #6c757d;
        }
        .welcome-card {
            text-align: center;
        }
        .welcome-card h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        #vider{
            position: relative;
            left: 80%;
            bottom: 30px
        }
    </style>
  </style>
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
            <div class="card welcome-card">
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
               
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($corbeille as $cr)
                        <tr>
                           
                            <td>{{ $cr->reference }}</td>
                            <td>{{ $cr->nom_entreprise }}</td>
                            <td>{{ $cr->date_recu }}</td>
                            <td>
                                <span class="short-content">{{ Str::limit($cr->analyse, 30) }}</span>
                                <span class="full-content" style="display: none;">{{ $cr->analyse }}</span>
                                <a href="#" class="toggle-content">Voir</a>
                            </td>
                            <td>{{ $cr->code }}</td>
                            <td>{{ $cr->service_concerne }}</td>
                            <td>{{ $cr->type_de_courrier }}</td>
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
      
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                </div>
            </div>
        </div> 
        <a href="{{route('vider')}}" id="vider">
        <button>Vider la corbeille</button>
        </a>
    </div>
   
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dashboard-nav-dropdown-toggle").click(function () {
        $(this).closest(".dashboard-nav-dropdown").toggleClass("show").siblings().removeClass("show");
    });

    $(".menu-toggle").click(function () {
        $(".dashboard").toggleClass("dashboard-compact");
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
