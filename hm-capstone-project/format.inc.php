<?php
/**
 * Created by PhpStorm.
 * User: Ted
 * Date: 9/13/2018
 * Time: 20:35
 */

/**
 * Create the HTML for the head block
 * @return string HTML for the head block
 */
function present_head(){
    $html = <<<HTML
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Herman Miller Capstone Project</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
HTML;

    return $html;
}

/**
 * Create the HTML for the header block
 * @return string HTML for the header block
 */
function present_header() {
    $html = <<<HTML
  <nav class="black lighten-1" role="navigation">
    <div class="nav-wrapper container"><img id="logo-container" src="logo/hm-logo-caption.svg" class="brand-logo"/>
      <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="executivesummary.php">Executive Summary</a></li>
          <li><a href="functionalspecifications.php">Functional Specifications</a></li>
          <li><a href="designspecifications.php">Design Specifications</a></li>
          <li><a href="technicalspecifications.php">Technical Specifications</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
          <li><a href="index.php">Home</a></li>
          <li><a href="executivesummary.php">Executive Summary</a></li>
          <li><a href="functionalspecifications.php">Functional Specifications</a></li>
          <li><a href="designspecifications.php">Design Specifications</a></li>
          <li><a href="technicalspecifications.php">Technical Specifications</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger">
          <i class="material-icons">menu</i>
      </a>
    </div>
  </nav>
HTML;
    return $html;
}

/**
 * Create the HTML for the footer block
 * @return string HTML for the footer block
 */
function present_footer() {
    $html = <<<HTML
<footer class="page-footer red">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Herman Miller Capstone Team</h5>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">The Team:</h5>
          <ul>
            <li>Ritwik Biswas</li>
            <li>Ted Stacy</li>
            <li>Josh Bhattarai</li>
            <li>Joe Smith</li>
            <li>David Xuan</li>
          </ul>
        </div>
        <div class="col l3 s12">
            <h5 class="white-text">Herman Miller Contacts:</h5>
            <ul>
                <li>Tom Holcomb</li>
                <li>Andrea Haggerty</li>
            </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Template provided by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
HTML;
    return $html;
}