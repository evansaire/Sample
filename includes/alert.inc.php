<?php
 
  if(isset($_SESSION['alertone'])){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Hey There!</strong> Your passwords do no match.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';   
  }
  if(isset($_SESSION['alerttwo'])){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Hey There!</strong> Your password must contain letters and at least a number.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';   
  }
  if(isset($_SESSION['alertthree'])){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Hey There! </strong>You have an invalid character in name.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';   
  }
  if(isset($_SESSION['alertfour'])){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Hey There! </strong>This Email address has been used.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';   
  }
  if(isset($_SESSION['alertfive']) || isset($_SESSION['alertsix']) || isset($_SESSION['alertseven']) ){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Hey There! </strong> This Email address does not exist.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';   
  }

  if(isset($_SESSION['alerteigth'])){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Hey There! </strong>Sign In First.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';   
  }