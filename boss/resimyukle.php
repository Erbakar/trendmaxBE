<?php define("guvenlik",true);?>
<?php
require('../func/db.php');
require('../func/fonksiyon.php');
giriskontrol($ozy,1);

if(!isset($_SESSION["giris"])){
    header("Location:index.php");
}
else {
 
}

?>
<!DOCTYPE html>
<html lang="tr">

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<body>

   <form action="upload.php" class="dropzone" id="dropzoneFrom">
   <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>
   <input type="hidden" name="alan" value="<?php echo $_GET['alan'];?>"/>
   </form>
    
   
  

   <div id="preview"></div>
   <br />
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="assets/js/jquery.min.js"></script>
<link rel="stylesheet" href="assets/dropzone.css" />
<script src="assets/dropzone.js"></script>

<script>

$(document).ready(function(){
 
 Dropzone.options.dropzoneFrom = {
  autoProcessQueue: true,
  acceptedFiles:".png,.jpg,.jpeg",
  init: function(){
   var submitButton = document.querySelector('#submit-all');
   myDropzone = this;
   submitButton.addEventListener("click", function(){
    myDropzone.processQueue();
   });
   this.on("complete", function(){
    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
    {
     var _this = this;
     _this.removeAllFiles();
    }
    list_image();
   });
  },
 };

 list_image();

 function list_image()
 {
  $.ajax({
   url:"upload.php",
   data:{id:<?php echo $_GET["id"];?>,alan:'<?php echo $_GET["alan"];?>'},
   success:function(data){
    $('#preview').html(data);
   }
  });
 }

 $(document).on('click', '.remove_image', function(){
  var name = $(this).attr('id');
  $.ajax({
   url:"upload.php",
   method:"POST",
   data:{name:name},
   success:function(data)
   {
    list_image();
   }
  })
 });
 
});
</script>       
</body>
 

	

</html>