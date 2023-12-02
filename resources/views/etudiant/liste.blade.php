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
            <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a>
            <a href="/tuteur" class="btn btn-secondary">liste tuteur</a>
            <a href="/tag" class="btn btn-secondary">liste tag</a>
           
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
                <th>classe</th>
                <th>photo</th>
                <th>tuteur</th>
                <th>ville</th>
                <th>nationalite</th>
                <th>groupe_sanguin</th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody>

            @php
                $ide = 1;
            @endphp
              @foreach($etudiants as $etudiant)
                  <tr>
                    <td>{{ $ide }}</td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->classe }}</td>
                    <td><img src="/image/{{ $etudiant->image }}" alt="" style="height: 30px; width:30px; border-radius:50%"></td>



                      <td>{{ $etudiant->tuteur->name}}</td>



                 <td>{{ $etudiant->ville->nom}}</td>
                 <td>{{ $etudiant->nationalite->nom}}</td>
                 <td>{{ $etudiant->groupe_sanguin->nom}}</td>

                    <td>
                      <a href="/update-etudiant/{{ $etudiant->id }}" class="btn btn-info">Update</a>
                      <a href="/delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>

                  @php
                $ide += 1;
            @endphp
            

            @endforeach
               

           
            </tbody>
        </table>

        
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