<?php include 'templates/site.php';
  $headclass = new StaticHtml();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      echo $headclass->main_html_head();
    ?>
  </head>
  <body>
    <?php
      echo $headclass->main_navbar();
    ?>
    <div class="full_image">
      <div class="home_intro text-center">
        <h1>Web Developer</h1>
        <h2>Joe Hernandez</h2>
        <p>Kansas City Metro, KS</p>
      </div>
    </div>
    <div class="container-fluid profile_container" id="bio">
      <div class="page-header">
        <h2>Introduction</h2>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
          <img src="images/joeProfile.png" class="img-thumbnail center-block"
          alt="Joe Hernandez Profile Picture">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
          <div class="well well-lg">
            <h4>Joe Hernandez - Web Developer</h4>
            <p><strong>Hometown:</strong> Kansas City Metro, KS</p>
            <p><strong>Familiar Environments:</strong> Linux, Windows, and OSX.</p>
            <p><strong>Skills:</strong> Javascript, Python, HTML, CSS, Git, jQuery, pHp, SQL, npm, Babeljs, and CoffeeScript.</p>
            <p><strong>Summary:</strong> 6 years of professional web development experience.  This includes self management of projects and working within a team.  Experience with managing time, executing projects according to user requirements, and exceeding expectations.</p>
            <p><strong>Self Development:</strong> Currently working on improving my JavaScript and Python skills by developing side projects.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="dev_profile" style="background-color: #fff; padding-top: 10px;">
      <div class="page-header">
        <h2>Profile and Upcoming Projects: Coming Soon.</h2>
      </div>
    </div>
    <?php
      echo $headclass->main_footer();
    ?>
  </body>
</html>
