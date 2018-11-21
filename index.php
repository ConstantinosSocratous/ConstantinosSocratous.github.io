<!DOCTYPE html>
<html lang = "en">

<head>

  <meta charset="utf-8">
  <meta name="Constantinos' CV" content="This is my profile page">
  <title>Constantinos Socratous</title>
</head>

    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/resume.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">


  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"  id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#activities">activites</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Constantinos Socratous</h1>
          <div class="subheading mb-5"> · 00447548872270 ·
            <a href="mailto:constantinos.socratous@kcl.ac.uk">constantinos.socratous@kcl.ac.uk</a>
          </div>
          <p class="lead mb-5">
            I am a college student(BSc Computer Science) currently attending
            <a href="https://www.kcl.ac.uk/index.aspx" target="_blank">Kings College London</a>
            in 2nd year and completed my first year with a first-class grade.
            Whether working on academic or professional projects, I apply proven leadership, teamwork,
            resistance and creative thinking skills.</p>
          <div class="social-icons">
            <a href="https://www.linkedin.com/in/constantinossocratous/" target="_blank">
              <i class="fab fa-linkedin-in"><img src = "./images/linkedin.jpg" width="70" height="60" alt="linkedin"></i>
            </a>
            <a href="https://github.com/ConstantinosSocratous" target="_blank">
              <i class="fab fa-github"><img src="./images/github.jpg" width="70" height="60" alt="github"></i>
            </a>
            <a href="https://www.instagram.com/constantinos.socratous/?hl=el" target="_blank">
              <i class="fab fa-instagram-in"><img src="./images/instagram.jpg" width="70" height="60" alt="instagram"></i>
            </a>
          </div>
        </div>
      </section>

      <hr class="m-0">

      <?php  include('./pages/education.php'); ?>

      <hr class="m-0">

      <?php  include('./pages/experience.php'); ?>

      <hr class="m-0">

      <?php  include('./pages/skills.php'); ?>

      <hr class="m-0">

      <?php  include('./pages/activities.php'); ?>

</body>

    <hr>
    <footer>
      <p>Copyright © 2018, Constantinos Socratous</p>
    </footer>
</html>
