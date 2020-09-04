<?php 

    $currentPage = "productadd.php";

    include('header.php');

?>


<h1 class="display-4 text-center">Add New Product</h1>

    <br>

    <form id="addProductForm" method="post">  <!-- ADD NEW PRODUCT FORM -->

            <div class="row justify-content-md-center" id="errorMessage"> <!-- product form alert div -->
                <?php echo $alert ?> 
            </div>

            <div class="row justify-content-md-center">  <!-- add sku -->
                <div class="form-group col-sm-3">
                    <label for="sku" >Enter product SKU</label>  
                </div>
                <div class="form-group col-sm-3">
                    <input type="text" class="form-control" id="sku" name="sku">
                    <small class="form-text text-muted">SKU must be 8 characters long</small>
                </div>
            </div> 

            <div class="row justify-content-md-center"> <!-- add name -->
                <div class="form-group col-sm-3">
                    <label for="name">Enter product Name</label>
                    </div>
                    <div class="form-group col-sm-3">
                    <input type="text" class="form-control" id="name" name="name"> 
                    <small class="form-text text-muted">E.g. Movie "Shrek 3"</small>
                </div>
            </div> 
            
            <div class="row justify-content-md-center"> <!-- add price -->
                <div class="form-group col-sm-3">
                    <label for="price">Enter product Price</label>
                    </div>
                    <div class="form-group col-sm-3">
                    <input type="text" class="form-control" id="price" name="price"> 
                    <small class="form-text text-muted">Price must be numeric</small>
                </div>
            </div> 

            <div class="row justify-content-md-center"> <!-- choose type -->
                <div class="form-group col-sm-3">
                    <label for="price">Choose product type</label>
                    </div> 
                    <div class="form-group col-sm-3">
                    <select id="type" name="type" class="form-control">
                        <option></option>
                        <option name="dvd">DVD-Disc</option>
                        <option name="book">Book</option>
                        <option name="furniture">Furniture</option>
                    </select>
                    </div>
            </div> 

            <div id="sizeForm" class="row justify-content-md-center">  <!--dvd type attribute -->
                <div class="form-group col-sm-3">
                    <label for="attribute">Enter product Size (MB)</label>
                </div>
                <div class="form-group col-sm-3">
                    <input type="text" class="form-control" class="attribute" id="size" name="size">
                    <small class="form-text text-muted">Product size must be numeric value</small> 
                </div>
            </div>
            <div id="weightForm" class="row justify-content-md-center"> <!-- book type attribute -->
                <div class="form-group col-sm-3">
                    <label for="attribute">Enter product Weight (Kg)</label>
                </div>    
                <div class="form-group col-sm-3">
                    <input type="text" class="form-control" class="attribute" id="weight" name="weight"> 
                    <small class="form-text text-muted">Product weight must be numeric value</small>
                </div>
            </div>
            <div id="dimensionsForm" class="row justify-content-md-center"> <!-- furniture type attribute -->
                <div class="form-group col-sm-3">
                    <label for="attribute">Enter product Dimensions</label>
                </div>  
                    <div class="col-sm-1">
                        <input type="text" class="form-control dimensions attribute" id="height" name="height">
                        <small class="form-text text-muted">Height</small>
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control dimensions attribute" id="width" name="width"> 
                        <small class="form-text text-muted">Width</small>
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control dimensions attribute" id="length "name="length">  
                        <small class="form-text text-muted">Length</small>
                    </div>
                </div>  

                <br>

        </form> 


<?php
    
    include('footer.php');

?>

