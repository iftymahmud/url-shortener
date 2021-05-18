<?php
//include auth_session.php file on all user panel pages
include("../controller/auth_session.php");
require '../model/process2.php'
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>URL Shortener</title>
    <link rel="stylesheet" href="design.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">URL SHORTENR <i class="fas fa-draw-polygon"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="registration.php">Registration</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link text-danger" href="../controller/logout.php">Logout</a>
        
      </div>
    </div>
  </div>
</nav>


<div class="container">
<h1 class="py-3">Tiny links, great milestones</h1>


<div class="row text-left">
  <div class="col-md-4">
  <form method="POST">
  <label for="CusUrlId" class="text-muted">Enter your URL</label>
  <input name="cusUrlInput" type="text" class="form-control" id="cusUrlId" placeholder="e.g. https://www.youtube.com/">

    <div class="pt-2 pb-2">
        <label for="cusId" class="text-muted">Enter your custom text after <i class="far fa-arrow-alt-circle-right"></i> <strong>url.ifty.me/</strong></label>
    <input name="cusInput" type="text" class="form-control" id="cusId">
        </div>

    <button type="submit" name="submit" class="btn btn-dark btn-lg">Shorten</button>

    </div>

    <form method="POST" >

    </div>

    <br>

    <?php echo "<h4>$shortenedUrl<h4>";
    ?> 
  </form>
</body>
</html>