<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>projet 10 </title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
            <h1>modifier UN ETUDIANT </h1>
            <hr>
           @if(session('status'))
           <div class="alert alert-succes">
              {{session('status')}}
           </div>

           @endif

         
              <ul>
                      @foreach ($errors->all() as $error)
                          <li class="alert alert-danger">{{ $error }}</li>
                      @endforeach
              </ul>
          
                <form action="/update/traitement" method="POST">
                    @csrf
                    <input type="text" name="id" style="display: none"; value="{{ $etudiants->id }}">
                        <div class="mb-3">
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="Nom" name="nom" value="{{ $etudiants->nom }}">
                          
                        </div>

                        <div class="mb-3">
                            <label for="Prenom" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $etudiants->prenom }}">
                        </div>

                        <div class="mb-3">
                            <label for="Classe" class="form-label">Classe</label>
                            <input type="text" class="form-control" id="Classe" name="classe" value="{{ $etudiants->classe }}">
                        </div>

                       
                        
                        <div class="mb-3">
                            <label for="Classe" class="form-label">im</label>
                            <input type="file" class="form-control" id="Classe"  name="image" value="{{ $etudiants->image }}" >
                        </div>
                        
                        <div class="mb-3">
                        <label for="Classe" class="form-label">tuteur</label>
                           <select name="tuteur" id="tuteur" class="form-select">
                           @foreach($tuteurs as $tuteur )
                            <option value="{{$tuteur->id }}">{{ $tuteur->name }} {{ $tuteur->last }} </option>
                            @endforeach
                           </select>
                        </div>

                        <div class="mb-3">
                        <label for="Classe" class="form-label">ville</label>
                           <select name="ville" id="ville" class="form-select">
                           @foreach($villes as $ville )
                            <option value="{{$ville->id }} " {{ $etudiants->ville_id == $ville->id ? 'selected':''}} >{{ $ville->nom }}</option>
                            @endforeach
                           </select>
                        </div>
                        

                        <div class="mb-3">
                        <label for="Classe" class="form-label">nationalite</label>
                           <select name="nationalite" id="ville" class="form-select">
                           @foreach($nationalites as $nationalite )
                            <option value="{{$nationalite->id }}" {{ $etudiants->nationalite_id == $nationalite->id ? 'selected':''}}>{{ $nationalite->nom }}</option>
                            @endforeach
                           </select>
                        </div>

                        <div class="mb-3">
                        <label for="Classe" class="form-label">groupe_sanguin</label>
                           <select name="groupe_sanguin" id="ville" class="form-select">
                           @foreach($groupe_sanguins as $groupe_sanguin )
                            <option value="{{$groupe_sanguin->id }}" {{ $etudiants->groupe_sanguin_id == $groupe_sanguin->id ? 'selected':''}}>{{ $groupe_sanguin->nom }}</option>
                            @endforeach
                           </select>
                        </div>
                       <br><br>
                        <button type="submit" class="btn btn-primary">Modifier un etudiant</button>
                        <br><br>
                        <a href="/etudiant" class="btn btn-danger"> Revenir a la liste dse etudiant</a>
                        <br>
                </form>
       
</div>
</div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>