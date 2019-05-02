 <?php
 require_once 'inc/menu.php';
define("ADMIN", true);
require_once"ayarp.php";  require_once"funksiya.php";  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>dilbazi</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body id="page-top">
    <?php
  if (isset($_SESSION["login"])&&!empty($_SESSION["login"]) ){
                  
                   require_once"ayarp.php";
              }else{
                if($_POST){
                  $uadi=p("uadi");
                    $shifre=p("shifre");
                    if(!$uadi||!$shifre){
                      echo "Kullanici adi ve shifre bosh birakilamaz";
                    }
                    else {
                      $query ="SELECT * FROM uzvler1 WHERE uzv_adi='$uadi'&& shifre='$shifre'";
 
$result = mysqli_query($baglan2, $query) or die("Ошибка " . mysqli_error($baglan2)); 
if($result)
{
    $rows = mysqli_num_rows($result); 
   // $ayar=mysqli_fetch_array($result);
    echo "</table>";
     
    // очищаем результат
   // mysqli_free_result($result);
}
  if(mysqli_num_rows($result)){
          $row=row($query);
          $session=array(
            "login"=>true,
            "uzv_id"=>$row["uzv_id"],"uzv_adi"=>$row["uzv_adi"]);
          session_olushtur($session);
        //   go(URL."/admin");
         go("admindashboard/srtdash-admin-dashboard-master/documentation/");
  } else {
    echo" <font color='red'> Boyle bir yonetici bulunmur</font>";
  }
                    }

                }
                ?>
                <div id=girish_yap>
      <form action="" method="post">
      <table  cellpadding="0" celspacing="0"  >
        <tr>
          <td> Kullanici adi</td>
          <td><input style="font-size: 20px; border-color: red; border: solid 2px;"type="text" name="uadi"></td>
        </tr>
        <tr>
          <td>Shifre:</td>
          <td><input style="font-size: 20px; border-color: red; border: solid 2px;" type="password" name="shifre"></td>
        </tr>
        <tr>
          <td></td>
          <td><button type="submit">girish yap</button></td>
        </tr>
      </table>
      </form>
     </div>
                <?php
              }






      ?>
      </body>
      </html>