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
    </head>
    <body>
        <form action="#" method="post">            
            <label class="heading">Các mục chọn</label>            
            <input type="checkbox" name="check_list[]" value="C/C++">
            <label>C/C++</label><input type="checkbox" name="check_list[]" value="Java">
            <label>Java</label><input type="checkbox" name="check_list[]" value="PHP">
            <label>PHP</label><input type="checkbox" name="check_list[]" value="HTML">
            <label>HTML</label><input type="checkbox" name="check_list[]" value="C#">
            <label>C#</label><input type="submit" name="submit" Value="Submit"/>  
        </form>
	
	<?php    
            if(isset($_POST['submit'])){        
                if(!empty($_POST['check_list'])) 
                {            
                    // Dem số mục được chọn            
                    $checked_count = count($_POST['check_list']);
                    
                    echo "<br> Bạn đã chọn các mục sau:".$checked_count." option(s): <br/>";           
                    // Vòng lặp lấy các mục được chọn           
                    foreach($_POST['check_list'] as $value) {               
                        echo "<p>".$value ."</p>";            
                    }        
                }       
                else{            
                    echo "<b>Bạn chưa chọn mục nào cả</b>";       
            }    
        }?>
    </body>
</html>
