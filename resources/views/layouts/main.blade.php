
<!doctype html>
<html lang="en">
     <head>
      <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

      <title>TPQ AL-MUBAROQ | {{ $title }} </title>
        </head>
         <body>
             <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6610f2">
                 <div class="container">
                 <a class="navbar-brand" href="/">TPQ AL-MUBAROQ</a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
         
     </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                 <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home' ? 'active' : '' ) }}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link {{ ($title === 'About' ? 'active' : '' ) }}" href="/about">About Us</a>
                         </li>
                         <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <li><a class="dropdown-item" href="/signup">Sign Up</a></li>
                         <li><a class="dropdown-item" href="/login">Log In</a></li>
                         <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                         </ul>
                         </li>

                     </li>
                 </ul>
             </div>
        </div>
    </nav>




    <div class="container mt-4">
     @yield('container')
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

