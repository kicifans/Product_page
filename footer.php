
        

</div> <!--container end-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<div class="footer-copyright text-center py-3">

    2020 - ScandiWeb tests - Krists Reiznieks

</div> <!-- FOOTER -->

<script>





//Show product type attribute form based on type

    $(function() {

        $('#sizeForm').hide(); 
        $('#weightForm').hide(); 
        $('#dimensionsForm').hide();

        $('#type').change(function(){

            if($('#type').val() == 'DVD-Disc') {
                $('#sizeForm').show(); 
                $('#weightForm').hide(); 
                $('#dimensionsForm').hide(); 

            } else if ($('#type').val() == 'Book'){
                
                $('#sizeForm').hide(); 
                $('#weightForm').show(); 
                $('#dimensionsForm').hide(); 

            } else if ($('#type').val() == 'Furniture'){

                $('#sizeForm').hide(); 
                $('#weightForm').hide(); 
                $('#dimensionsForm').show(); 

            }

        });

    });


//Check if form is completed correctly with Jquery
    

    $('#saveButton').on('click', function(event){

        var errorMessage = "";

        if (($('#sku').val() == '') || ($('#name').val() == '') || ($('#price').val() == '') || ($('#type').val() == '')) {
 
            errorMessage += "Please complete all fields<br>";
        
        }

        if ($.isNumeric($('#price').val()) == false ) {

            errorMessage += "Price must be numeric value<br>";

        }

        if ($('#sku').val().length != 8) {

            errorMessage += "<p>SKU must be 8 characters long<br>";

        }

        if (($('#type').val() == 'DVD-Disc') && (($('#size').val() == '') || ($.isNumeric($('#size').val()) == false))){

            errorMessage += "Please enter DVD-Disc's size as numeric value<br>";                    

        }

        if (($('#type').val() == 'Book') && (($('#weight').val() == '') || ($.isNumeric($('#weight').val()) == false))){

            errorMessage += "Please enter Book's size as numeric value<br>";                    

        }

        if (($('#type').val() == 'Furniture') && (($('#height').val() == '') || ($('#width').val() == '') || ($('#length').val() == ''))){

            errorMessage += "Please enter Furniture's size<br>";                    

        }
        
        if (errorMessage != "" ) {

        $("#errorMessage").html('<div class="alert alert-danger" role="alert">' + errorMessage + "</div>");
        event.preventDefault();

        }

    });

    
</script>

</body>

</html>

<!-- 
       

    -->