<?php

$host="localhost";
$user="root";
$pass="";
$db="base2";
$baglan2= mysqli_connect($host,$user,$pass,$db)or die (mysqli_error());

$query ="SELECT * FROM uzvler1";
 
$result = mysqli_query($baglan2, $query) or die("Ошибка " . mysqli_error($baglan2)); 
if($result)
{
    $rows = mysqli_num_rows($result); 
    $ayar=mysqli_fetch_array($result);//количество полученных строк
     
// for ($i = 0 ; $i < $rows ; ++$i)
// {
//     $row = mysqli_fetch_row($result);
//     echo "<tr>";
//         for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
//     echo "</tr>";
// }
     
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}



?>