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
    <div class="container">
      <div class="row">
        <div class="col s12">
            <h1>AJOUTER UN TUTEUR </h1>
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
          
                <form action="/add/traitement" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="Name" name="name">
                          
                        </div>

                        <div class="mb-3">
                            <label for="Prenom" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="Last" name="last">
                        </div>

                        <div class="mb-3">
                            <label for="Classe" class="form-label">contact</label>
                            <input type="text" class="form-control" id="Contact" name="contact">
                        </div>
                        <div class="mb-3">
                            <label for="Classe" class="form-label">profession</label>
                            <input type="text" class="form-control" id="Profession" name="profession">
                        </div>
                       <br><br>
                        <button type="submit" class="btn btn-primary">Ajouter un tuteur</button>
                        <br><br>
                        <a href="/tuteur" class="btn btn-danger"> Revenir a la liste dse tuteur</a>
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