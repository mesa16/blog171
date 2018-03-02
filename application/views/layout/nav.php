
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background:#263238">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Elektronik</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="color:#CFD8DC">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php if (isset($this->session->uid)){ ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/home">Home</a>
            </li>
            <?php } ?>
            <?php if (isset($this->session->uid)){ ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/user/<?= $this->session->uid ?>">Profile</a>
            </li>
          <?php } ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="blog/post">Tulis Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/user/reg">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/user/masuk">Log In</a>
            </li>
            <?php if (isset($this->session->uid)){ ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user/signout">Log Out</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
