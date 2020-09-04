<?php

include('functions.php');

?>

<html>

<head>

    <title>Scandiweb Test</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">



</head>

<body>

<div class="container-fluid h-auto">
    
    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
        <a class="navbar-brand" href="index.php">Product List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="productadd">Add New Product</a>
            </li>
            </ul>
                <?php echo $button ?>
            </div>
    </nav> 
    
    