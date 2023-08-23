<?php
require "fungsi.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mustofa Landing Page</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body>
  <main>
    <div class="big-wrapper light">
      <img src="./img/shape.png" alt="" class="shape" />

      <header>
        <div class="container">
          <div class="logo">
          
            <h3>Mustofa </h3>
          </div>

          <div class="links">
            <ul>
              <li><a href="#home" id="link">Home</a></li>
              <li><a href="#skill" id="link">Skill</a></li>
              <li><a href="#pendidikan" id="link">Pendidikan</a></li>
              <li><a href="#testimoni" id="link">Testimoni</a></li>
              
              <li><a href="#contact" id="link">Contact</a></li>
            </ul>
          </div>

          <div class="overlay"></div>

          <div class="menu">
            <div class="bar"></div>
          </div>
        </div>
      </header>
      <!-- mobile -->
      <nav id="menu-bottom" class="nav">
        <a href="#home" id="link" class="nav__link">
          <i class="fas fa-home"></i>
          <span class="nav__text">Home</span>
        </a>
        <a href="#skill" id="link" class="nav__link nav__link">
          <i class="fas fa-user"></i>
          <span class="nav__text">Skill</span>
        </a>
        <a href="#pendidikan" id="link" class="nav__link">
          <i class="fas fa-graduation-cap"></i>
          <span class="nav__text">Pendidikan</span>
        </a>
        <a href="#testimoni" id="link" class="nav__link">
          <i class="fas fa-users"></i>
          <span class="nav__text">Testimoni</span>
        </a>
        <a href="#contact" id="link" class="nav__link">
          <i class="fas fa-user"></i>
          <span class="nav__text">Contact</span>
        </a>
      
        <!--  -->

        <!--  -->
      </nav>
      <!--  -->
      <div class="showcase-area" id="home">
        <div class="container">
          <div class="left">
            <div class="big-title" data-aos="fade-right">
              <h1 style="color:white;">Andoid & <br>Web Developer & <br> <span style="color:#0b85ff ;">Game Developer!</span> </h1>

            </div>
            <p class="text" style="color: white ;" data-aos="fade-right">
            Selamat datang di web Curriculum Vitage saya, Perkenalkan Nama saya 
            <?php
            foreach ($biodata as $bid) {
                echo '<span style="font-style: italic;">' . $bid["nama"] . '</span>';
            }
            ?> 
            saya seorang 
            <?php
            foreach ($biodata as $bid) {
                echo $bid["job"];
            }
            ?> 
            dan juga seorang 
            <?php
            foreach ($biodata as $bid) {
                echo 'Mahasiswa jurusan ' . $bid["jurusan"] . ' di ' . $bid["universitas"];
            }
            ?>!!
        </p>

            <div class="cta" data-aos="fade-right">
              <a href="#" class="btn">Login</a>
            </div>
          </div>

          <div class="right" data-aos="fade-left">
            <img src="./img/bg.png" alt="Person Image" class="person" />
          </div>
        </div>
      </div>
      <!--  -->

      <!--  -->



      <!--  -->
      <!-- landing  -->
      <div class="landing "id="skill">


        <!-- <div class=" judul" style="margin-top:100px"> -->


          <!-- <h2 data-aos="fade-right">Transfer Antar Bank </h2> -->


        <!-- </div> -->

        <div class="flex-container" style="margin-top:100px;">
          <div><a href="" data-aos="fade-up"><img src="cv/bca.png" alt=""></a></div>
          <div><a href="" data-aos="fade-up"><img src="cv/dana.png" alt=""></a></div>
          <div><a href="" data-aos="fade-up"><img src="cv/gopay.png" alt=""></a></div>
          <div><a href="" data-aos="fade-up"><img src="cv/microsoft.png" alt=""></a></div>
          <div><a href="" data-aos="fade-up"><img src="cv/google.png" alt=""></a></div>
          <div><a href="" data-aos="fade-up"><img src="cv/bukalapak.png" alt=""></a></div>

        </div>
        <!--  -->




        <!--  -->

      </div>

      <div class="jumbotron" id="skill">
    <h2 style="text-align: center;color:white;margin-top: 30px;" data-aos="zoom-in">Skill dan Keterampilan</h2>
    <div class="flex" data-aos="zoom-out">
        <?php
      

        foreach ($skills as $skill) {
            $output = sprintf('
                <div>
                    <img src="%s" alt="" style="display:block;margin:auto;">
                    <h2 style="text-align:center;">%s</h2>
                    <p style="text-align:center;">%s</p>
                </div>
                <br>',
                $skill["img"],
                $skill["title"],
                $skill["description"]
            );
            echo $output;
        }
        ?>
    </div>
</div>

        <!--  -->







        <!--  -->
      </div>
      <!--  -->
    
    </div>

    <!--  -->
    <br>
    <!--  -->
    <!-- roadmap -->
    <center>
      <div class="big-title"   data-aos="zoom-in" id="pendidikan">
        <h2>Riwayat Pendidikan </h2>

      </div>
    </center>
    <br>
    <section class="timeline-section">
    <div class="timeline-items">
        <?php
        foreach ($riwayatpendidikan as $item) {
            echo '<div class="timeline-item" data-aos="fade-right">';
            echo '<div class="timeline-dot"></div>';
            echo '<div class="timeline-date"><i class="' . $item["icon"] . '"></i> ' . $item["date"] . '</div>';
            echo '<div class="timeline-content">';
            echo '<h3>' . $item["title"] . '</h3>';
            echo '<p>' . $item["description"] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</section>

    <!--  -->
    <center>
      <div class="big-title" id="testimoni"  data-aos="zoom-in">
        <h2>Testimoni </h2>

      </div>
    </center>
    <div class="wrap"  data-aos="zoom-in">

      <div class="carousel owl-carousel">
       
        <div class="card "> <img src="img/orang.png" alt=""><h2 style="color:#0b85ff ;">Mamad</h2><p >"Terimakasih telah membantu saya dalam mengembangkan web penelitian"</p> </div>
        <div class="card "> <img src="img/orang.png" alt=""><h2 style="color:#0b85ff ;">Habibie</h2> <p >"Media pembelajaran yang dikembangkan disini sangat bagus bagus semua"</p></div>
        <div class="card "><img src="img/orang.png" alt=""><h2 style="color:#0b85ff ;">Andi</h2> <p >"Saya kasih bintang 5 aja, karena dari segi pelayanan cukup bagus dan baik sekali"</p></div>
        <div class="card "> <img src="img/orang.png" alt=""><h2 style="color:#0b85ff ;">Aini</h2> <p >"dulu saya nyuruh buat aplikasi, saya kasih Deadline 10 hari. 5 hari aplikasi yang saya suruh langsung jadi"</p></div>
      </div>




    </div>
    <br>
    <br>
    <br>
    <div class="showcase-area" >
      <div class="container">
        <div class="left" data-aos="fade-right">
          <div class="big-title">
            <h1>Tanya Jawab </h1>

          </div>

        </div>

        <div class="right" data-aos="fade-left">

          <button class="accordion">

            Sekarang menempuh pendidikan dimana?</button>
          <div class="panel">
            <p class="text">Untuk sekarang saya menempuh pendidikan di bangku kuliah yakni di UNIVERSITAS TRUNOJOYO MADURA</p>
          </div>

          <button class="accordion">Sudah beberapa lama di bidang web developer? </button>
          <div class="panel">
            <p class="text">Untuk web sendiri sekitaran 3 tahun</p>
          </div>

        

        </div>
      </div>
    </div>
    <!--  -->

    <!--  -->

    </div>
<!--  -->
<br>
<br>
<br>


<center>
  <div class="big-title"  id="contact"  data-aos="zoom-in">
    <h2>Contact Saya </h2>

  </div>
</center>
<br>

<div class="showcase-area">
  <div class="container">
    <div class="left" data-aos="fade-right">
      <img src="./img/operator.png" alt="Person Image" class="person" />

    </div>

    <div class="right" data-aos="fade-left">

      <div class="form">
        <form>
          <label for="nama_depan">Nama Depan</label>
          <input type="text" id="nama_depan" name="nama_depan" placeholder="Nama depan...">
          <label for="nama_belakang">Nama Belakang</label>
          <input type="text" id="nama_belakang" name="nama_belakang" placeholder="Nama belakang...">
      
          <label for="negara">Negara</label>
          <select id="negara" name="negara">
            <option value="indonesia">Indonesia</option>
            <option value="brunei">Brunei Darussalam</option>
            <option value="malaysia">Malaysia</option>
            <option value="China">China</option>
            <option value="Jepang">Jepang</option>
            <option value="Dan Lainnya">Dan Lainnya</option>
          </select>
          <label for="story">Pesan Anda</label>
          <textarea id="w3review" name="w3review" rows="4" cols="50">
          
            </textarea>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
</div>

<!--  -->














    <!--  -->
  </main>
  <!--  -->

  <!--  -->

  <footer>
    <p>Curriculum Vitage Landing Page &#169; <span style="color: blue;">Mustofa</span>  2023</p>
    <div class="footer-col">
   
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
</footer>
  <br>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>

  <script src="script.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    // AOS.init();
    AOS.init({
      duration: 1500, // values from 0 to 3000, with step 50ms
    });
  </script>
</body>

</html>