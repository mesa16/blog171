<form  action="/blog/subedit/<?=$blog_ID?>" method="post">

  <br>
  <br>
  <br>
  <br>
    <div class="col-lg-8 col-md-10 mx-auto">
   <label for="gambar">gambar</label>
   <input type="file" name="gambar" class="form-control" id="gambar" aria-describedby="gambar" placeholder="">
    <label for="judul">Judul</label>
    <input type="judul" name="judul" class="form-control" id="judul" aria-describedby="judul" placeholder="Enter judul" value="<?=$judul?>">
    <div class="form-group">
    <label for="isi">Isi</label>
    <textarea name="isi" class="form-control" id="isi" rows="7" wrap="hard"><?=$isi?></textarea>
  </div>

    <br>
    <br>


    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
  </div>
