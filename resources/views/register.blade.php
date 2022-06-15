<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card mt-5">
                    <div class="card-header">
                        <strong class="text-center d-block">From <span class="text-primary">Register</span> </strong>
                        <div class="card-body">
                            <form action="/simpanuser" method="POST">
                                @csrf
                                <div class="form-group mt-4">
                                    <label for="">Nama Pengguna</label>
                                    <input type="text" 
                                    class="form-control" name="nama" autofocus required autocomplete="off">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="">Email</label>
                                    <input type="email" 
                                    class="form-control" name="email" required autocomplete="off">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="">Password</label>
                                    <input type="password" 
                                    class="form-control" name="password" required autocomplete="off">
                                </div>
                                <div class="form-group mt-4">
                                    <input type="submit" name="" id="" class="btn btn-primary" value="Sign Up">
                                </div>
                                <div  class="mt-3">
                                    <small>Sudah Punya Akun ? <a href="/">Login</a> Sekarang</small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>