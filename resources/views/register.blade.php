<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="col-md-6 mx-auto form-container">
        <h2>Inscription</h2>
        <form method ="POST" action ="{{route('register')}}">
            @csrf
            <div class="mb-3">
                <label for="registerFirstName" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="registerFirstName" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="registerLastName" class="form-label">Nom</label>
                <input type="text" class="form-control" id="registerLastName" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="registerUsername" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="registerUsername" name="username" required>
            </div>
            <div class="mb-3">
                <label for="registerPassword" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="registerPassword" name="password" required>
            </div>
            <button type="submit" class="btn btn-success">S'inscrire</button>
            <p class="mt-3">Déjà inscrit? <a href="/login">Connectez-vous ici</a>.</p>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
