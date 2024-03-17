<?php

    if(isset($_POST['bcode']) ){
        //echo $_POST['code'];
        
        //echo'<img src=https://www.barcodesinc.com/generator/image.php?code=123123123&style=197&type=C128B&width=200&height=50&xres=1&font=3 alt="THIS IS A BARCODE">';
        
        if(!empty($_POST['bcode']))
            echo'<img src=https://www.barcodesinc.com/generator/image.php?code='.$_POST["bcode"].'&style=197&type=C128B&width=200&height=50&xres=1&font=3 alt="THIS IS A BARCODE">';
        else
            echo'<span>PLEASE INPUT A NUMBERS ABOVE!</span>';
        }   


?>