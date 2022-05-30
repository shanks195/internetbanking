<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery.js"></script>
        <script>
        $(document).ready(function(){
        $(".classmacasi").change(function(){
            var macasi=$(this).val();
            $.get("lietkealbum_get_ajax.php?mcs="+macasi,function(data,status){
                    $(".classdiv").html(data);  
                });
        }); 
        
    });
    </script>
    </head>
    <body>
       <?php
            include "connect.php";
            $sql = "SELECT * FROM casi";
            $results = $connect->query($sql);    
            echo "tên ca si:";
            echo "<select class='classmacasi'>";
            while($rows = $results->fetch_row())
            {
                echo "<option value='$rows[0]'>".$rows[1]."</option>";
            
            }
            echo "</select>";
            echo "<div class='classdiv'></div>";
        ?>
    </body>
</html>
