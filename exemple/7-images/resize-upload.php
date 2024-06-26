<?php

if (count($_POST) && (strpos($_POST['img'], 'data:image') === 0)) {

  $img = $_POST['img'];

  if (strpos($img, 'data:image/jpeg;base64,') === 0) {
      $img = str_replace('data:image/jpeg;base64,', '', $img);
      $ext = '.jpg';
  }
  if (strpos($img, 'data:image/png;base64,') === 0) {
      $img = str_replace('data:image/png;base64,', '', $img);
      $ext = '.png';
  }

  $img = str_replace(' ', '+', $img);
  $data = base64_decode($img);
  $file = 'uploads/img'.date("YmdHis").$ext;

  if (file_put_contents($file, $data)) {
      echo "<p>The image was saved as $file.</p>";
  } else {
      echo "<p>The image could not be saved.</p>";
  }

}

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <input id="inp_file" type="file">

  <form method="post" action="">
    <input id="inp_img" name="img" type="hidden" value="">
    <input id="bt_save" type="submit" value="Upload">
  </form>

      <canvas height="640" width="640" id="image_large_canvas">

      <script>
      const taille_fichier=300
        function fileChange(e) {
         document.querySelector('#inp_img').value = '';

         var file = e.target.files[0];

         if (file.type == "image/jpeg" || file.type == "image/png") {

            var reader = new FileReader();
            reader.onload = function(readerEvent) {

               var image = new Image();
               image.onload = function(imageEvent) {
                  var max_size = taille_fichier;
                  var w = image.width;
                  var h = image.height;

                  if (w > h) {  if (w > max_size) { h*=max_size/w; w=max_size; }
                  } else     {  if (h > max_size) { w*=max_size/h; h=max_size; } }

                  var canvas = document.createElement('canvas');
                  canvas.width = w;
                  canvas.height = h;
                  canvas.getContext('2d').drawImage(image, 0, 0, w, h);

                  if (file.type == "image/jpeg") {
                     var dataURL = canvas.toDataURL("image/jpeg", 1.0);
                  } else {
                     var dataURL = canvas.toDataURL("image/png");
                  }
                  document.querySelector('#inp_img').value = dataURL;
               }
               image.src = readerEvent.target.result;
            }
            reader.readAsDataURL(file);
         } else {
            document.querySelector('#inp_file').value = '';
            alert('Please only select images in JPG- or PNG-format.');
         }
      }
      document.querySelector('#inp_file').addEventListener('change', fileChange, false);
      </script>
  </body>
</html>
