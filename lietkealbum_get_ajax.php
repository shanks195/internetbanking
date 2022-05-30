<?php
    $macasi=$_GET['mcs'];
    include "connect.php";
    $sql = "SELECT * FROM album where MaCaSi='$macasi'";
    $results = $connect->query($sql); 
    if($results->num_rows>0)
    {
        echo "<table border='1' cellspacing='0'>";
        echo "<tr><th>Mã ca sĩ</th><th>Tên ca sĩ</th></tr>";
        while($rows = $results->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$rows['MaAlBum']."</td><td>".$rows['TenAlBum']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else
        echo "Ca si này chưa có Album";
?>
