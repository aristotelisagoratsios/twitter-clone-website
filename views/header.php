<!doctype html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    
    <title>Twitter Clone Website 2022</title>
    
          <!-- Bootstrap CSS -->
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
           <link  rel="stylesheet" type="text/css" href="https://webdevbuilder.tech/12-twitter/styles.php">
           
</head>
  <body class="d-flex flex-column h-100">
  
      <header>
               <!-- Fixed navbar -->  
          <nav class="navbar navbar-expand-md navbar-custom navbar-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="https://webdevbuilder.tech/12-twitter/">
            <img src="views/logo-twitter.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                 <span class="twitter">  Twitter </span>
            </a>
            <button aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                    data-target="#navbarCollapse" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link" href="?page=timeline">Your timeline</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?page=yourtweets">Your tweets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?page=publicprofiles">Public Profiles</a>
                </li>
              </ul>
              <div class="d-flex">
              
              <?php if ($_SESSION['id']) { ?>
              
              <a class="btn btn-outline-primary" href="?function=logout">Logout</a>
                 
              <?php } else { ?>
              
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login/Signup</button>
              
              <?php } ?>
              
              </div>
            </div>
          </div>
        </nav>
      </header>  