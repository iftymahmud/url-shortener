<!-- sudo launchctl unload -w /System/Library/LaunchDaemons/org.apache.httpd.plist -->


<?php 
    require '../Controller/redirect.php';
    require '../Model/process.php';
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="design.css"/>
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
        
      </div>
    </div>
  </div>
</nav>



<div class="container">




<h1 class="py-3">Tiny links, great milestones</h1>


<div class="row text-left">
  <div class="col-md-4">
  <form method="POST">
  <label for="urlId" class="text-muted" >Enter your URL here</label>
    <div class="row">
      <div class="col-md-10 pt-1 pb-1">
    <input name="urlInput" type="text" class="form-control" id="urlId" placeholder="e.g. https://www.youtube.com/">
    </div>
    <div class="col-md-2 pt-1 pb-1">
    <button type="submit" name="submit" class="btn btn-dark">Shorten</button>
    </div>
    </div>
    


    <div class="pt-4 pb-4">

    <?php echo "<h5>$shortenedUrl<h5>";
    ?> 
  </div>

  </form>
  </div>
  <div class="col-md-8">
    
  </div>
</div>
  

<h6 class="signupText">Sign up and create custom URL <i class="fas fa-link"></i> <a href="./registration.php">Registration</a></h6>

</div>





  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>