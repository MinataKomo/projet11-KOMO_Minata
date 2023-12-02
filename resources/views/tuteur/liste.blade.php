<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>projet 10</title>
  </head>
  <body>
    <div class="container text-center">
      <div class="row">
        <div class="col s12">
            <h1>Projet 10</h1>
           
            <hr>
            <a href="/add" class="btn btn-primary">Ajouter un tuteur</a>
           
<hr>
          @if(session('status'))
                <div class="alert alert-succes">
                    {{session('status')}}
                </div>

           @endif
           
           
           
        <table class="table">
            <thead>
              <tr>
                <th>id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>profession</th>
                <th>contact</th>
                <th>etudiant</th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody>

            @php
                $ide = 1;
            @endphp
              @foreach($tuteurs as $tuteur)
                  <tr>
                    <td>{{ $ide }}</td>
                    <td>{{ $tuteur->name }}</td>
                    <td>{{ $tuteur->last }}</td>
                    <td>{{ $tuteur->profession }}</td>
                    <td>{{ $tuteur->contact}}</td>
                
          <td>
          @foreach($tuteur->etudiant as $etudiant)
          {{ $etudiant->nom }} {{ $etudiant->prenom }} <br>
          @endforeach
          </td>
                    
                    <td>
                    <a href="/editer-tuteur/{{ $tuteur->id }}" class="btn btn-info">Update</a>
                    <a href="/delete-tuteur/{{ $tuteur->id }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>

                  @php
                $ide += 1;
            @endphp
            
            @endforeach
            

            </tbody>
        </table>
        <a href="/etudiant" class="btn btn-secondary">liste etudiant</a>
   
</div>
</div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>