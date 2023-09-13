


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<form class="row g-3" action="action.php" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="inputPassword4"name="prenom">
  </div>
  <div class="col-12">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" >
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Mot de passe </label>
    <input type="password" class="form-control" id="inputAddress2" placeholder="password"name="password">
  </div>

  </div>
 
  <div class="col-12">
    <button name="inscription" type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

</body>
</html>