<?php
  $loggedIn = false;
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedIn = true;
  }
  echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/StripeAPI">Proof of Concept App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/StripeAPI/plan.php">Plans</a>
          </li>    
        </ul>
        <li class="nav-item d-flex">
          Welcome!&nbsp<b></b>
        </li>
      </div>
    </div>
  </nav>';
?>