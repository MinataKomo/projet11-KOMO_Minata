<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="mb-3">
                            <label for="Classe" class="form-label">references du tuteur</label><br>
                            @foreach($etudiants->comments as $comment)
                            <input type="text" class="" id="Classe" name="nom" value="{{ $comment->nom}}">
                            <input type="text" name="prenom" value="{{ $comment->prenom}}"> 
                            <input type="text" name="nom" value="{{ $comment->nom}}">
                            @endforeach
                        </div>
</body>
</html>