{{-- <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Kemajuan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"></h1>
                                    </div>


                                    <form class="user" action="/create-kemajuan" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="name" class="form-control"
                                                id="exampleInputEmail" name="status" aria-describedby="emailHelp"
                                                placeholder="Status Kemajuan">
                                        </div>


                                        <button type = "submit" class="btn btn-primary btn-user btn-block">
                                            Add
                                        </button> 
                                        <hr>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>


 --}}


 @extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Data Kemajuan</h4>
            <form class="user" action="/create-kemajuan" method="post">
                @csrf

                <div class="form-group">
                    <select class="form-control" name="id_buku" required>
                        <option value="" disabled selected hidden>Judul Buku</option>
                        <option value="{{ $santri->id }}"> {{ $santri->name }}</option>                 
                    </select>
                  </div>


                <div class="form-group">
                    <input type="name" class="form-control"
                        id="exampleInputEmail" name="status" aria-describedby="emailHelp"
                        placeholder="Status Kemajuan">
                </div>

                <div class="form-group">
                        <input type="text" name="tanggal" class="form-control" 
                        placeholder="Tanggal lahir" onfocus="(this.type='date')" required />
                      
             </div>

              <button type = "submit" class="btn btn-primary">Tambah</button> 
              {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>


      @endsection







