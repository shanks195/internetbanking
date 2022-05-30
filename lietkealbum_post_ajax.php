<?php
    $macasi=$_POST['ma'];
    $ten=$_POST['ten'];
    echo $macasi." tên casi=".$ten;
    /*include "connect.php";
    $sql = "SELECT * FROM album where MaCaSi='$macasi'";
    $results = $connect->query($sql);    
    echo "<table border='1' cellspacing='0'>";
    echo "<tr><th>Mã ca sĩ</th><th>Tên ca sĩ</th></tr>";
    while($rows = $results->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$rows['MaAlBum']."</td><td>".$rows['TenAlBum']."</td>";
        echo "</tr>";
    }
    echo "</table>";*/
    
?>
