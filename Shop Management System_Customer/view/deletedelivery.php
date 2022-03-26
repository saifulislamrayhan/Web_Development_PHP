<?php
include("../control/deletedeliverycheck.php");

echo "<h3><a href=home.php>Home Page</a></h3>";

?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/deletedelivery.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <div class="deletedelivery">
                    <fieldset>
                    <h1> Delete Product </h1>  
                     <form method="post" action="">
                    <label for="dmid" id="ldmid">Delivery Man ID: </label>
                     <input type="text" id="dmid" name="dmid" placeholder="Delivery Man ID"><br>
                     <br>
                     <input type="submit" id="delete" name="delete" value="DELETE">  
                     <input type="reset" id="reset" name="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                    </div>
                </td>
            </tr>
            </table>
    </body>
    <?php echo $error; ?>
</html>


<?php
echo "<h6><a href=../control/logout.php> Log Out</a></h6>";
?>