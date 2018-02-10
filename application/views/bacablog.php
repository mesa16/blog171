<br>
<br>
<br>

<h1><?= $blog['judul'] ?></h1>

<p>
  <?php
      $isi = str_replace("\n", "<br>", $blog['isi'] );
      echo $isi;
   ?>
</p>
<?php
    echo "<img src=\"/assets/img/blog/".$blog['blog_ID'].".".$blog['gambar']."\"> "; ?>

  <div class="form-control" id="edit">
    <a href="/blog/edit/<?= $blog['blog_ID']?>">Edit</a>
  </div>
  <div class="form-control" id="delete">
    <a href="/blog/delete/<?= $blog['blog_ID']?>">delete</a>
  </div>
