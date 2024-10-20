<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Profil Utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header bg-success text-white">
            <h2>Bonjour {{auth()->user()->prenom}}</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">Mes Contacts</h5>
            <div class="mb-3">
                <a href="/ajouter" class="btn btn-primary">Ajouter un Contact</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()->contacts as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nom}}</td>
                        <td>{{$item->prenom}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            <a href="{{route('modifier',$item)}}" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="{{route('supprimer',$item)}}" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
