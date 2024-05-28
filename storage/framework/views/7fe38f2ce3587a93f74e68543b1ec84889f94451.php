<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .table{
            width: 80%;
            position: absolute;
            top: 10px;
            left: 300px
        }
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
    </div>
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
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               
                <td><?php echo e($notification->reference); ?></td>
                <td><?php echo e($notification->nom_entreprise); ?></td>
                <td><?php echo e($notification->date_recu); ?></td>
                <td>
                    <span class="short-content"><?php echo e(Str::limit($notification->analyse, 30)); ?></span>
                    <span class="full-content" style="display: none;"><?php echo e($notification->analyse); ?></span>
                    <a href="#" class="toggle-content">Voir</a>
                </td>
                <td><?php echo e($notification->code); ?></td>
                <td><?php echo e($notification->service_concerne); ?></td>
                <td><?php echo e($notification->type_de_courrier); ?></td>
               
                <td> 
                    <a href="<?php echo e(route('ajouter_courrier_entrant_store',[
                        'reference'=>$notification->reference,
                        'date_recu'=>$notification->date_recu,
                        'analyse'=>$notification->analyse,
                        'nom_entreprise'=>$notification->nom_entreprise,
                        'code'=>$notification->code,
                        'service_concerne'=>$notification->service_concerne,
                        'type_de_courrier'=>$notification->type_de_courrier,
                        'id_notification'=>$notification->id,
                    ])); ?>"><button class="btn btn-primary">Ajouter</button>
                    </a>
                </td>
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
</body>
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
</html><?php /**PATH C:\Users\Asus\Music\projetstage\resources\views/notifications.blade.php ENDPATH**/ ?>