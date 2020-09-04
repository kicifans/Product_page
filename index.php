<?php 

$currentPage = "index.php";

include('header.php');

?>


<h1 class="display-4 text-center">Product List</h1>

<br>

<form method="post" name="select" id="select">
    <div class="row">

    <?php
    //ADDS PRODUCTS FROM DATABASE
        $query="SELECT * FROM product";
        $result = mysqli_query($link, $query);
        $attributeEcho = '';

        while ($rows=mysqli_fetch_assoc($result)) {
        
    ?> 
        <!--- Cards which contains product info -->
        <div class="card" style="width: 14rem;">
            <img src="images/<?= ($rows['type'])?>.jpeg" class="card-img-top" alt="..."><!--adds image depending on item type-->
            <div class="card-body">
                <h5 class="card-title"> <?= $rows['name']; ?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Product SKU: <strong><?= $rows['sku']; ?></strong></li>
                <li class="list-group-item">Product Price: <strong><?= $rows['price']; ?> &euro; </strong></li>
                <li class="list-group-item">Product Size: <strong><?= $rows['attribute']?></strong></li>
                <div id="chechboxContainer">
                    <input type="checkbox" name="checkbox[]" id="checkbox" value="<?= $rows['id'] ?>">Select this item
                </div>
            </ul>
        </div>
    
    <?php  }   ?>  
   
    </div> 
</form>

<?php

    include('footer.php');

?>