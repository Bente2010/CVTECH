@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CVTECH</title>
  </head>
  <body>

       <div class="container">
           <div class="row">
              <div class="col-md-6 offset-md-3">
                  <div class="card">
                     <div class="card-header">
                        <strong>Importez votre CV pour créer un profil</strong>
                     </div>
                     <div class="card-body">

                        <form method="POST" action="{{ route('form.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                               <label for="name">Nom</label>
                               <input type="text" name="name" class="form-control" />
                            </div>

                            <div class="form-group">
                               <label for="name">Prenom</label>
                               <input type="text" name="name" class="form-control" />
                            </div>

                            <div class="form-group">
                               <label for="name">Filliére</label>
                               <input type="text" name="name" class="form-control" />
                            </div>

                            <div class="form-group">
                              <label for="file">Télécharger votre CV</label>
                              <input type="file" class="form-control-file" onchange="previewFile(this)" id="exampleFormControlFile1" />
                            </div>
                            <input type="submit" class="btn btn-primary float-right" value="Envoyer" />
                        </form>
                    </div>
                  </div>
              </div>
           </div>
       </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];
            if(file)
            {
              var reader = new FileReader();
              reader.onload = function(){
                $("#exampleFormControlFile1").attr('src','/pdf/yourpdf.pdf?' reader.result);
              }
              reader.readAsDataURL(file);
            }
        }
    </script>
  </body>
  </html>
@endsection
