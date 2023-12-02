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
          
                <form action="/edit/traitement" method="POST">
                    @csrf
                    <input type="text" name="id" style="display: none"; value="{{ $posts->id }}">
                        <div class="mb-3">
                            <label for="Nom" class="form-label">post</label>
                            <input type="text" class="form-control" id="Name" name="name" value="{{ $posts->name }}">
                          
                        </div>

                        <div class="mb-3">
                            <label for="Prenom" class="form-label">Content</label>
                            <input type="text" class="form-control" id="Content" name="content" value="{{ $posts->content }}">
                        </div>

                        
                        <div class="mb-3">
                        <label for="Classe" class="form-label">tag</label>
                           <select name="tag" id="tag" class="form-select">
                           @foreach($tags as $tag )
                            <option value="{{$tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                           </select>
                        </div>

                       

                        
                       <br><br>
                        <button type="submit" class="btn btn-primary">Modifier un post</button>
                        <br><br>
                        <a href="/post" class="btn btn-danger"> Revenir a la liste dse post</a>
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