<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/index.css">
  </head>
  <body class="purple">
    <div class="card vertical text-center" style="width: rem;">
      <div class="card-body">
        <div class="mb-3">
          <form action="./process/process_login.php" method="POST">
            <img src="./asset/logo-full.png" style="width: 300px; margin: 30px;">
            <div class="form-floating mb-3">
              <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
             </div>
             <button class="btn btn-warning" type="submit" style="margin-top: 30px;">Login</button>
          </form>
         </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>