<?php
include("../control/searchandupdatedeliverycheck.php");

echo "<h6><a href=../view/home.php> Home Page</a></h6>";
?>


<html>
    <head>
        <link rel="stylesheet" href="../CSS/searchandupdateddeliveryhandle.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                <div id="searchdelivery">
                    <fieldset>
                    <h1> Search Assign Delivery </h1> 
                     <form method="post" action="" >
                     <label for="dmid" id="dmid">Delivery Man ID: </label>
                     <input type="text" name="dmid" id="spid" placeholder="Product ID"><br>
                     <br>
                     <input type="submit" name="search" id="search" onclick = "handledeliveryFunctionAjax()" value="search">  
                     <input type="reset" name="reset" id="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                </div>
                 </td> 
            </tr>
                <tr>
                    <td>
                    <div id="updatedelivery">
                    <fieldset>
                     <h1> Update Assign Delivery </h1>
                     <form method="post" action="">
                     <label for="puid" id="lpuid">Purchase ID: </label>
                     <input type="text" name="puid" value="<?php echo $purid ?>"><br>
                     <br>
                     <label for="traid" id="ltraid">Transaction ID: </label>
                     <input type="text" name="traid" value="<?php echo $traid ?>"><br>
                     <br> 
                     <label for="opl" id="lopl">Order Placed: </label>
                     <input type="text" name="opl" value="<?php echo $opl ?>"><br>
                     <input type="text" name="dmid" hidden=true value="<?php echo $dmid ?>"><br>
                     <br>  
                     <label for="pdm" id="lpdm">Transaction ID: </label>
                     <input type="text" name="pdm" value="<?php echo $pdm ?>"><br>
                     <br>
                     <input type="submit" name="update"  id="update" value="UPDATE">   
                     <input type="reset" name="reset" id="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                    </div>
                    </td>

                </tr>
        </table>
        <div name="demodiv">
            <p id="para"></p>
        </div>
         <!-- Java Script File -->
         <script src="../JS/handleDeliveryFunctionAjax.js"></script>
    </body>
    <?php echo $error; ?>
</html>
<?php  
echo "<h6><a href=../control/logout.php> Log Out</a></h6>";
?>