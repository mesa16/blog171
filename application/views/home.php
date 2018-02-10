

<!-- Page Header -->
<header class="masthead" style="background-image: url('/assets/img/berita.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Berita Terpercaya</h1>
          <span class="subheading">Selamat datang di web Berita Kami</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<?php foreach( $blogs as $blog ){ ?>
<div class="card" style="width: 18rem;">
  <img class="card-img-top">
  <?php
  echo "<img src=\"./assets/img/blog/".$blog['blog_ID'].".".$blog['gambar']."\"> "; ?>"
  <div class="card-body">
    <h5 class="card-title"><?php echo "<a href='/blog/" . $blog['blog_ID'] ."'>" . $blog['judul']."<a><br>"; ?></h5>
    <p class="card-text"></p>
  </div>
</div>
<?php } ?>
<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <ul class="list-inline text-center">
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
        </ul>
        <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
      </div>
    </div>
  </div>
</footer>
