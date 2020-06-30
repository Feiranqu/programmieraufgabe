<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Dreamcars</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home<span
                                    class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                              <a class="nav-link px-4" data-toggle="modal" data-target="#login">
                                    Edit</a>
                        </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                  <?php if(!isset($SESSION["username"])){ ?>
                  <li class="nav-item">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
                              login
                        </button>
                  </li>
                  
                  <?php } else { ?>
                  <li class="nav-item text-info p-2">Hallo<?php echo $_SESSION["username"] ?> </li>

                  <li class="nav-item">
                        <a class="nav-link"
                              href="http://localhost/CodersBayFeiRan/wiki/auth/picture.php">backend</a>
                  </li>

                  <li class="nav-item">

                        <a class="nav-link"
                              href="http://localhost/CodersBayFeiRan/wiki/auth/index.php">Logout</a>
                  </li>
                  <?php } ?>
            </ul>
            <form class="form-inline my-lg-0 search-box">
                  <input class="form-control mr-sm-2" type="text" autocomplete="off" placeholder="Search"
                        aria-label="Search">
                  <div class="result bg-white col-12 fixed-top mt-5 card"></div>
            </form>
      </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Dreamcars</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home<span
                                    class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                              <a class="nav-link px-4" data-toggle="modal1" data-target="#registrieren">
                                    Edit</a>
                        </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                  <?php if(!isset($SESSION["username"])){ ?>
                  <li class="nav-item">
                        <button type="button" class="btn btn-primary" data-toggle="modal1" data-target="#registrieren">
                              login
                        </button>
                  </li>
                  
                  <?php } else { ?>
                  <li class="nav-item text-info p-2">Hallo<?php echo $_SESSION["username"] ?> </li>

                  <li class="nav-item">
                        <a class="nav-link"
                              href="http://localhost/CodersBayFeiRan/wiki/auth/secret.php">backend</a>
                  </li>

                  <li class="nav-item">

                        <a class="nav-link"
                              href="http://localhost/CodersBayFeiRan/wiki/auth/logout.php">Logout</a>
                  </li>
                  <?php } ?>
            </ul>
            <form class="form-inline my-lg-0 search-box">
                  <input class="form-control mr-sm-2" type="text" autocomplete="off" placeholder="Search"
                        aria-label="Search">
                  <div class="result bg-white col-12 fixed-top mt-5 card"></div>
            </form>
      </div>
</nav>

<form class="form-inline my-2 my-lg-0 search-box">
      <input class="form-control mr-sm-2" type="text" autocomplete="off" placeholder="Search" aria-label="Search">
      <div class="result bg-white col-12 fixed-top mt-5 card"></div>
</form>
