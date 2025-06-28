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




$folder_name = '../resimler/genel/';

if($_POST)
{


 $sayfaid   = temizle($_POST['id']);
 $alan   = temizle($_POST["alan"]);
 $tresimkonum  = $_FILES['file']['tmp_name'];
 $tresimad     = $_FILES['file']['name'];
 $tresimtip    = $_FILES['file']['type'];
 $tuzanti      = substr($tresimad, -5,5);
 $tyeniad      = seo(md5(uniqid(rand($tresimad)))).$tuzanti;
 $tyol         = $folder_name;
 move_uploaded_file($tresimkonum, $tyol.'/'.$tyeniad); 
 $tresim = $ozy->prepare("INSERT INTO tumresimler (sayfaid,sayfaresim,alan) VALUES (?,?,?)");
 $tmresim = $tresim->execute(array($sayfaid,$tyeniad,$alan));
 
 
 
}

if(isset($_POST["name"]))
{
 $filename = $folder_name.$_POST["name"];
 $resimadimiz = temizle($_POST["name"]);
 $tresimsil = $ozy->prepare("delete from tumresimler where sayfaresim='$resimadimiz'");
 $tresimsil->execute(array($resimadimiz));
 unlink($filename);
 $silinecek = $ozy->exec("DELETE FROM tumresimler where sayfaid='0'");
 
 }


?>
 
 
<div class="row">
<?php 

$sayfaidx =  temizle($_GET['id']);
$alanx =  temizle($_GET['alan']);
$tresimler = $ozy->query("select * from tumresimler where sayfaid='$sayfaidx' and alan='$alanx' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
foreach($tresimler as $abc){
?> 
   <div class="col-md-1" style="width:20%;margin-right:-25px;">
    <img src="../resimler/genel/<?php echo $abc['sayfaresim']; ?>" class="img-thumbnail" style="height:75px;width:75px;" />
    <button type="button"  style="background: #30419b;
    color: #fffdfd;
    margin-top: 10px;
    margin-left: 10px;
    height: 30px;
    width: 30px;
    text-align: left;
    font-size: 12px;
    padding-left: 8px;
    font-weight: 500;
}" class="btn btn-link remove_image" id="<?php echo $abc['sayfaresim']; ?>">Sil</button>
   </div>
<?php } ?>	  
</div>

