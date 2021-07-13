

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <div id="login1" class="container-fluid shadow-lg p-3 mb-5 bg-white rounded">

    <h1 class="display-6 text-center">Gvidia</h1>

    <form method="POST">


      <div class="mb-3" id="username">
        <label for="exampleInputEmail1" class="form-label">User Name</label>
        <input name="user" type="text" class="form-control" id="exampleInputUsername1">
      </div>


      <div class="mb-3" id="password">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
      </div>


      <button type="submit" class="btn btn-primary " name="login">Sign In</button>

      <button id="regi" type="button" class="btn btn-primary">Register</button>



    </form>

  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>