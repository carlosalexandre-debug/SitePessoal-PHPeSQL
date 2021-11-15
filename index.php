<?php

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  
  $name = $_POST['name']; //Gets from form
  $serie = $_POST['serie'];
  $coment = $_POST['coment'];

  $sql = "INSERT INTO recados (nome, turma, recado)
          VALUES ('$name', '$serie', 'coment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
      echo "<script>alert('Comment added succesfully.')</script>";
  } else {
    echo "<script>alert('Comment does not added.')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Meu site pessoal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.html">Carlos Alexandre</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>A <span>persistência</span> realiza o impossivel.</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Inicio</a></li>
          <li><a class="nav-link" href="#about">Pessoal</a></li>
          <li><a class="nav-link" href="#resume">Resumo</a></li>
          <li><a class="nav-link" href="#portfolio">Fotos</a></li>
          <li><a class="nav-link" href="#contact">Comentários</a></li>   
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>Informações</h2>
        <p>Sobre mim</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me1.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Programador</h3>
          <p class="fst-italic">
            Meu nome é Carlos, mais conhecido como Carlinhos. Tenho 17 anos e moro na cidade de Itapira junto com meus pais e minha irmã.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Nascimento:</strong> <span>10 outubro, 2004</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Telefone:</strong> <span>19 9888-10734</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Cidade:</strong> <span>Itapira, SP</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Idade:</strong> <span>17</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>carlosxpmoraes@gmail.com</span></li>
              </ul>
            </div>
          </div>
          <p>
          	Desde pequeno gosto de programação e tecnologia. É impressionante o poder dessas áreas na resolução de problemas e criação de novas coisas. 
          </p>
        </div>
      </div>

    </div>
    <!-- End About Me -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">70%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">10%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">60%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resumo</h2>
        <p></p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumário</h3>
          <div class="resume-item pb-0">
            <h4>Carlos Alexandre</h4>
            <p><em>Estou sempre em busca de aprender novas coisas para evoluir profissionalmente e como pessoa. Minha meta é trabalhar com a anàlise e desenvolvimento de Software.</em></p>
          </div>

          <h3 class="resume-title">Educação</h3>

          <div class="resume-item">
            <h4>Etec João Maria Stevanatto</h4>
            <h5>2020 - 2021 (Atualmente)</h5>
          </div>
          <div class="resume-item">
            <h4>E.E Pedro Ferreira Cintra</h4>
          </div>
          <div class="resume-item">
            <h4>EMEF Comendador Virgolino de Oliveira</h4>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Cursos</h3>
          <div class="resume-item">
            <h4>Técnico em Desenvolvimento de Sistemas</h4>
            <h5>2020 - 2021 (Cursando)</h5>
            <p><em>Etec João Maria Stevanatto, Itapira, SP </em></p>
            <p>
            <ul>
              <li>Planejar e projetar o desenvolvimento de Software seguindo análise de requisitos;</li>
              <li>Selecionar a metodologia e a linguagem de programção para o desenvolvimento;</li>
              <li>Modelagem e implementação do Banco de Dados;</li>
              <li>Criar algoritmos utilizando padrões de lógica de programação.</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Auxiliar de escritório</h4>
            <h5>2017 - 2018</h5>
            <p><em>Senac Itapira, SP</em></p>
            <p>
            <ul>
              <li>Compreender as exigências do mercado de trabalho;</li>
              <li>Simulação de processo seletivo para vagas de emprego, entrevista, dinâmicas de grupo e testes;</li>
              <li>Atividades administrativas;</li>
              <li>Usar ferramentas de informática e software de escritório (Word, Planilhas Excel, Power Point).</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Álbum</h2>
        <p></p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Todos</li>
            <li data-filter=".filter-fml">Família</li>
            <li data-filter=".filter-pets">Pets</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-fml">
          <div class="portfolio-wrap">
            <img src="assets/img/familia/fml1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-pets">
          <div class="portfolio-wrap">
            <img src="assets/img/pets/pets1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fml">
          <div class="portfolio-wrap">
            <img src="assets/img/familia/fml2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-pets">
          <div class="portfolio-wrap">
            <img src="assets/img/pets/pets5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fml">
          <div class="portfolio-wrap">
            <img src="assets/img/familia/fml3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-pets">
          <div class="portfolio-wrap">
            <img src="assets/img/pets/pets7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fml">
          <div class="portfolio-wrap">
            <img src="assets/img/familia/fml4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-pets">
          <div class="portfolio-wrap">
            <img src="assets/img/pets/pets3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fml">
          <div class="portfolio-wrap">
            <img src="assets/img/familia/fml5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-pets">
          <div class="portfolio-wrap">
            <img src="assets/img/pets/pets2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fml">
          <div class="portfolio-wrap">
            <img src="assets/img/familia/fml6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-pets">
          <div class="portfolio-wrap">
            <img src="assets/img/pets/pets6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fml">
          <div class="portfolio-wrap">
            <img src="assets/img/familia/fml7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fml">
          <div class="portfolio-wrap">
            <img src="assets/img/familia/fml8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-pets">
          <div class="portfolio-wrap">
            <img src="assets/img/pets/pets4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fml">
          <div class="portfolio-wrap">
            <img src="assets/img/familia/fml9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Comentários</h2>
        <p>Deixe sua mensagem</p>
      </div>
		  
      <form action="" method="POST">
        <div class="row php-email-form mt-4">
          <div class="col-md-6 form-group">
          <label for="name">Name</label>
            <input name="name" class="form-control" value="<?php echo $name; ?>" required>
          </div>

        <div class="col-md-6 form-group mt-3 mt-md-0">
        <label for="serie">Turma</label>
            <input name="serie" class="form-control" id="serie" value="<?php echo $serie; ?>" required>
        </div>

        <div class="form-group mt-3">
        <label>Mensagem</label>
          <textarea name="coment" class="form-control" value="<?php echo $coment; ?>" required></textarea>
        </div>

        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button name="submit" type="submit">Send Message</button>
        </div>
        </form>

      <?php
      $sql = "SELECT * FROM recados";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

      ?>
      
      <div class="row">
        <h2><?php echo $name; ?></h2>
        <h3><?php echo $serie; ?></h3>
        <p><?php echo $coment; ?></p>
      </div>
          
      <?php

          }

      }

      ?>
  </div>
  </div>
  </section>
  
  <!-- End Contact Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>