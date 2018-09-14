<?php
    require('format.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php
    echo present_head();
?>
<body>
<?php
    echo present_header();
?>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h2 class="header center black-text">Herman Miller Capstone Project</h2>
      <div class="row center">
        <h5 class="header col s12 light">Material Normalization Using Computer Vision</h5>
      </div>
      <div class="row center">
          <form action="">
              <input type="file" name="pic" accept="image/*">
              <input type="submit">
          </form>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">
        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">Machine Learning</h5>

                    <p class="light">Tensorflow</p>
                    <p class="light">Keras</p>
                    <p class="light">AWS SageMaker</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                    <h5 class="center">Amazon Web Services</h5>

                    <p class="light">EC2 Instances</p>
                    <p class="light">S3 Buckets</p>
                    <p class="light">Lambda Function</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                    <h5 class="center">GraphQL</h5>

                    <p class="light">Query language for APIs</p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
  </div>

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


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
