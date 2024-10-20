<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
        <h2>Connexion</h2>
        <form method ="POST" action ="{{route ('login')}}">
            @csrf
            <div class="mb-3">
                <label for="loginUsername" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="loginUsername" name="username" required>
            </div>
            <div class="mb-3">
                <label for="loginPassword" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="loginPassword" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
            <p class="mt-3">Pas encore inscrit? <a href="/register">Inscrivez-vous ici</a>.</p>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
