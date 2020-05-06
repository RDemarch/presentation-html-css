<?php

include 'header.php';

?>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">Sur ce site vous retouverez toute les infos utiles pour coder une page web.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
    <div class="row">

      <div class="col-sm d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/logo-html.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">HTML</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="text-center"> <a href="html.php" class="btn btn-primary">Go somewhere</a> </div>

          </div>
        </div>
      </div>

      <div class="col-sm d-flex justify-content-around">

        <div class="card" style="width: 18rem;">
          <img src="img/css-logo.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">CSS</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="text-center"> <a href="css.php" class="btn btn-primary">Go somewhere</a> </div>

          </div>
        </div>
      </div>

      <div class="col-sm d-flex justify-content-around">

        <div class="card" style="width: 18rem;">
          <img src="img/logo-terminal.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Command Line</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="text-center"> <a href="commannd.php" class="btn btn-primary">Go somewhere</a> </div>

          </div>
        </div>
      </div>

      <div class="col-sm d-flex justify-content-around">

        <div class="card" style="width: 18rem;">
          <img src="img/github-logo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Git & GitHub</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="text-center"> <a href="git.php" class="btn btn-primary">Go somewhere</a> </div>

          </div>
        </div>
      </div>

    </div>
  </div>

  <?php

  include 'footer.php';
