<br>
<br><br><br>
<div class="tentang">
  <h6><?= $about1['nama'] ?> </h6>
  <h6><?= $about1['email'] ?></h6>
  <h6><?= $about1['tgl_registrasi']?></h6>

  <?php foreach( $about2 as $users ){ ?>
  <?php echo "<a href=\"/blog/$users[blog_ID]\">$users[judul]</a><br>";
  ?>
  <?php
}
?>
</div>
