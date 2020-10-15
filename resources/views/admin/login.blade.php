<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="asset/css/style.css" rel="stylesheet" type="text/css">
<title>Login</title>
</head>
<meta name="csrf-token" content="{{csrf_token()}}">
<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
           
      <div class="card card-signin my-5">
          <div class="card-body">
                <img src="{{('../storage/gambar/background/avatar.png')}}" class="rounded mx-auto d-block"" width="200"/>    
            <h5 class="card-title text-center">Silahkan Masuk Sebagai Admin</h5>


            <form class="form-signin" action="" method="post" >
             @csrf

                  <div class="form-label-group">
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Masukkan Email Admin" required autofocus>
                  </div>

                  <div class="form-label-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                  </div>

                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                  </div>
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Masuk</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</body>
</html>