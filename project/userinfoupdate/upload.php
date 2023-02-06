<?php
  if(isset($_POST['upload'])){
    $fileName=$_FILES['file']['name'];
    $fileTempt=$_FILES['file']['tmp_name'];
    $folder='../images/';
    $name=time().'_'.$fileName;
    $ext=substr($name,strlen($name)-3,3);
    $ext1=substr($name,strlen($name)-4,4);
    if($ext=="JPG"||$ext=="jpg"||$ext1=="JPEG"||$ext1=="jpeg"||$ext=="GIF"||$ext=="gif"||$ext=="BMP"||$ext=="bmp"||$ext=="PNG"||$ext=="png"){
      move_uploaded_file($fileTempt, $folder.$name);
      echo"<script>alert('Successfully uploaded!')</script>";
    }else{
      $alert=1;
    }
  }
?>
<?php if(isset($alert)):?>
  <script>alert("Wrong image format!")</script>
<?php endif;?>
<section>
  <form method="post" enctype="multipart/form-data">
    <section>
      <input type="file" name="file" class="hidden">
    </section>
    <section><input type="submit" value="Upload" name="upload"></section>
  </form>
</section>