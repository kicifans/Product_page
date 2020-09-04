<?php 

$link = mysqli_connect("adress","user","password","database");

$alert = '';

//Button switches between Delete and Save , based on page
if ($currentPage == "index.php") {

    $button = "<button class='btn btn-outline-danger my-2 my-sm-0' id='deleteButton' type='submit' name='delete' form='select'>Delete all selected items</button>";

} else if ($currentPage == "productadd.php"){

    $button = "<button class='btn btn-outline-success my-2 my-sm-0' id='saveButton' type='submit' name='addProductButton' form='addProductForm'>Save Product</button>";

}



//Deletes selected products
if (isset($_POST['delete']) && !empty($_POST['checkbox'])) {

    $chkarr = $_POST['checkbox'];
    
        foreach((array)$chkarr as $id)  {
        mysqli_query($link, "DELETE FROM product WHERE id=".$id);
    }   
} 



// SAVE PRODUCT FUNCTION

if (isset($_POST['addProductButton'])) {
    
    $sku    = $_POST['sku'];
    $name   = $_POST['name'];
    $price  = $_POST['price'];
    $type   = $_POST['type'];

    // select which attribute to add to DB            
    if ($_POST['size'] != '') {

            $attr = $_POST['size'].' MB';

    } else if ($_POST['weight'] != ''){

            $attr = $_POST['weight'].' Kg';

    } else {

            $attr = $_POST['height'].' x '.$_POST['width'].' x '.$_POST['length'].' CM';

    }
    

    //second check for incomplete form submission with php

    if (!$sku || !$name || !$price || $type == "") {

            $alert = '<div class="alert alert-danger" role="alert">Please complete all fields</div>';
            

        } elseif (is_numeric($price) == false) { 

            $alert = '<div class="alert alert-danger" role="alert">Price must be numeric value.</div>';
            
        } elseif (strlen($sku) != 8 ) {
        
            $alert = '<div class="alert alert-danger" role="alert">SKU must be 8 characters long.</div>';

    //successfully completed form submission

        } else {  $addproduct = "INSERT INTO `product` (sku , name, price , type, attribute) VALUES ('".$sku."', '".$name."', '".$price."', '".$type."' , '".$attr."')";
                
                mysqli_query($link, $addproduct);
                $alert = '<div class="alert alert-success" role="alert"> Product is added to the list</div>';
        }

}  


?>
