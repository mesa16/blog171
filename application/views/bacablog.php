<br>
<br>
<br>
<br>
    <div class="img">
    <?php
      echo "<img src=\"/assets/img/blog/".$blog['blog_ID'].".".$blog['gambar']."\"> "; ?>
    </div>
      <h1 class="judul"><?= $blog['judul'] ?></h1>
      <p class="isi">
        <?php
        $isi = str_replace("\n", "<br>", $blog['isi'] );
        echo $isi;
        ?>
      </p>

      <div class="profile">
        <br>
        <br>
        <p class="penulis">Di tulis oleh</p>

        <br>

      <?php echo "<a href='/user/" . $blog['user_ID'] ."'>" . $blog['nama']. "<a><br>"; ?>

        <?php if (($this->session->uid)== $blog['user_ID']) {      ?>
            <a href="/blog/edit/<?= $blog['blog_ID']?>" class="btn btn-primary">Edit</a> <br>
            <a href="/blog/delete/<?= $blog['blog_ID']?>" class="btn btn-primary">delete</a>
        <?php } ?>

      </div>
