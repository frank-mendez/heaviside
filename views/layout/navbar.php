<?php 
  $uri = $_SERVER['REQUEST_URI'];
  $last = substr($uri, strrpos($uri, '/') + 1);
?>

<nav id="navbar" class="navbar 
  <?php 
    if($last == 'index' || $last == '') {
     echo 'navbar-default'; 
    } else {
      echo 'navbar-alt';
    } 
  ?> navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index">
    <img id="logo" 
    <?php 
      if( $last == 'index' || $last == '' ) {
        echo "src='img/logo-transparent.png'";
      } else {
        echo "src='img/logo-black.png'";
      }
    ?> width="50%" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="seo"><i class="fa fa-line-chart" aria-hidden="true"></i> 
        SEO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ppc"><i class="fa fa-bullseye" aria-hidden="true"></i> PPC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-desktop" aria-hidden="true"></i> Web Design</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="request"><i class="fa fa-file-text" aria-hidden="true"></i> Request A Quote</a>
      </li>
    </ul>
  </div>
 </div>
</nav>