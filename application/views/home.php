    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
              <strong class="text-uppercase">Elektronik dan Komputer</strong>
          </div>
        </div>
      </div>
    </header>

    <div class="home">
    <section id="services" src="assets/img/blog.jp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"> Daftar Blog</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <?php foreach( $blogs as $blog ){ ?>
          <div class="col-lg-6 col-md-6 text-center">
            <h3 class="mb-3"></h3>
            <p class="text-muted mb-0"><?php echo "<a href='/blog/" . $blog['blog_ID'] ."'>" . $blog['judul']."<a><br>"; ?></p>
            <div class="service-box mt-5 mx-auto" id="gambar">
              <?php
              echo "<img src=\"./assets/img/blog/".$blog['blog_ID'].".".$blog['gambar']."\"> "; ?>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
   </div>
