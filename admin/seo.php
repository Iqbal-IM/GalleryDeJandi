<?php

require_once("session.php");



$select = mysqli_query($koneksi, "SELECT * FROM seo");

$data = mysqli_fetch_assoc($select);

if (is_null($data)) {
  $data["description"] = "";
  $data["keywords"] = "";
  $data["author"] = "";
  $data["robot_follow"] = "1";
  $data["robot_index"] = "1";
}

?>


<div class="row d-flex justify-content-center">
  <div class="col col-8 p-4 bg-light  shadow p-3 mb-5 mt-5 rounded">

    <form action="aksi.php?act=seo" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" name="author" id="author" value="<?= $data["author"] ?>" required>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description" required><?= $data["description"] ?></textarea>
      </div>

      <div class="form-group">
        <label for="keywords">Keyword</label>
        <textarea type="text" class="form-control" name="keywords" id="keywords" required><?= $data["keywords"] ?></textarea>
      </div>


      <div class="form-group">
        <label>Robot Follow</label>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="robot_follow" id="follow" value="1" required <?= ($data["robot_follow"] ? "checked" : "") ?>>
          <label for="follow" class="form-check-label">Follow</label>
        </div>
        <div class="form-check disabled">
          <input type="radio" class="form-check-input" name="robot_follow" id="nofollow" value="0" required <?= (!$data["robot_follow"] ? "checked" : "") ?>>
          <label for="nofollow" class="form-check-label">No-Follow</label>
        </div>
      </div>

      <div class="form-group">
        <label>Robot Index</label>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="robot_index" id="index" value="1" required <?= ($data["robot_index"] ? "checked" : "") ?>>
          <label for="index" class="form-check-label">Index</label>
        </div>
        <div class="form-check disabled">
          <input type="radio" class="form-check-input" name="robot_index" id="noindex" value="0" required <?= (!$data["robot_index"] ? "checked" : "") ?>>
          <label for="noindex" class="form-check-label">No-Index</label>
        </div>
      </div>

      </br>
      <button class="btn btn-success" name="submit">Simpan</button>
      <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
  </div>

</div>