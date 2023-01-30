<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/IMG/syal.jpg" type="image/x-icon">
        
        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/CSS/styles.css">
        <link rel="icon" href="assets/IMG/berita.png">

        <title>Berita Terkini</title>
        <link rel="icon" href="assets/IMG/berita.png">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Baca Berita</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#terbaru" data-target="#terbaru">Terbaru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#projects" data-target="#projects">Teknologi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#bola" data-target="#bola">Bola</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#edukasi" data-target="#edukasi">Edukasi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <!--=============== HEADER ===============-->
        <header class="profile container">
            <!-- Theme button -->
            <i class="ri-moon-line change-theme" id="theme-button"></i>

            <div class="profile__container grid">
                <div class="profile__data">
                    <div class="profile__border">
                        <div class="profile__perfil">
                            <!-- Insert your image, according to the example size of the portfolio -->
                            <img src="assets/IMG/berita.png" alt="">
                        </div>
                    </div>
                    <h2 class="profile__name">Baca Berita</h2>
                </div>
            </div>
        </header>

        <!--=============== MAIN ===============-->
        <main class="main">
            <section class="filters container">
                <!--=============== FILTERS TABS ===============-->
                <br><br> <br><br>

                <div class="filters__sections">
                    <!--=============== PROJECTS ===============-->
                    <div class="projects__content grid filters__active" data-content id="projects">
                        <?php
                            // Assign JSON encoded string to a PHP variable
                            $json = 'https://api-berita-indonesia.vercel.app/cnn/teknologi/';
                            $d = file_get_contents($json);

                            // Decode JSON data to PHP associative array
                            $arr = json_decode($d, true);

                            for ($x=1; $x <= 20; $x++) { 
                            $link = $arr['data']['posts'][$x]['link'];
                            $judul = $arr['data']['posts'][$x]['title'];
                            $tanggal = $arr['data']['posts'][$x]['pubDate'];
                            $tgl = substr($tanggal, 0,10);
                            $desk = $arr['data']['posts'][$x]['description'];
                            $thumb = $arr['data']['posts'][$x]['thumbnail'];


                            ?>
                        <article class="projects__card">
                            <!-- Insert your image in a rectangular format (Ex: 600 x 400, 1000 x 800, 1200 x 1000, etc) -->
                            <img src="<?php echo $thumb;?>" alt="" class="projects__img">

                            <div class="projects__modal">
                                <div>
                                    <h7 class="projects__title"><?php echo $judul;?></h7><br>
                                    <span class="projects__subtitle"><?php echo $tgl;?></span><br>
                                    <a class="btn btn-primary btn-sm" href="<?php echo $link;?>" role="button">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                    </div>
                       <!--=============== SKILLS ===============-->
                    <div class="projects__content grid filters__active" data-content id="terbaru">
                        <?php
                            // Assign JSON encoded string to a PHP variable
                            $json = 'https://api-berita-indonesia.vercel.app/cnbc/news/';
                            $d = file_get_contents($json);

                            // Decode JSON data to PHP associative array
                            $arr = json_decode($d, true);

                            for ($x=1; $x <= 20; $x++) { 
                            $link = $arr['data']['posts'][$x]['link'];
                            $judul = $arr['data']['posts'][$x]['title'];
                            $tanggal = $arr['data']['posts'][$x]['pubDate'];
                            $desk = $arr['data']['posts'][$x]['description'];
                            $thumb = $arr['data']['posts'][$x]['thumbnail'];


                            ?>
                        <article class="projects__card">
                            <!-- Insert your image in a rectangular format (Ex: 600 x 400, 1000 x 800, 1200 x 1000, etc) -->
                            <img src="<?php echo $thumb;?>" alt="" class="projects__img">

                            <div class="projects__modal">
                                <div>
                                    <h7 class="projects__title"><?php echo $judul;?></h7><br>
                                    <span class="projects__subtitle"><?php echo $tgl;?></span><br>
                                    <a class="btn btn-primary btn-sm" href="<?php echo $link;?>" role="button">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                </div>

                <div class="projects__content grid filters__active" data-content id="bola">
                        <?php
                            // Assign JSON encoded string to a PHP variable
                            $json = 'https://api-berita-indonesia.vercel.app/antara/bola/';
                            $d = file_get_contents($json);

                            // Decode JSON data to PHP associative array
                            $arr = json_decode($d, true);

                            for ($x=1; $x <= 15; $x++) { 
                            $link = $arr['data']['posts'][$x]['link'];
                            $judul = $arr['data']['posts'][$x]['title'];
                            $tanggal = $arr['data']['posts'][$x]['pubDate'];
                            $desk = $arr['data']['posts'][$x]['description'];
                            $thumb = $arr['data']['posts'][$x]['thumbnail'];


                            ?>
                        <article class="projects__card">
                            <!-- Insert your image in a rectangular format (Ex: 600 x 400, 1000 x 800, 1200 x 1000, etc) -->
                            <img src="<?php echo $thumb;?>" alt="" class="projects__img">

                            <div class="projects__modal">
                                <div>
                                    <h7 class="projects__title"><?php echo $judul;?></h7><br>
                                    <span class="projects__subtitle"><?php echo $tgl;?></span><br>
                                    <a class="btn btn-primary btn-sm" href="<?php echo $link;?>" role="button">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                </div>

                <div class="projects__content grid filters__active" data-content id="edukasi">
                        <?php
                            // Assign JSON encoded string to a PHP variable
                            $json = 'https://api-berita-indonesia.vercel.app/sindonews/edukasi/';
                            $d = file_get_contents($json);

                            // Decode JSON data to PHP associative array
                            $arr = json_decode($d, true);

                            for ($x=1; $x <= 15; $x++) { 
                            $link = $arr['data']['posts'][$x]['link'];
                            $judul = $arr['data']['posts'][$x]['title'];
                            $tanggal = $arr['data']['posts'][$x]['pubDate'];
                            $desk = $arr['data']['posts'][$x]['description'];
                            $thumb = $arr['data']['posts'][$x]['thumbnail'];


                            ?>
                        <article class="projects__card">
                            <!-- Insert your image in a rectangular format (Ex: 600 x 400, 1000 x 800, 1200 x 1000, etc) -->
                            <img src="<?php echo $thumb;?>" alt="" class="projects__img">

                            <div class="projects__modal">
                                <div>
                                    <h7 class="projects__title"><?php echo $judul;?></h7><br>
                                    <span class="projects__subtitle"><?php echo $tgl;?></span><br>
                                    <a class="btn btn-primary btn-sm" href="<?php echo $link;?>" role="button">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                </div>
            </div>
  </section>
</main>

        <!--=============== FOOTER ===============-->
        <footer class="footer container">
            <span class="footer__copy">
                &#169; syallstore.id Happy Shopping
            </span>
        </footer>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="assets/JS/scrollreveal.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/JS/main.js"></script>
    </body>
</html>
