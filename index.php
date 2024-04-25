<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préinscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2>Formulaire de préinscription à la futur plateforme GlowAp</h2>
    <form method="post" id="form-preinscription">
        <div class="d-none alert"></div>
        <label for="nom">Nom* :</label>
        <input type="text" class="form-control" id="nom" name="nom">
        
        <label for="prenom">Prénom* :</label>
        <input type="text" class="form-control"  id="prenom" name="prenom" >
        
        <label for="email">Email* :</label>
        <input type="email" class="form-control" id="email" name="email" >
        
        <label for="telephone">Téléphone :</label>
        <input type="tel" class="form-control" id="telephone" name="telephone">
        
        <label>Type* :</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="client" name="type" value="client"  checked>
            <label class="form-check-label" for="client">Client</label>
        </div>

        <div class="form-check">
            <input  class="form-check-input" type="radio" id="professionnel" name="type" value="professionnel">
            <label  class="form-check-label" for="professionnel">Professionnel</label>
        </div>
        
        
        
        <button type="submit" class="btn btn-primary"> Soumettre </button>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/preinscription.js"></script>
</body>
</html>
