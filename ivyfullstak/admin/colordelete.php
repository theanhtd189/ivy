<?php
include "header.php";
include "leftside.php";
// include "class/category_class.php";
// define('__ROOT__', dirname(dirname(__FILE__))); 
// require_once(__ROOT__.'../admin/class/category_class.php');
 ?>
<?php
$brand = new brand;
if (isset($_GET['color_id'])|| $_GET['color_id']!=NULL){
    $color_id = $_GET['color_id'];
    }
    $delete_color = $brand -> delete_color($color_id);
    if($delete_color){
        echo '<script>alert("Thành công");window.location.href="colorlist.php"</script>';
    }
    else
        echo '<script>Alert("Lỗi")</script>';
?>
