<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CVTECH</title>
  </head>
  <body>

    <style>
        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: #03224C
          ;
          color: white;
          text-align: center;
        }

        .flotte {
        float:left;
       }
       body {

         margin: 0;
         padding: 0;
       }
       section{
         width: 100%;
         height: : 300vh;
         background: url(bg.jpg) no repeat;
         background-size: cover;
       }
       .gotopbtn{
         position: fixed;
         width: 50px;
         height: 50px;
         background: #27ae60;
         bottom: 40px;
         right: 50px;
       }
    </style>

    <nav class="navbar navbar-expand-lg navbar-ligth" style="background-color: #FFFFFF ;>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">

           <img src="{{ asset('images/téléchargement.png') }}" width="100px" class="mr-5"
           style="border-right: solid 5px #FFF">
           <h4 class="ml-5">CVTECH</h4>

        </a>
      </li>
    </ul>
    @guest

    <div class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline btn-primary" href="{{ route('register')}}">S'inscrire</a>
      <a class="btn btn-ligth" href="{{ route('login')}}">S'identifier</a>

    </div>

    @endguest
          @auth

          <div class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labellebdy="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display-none">
                              @csrf
                          </form>
                     </div>
                </div>
              @endauth
              </div>
          </nav>
             <div class="pt-4 mt-4">
                 @yield('content')
                 @include('layouts.footer')

             </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
