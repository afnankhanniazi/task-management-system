
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Task Management System </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lstye.css">
</head>
<body class="login-body bg-light" style="min-height:100vh;">

<div class="d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <form  method="POST" action="app/login.php" class="shadow p-4 bg-white rounded" style="min-width:350px; width:100%; max-width:450px;">    
    <h3 class="display-4">LOGIN</h3>
    <?php if (isset($_GET['error'])) {
      ?><div class="alert alert-danger" role="alert">
  <?php echo stripcslashes( $_GET['error']) ?>
</div>
 <?php  } ?>
 <?php if (isset($_GET['success'])) {
      ?><div class="alert alert-success" role="alert">
  <?php echo stripcslashes( $_GET['success']) ?>
</div>
 <?php  }
        // $pass="207";
        // $pass = password_hash($pass, PASSWORD_DEFAULT);
        // echo $pass;

?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User name</label>
            <input type="text" class="form-control" name="user_name" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bund le.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html> 