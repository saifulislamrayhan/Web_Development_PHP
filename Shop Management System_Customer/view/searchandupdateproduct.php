<?php
//include("../control/searchandupdatecheck.php");

echo "<h6><a href=../view/home.php> Home Page</a></h6>";
?>


<html>
    <head>
        <link rel="stylesheet" href="../CSS/productsearchandupdatehandle.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                <div id="searchProduct">
                    <fieldset>
                     <legend></legend>  
                     <h1> Search Product </h1>
                     <form method="post" action="" >
                     <label for="pid" id="lpid">Product ID: </label>
                     <input type="text" name="pid" id="pid" placeholder="Product ID"><br>
                     <br>
                     <input type="submit" id="submit" name="search" onclick = "handleFunctionAjax()" value="search">  
                     <input type="reset" id="reset" name="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                </div>
                 </td> 
            </tr>
                <tr>
                    <td>
                    <div id="updateProduct">
                    <fieldset>
                     <legend> </legend>  
                     <h1> Update Product </h1>
                     <form method="post" action="">
                     <input type="text" id="pid" name="pid" hidden value="<?php echo $pid ?>"><br>
                     <br>
                     <label for="pname" id="lpname">Product Name: </label>
                     <input type="text" id="pname" name="pname" value="<?php echo $pname ?>"><br>
                     <br> 
                     <label for="pprice" id="lpprice">Product Price: </label>
                     <input type="text" id="pprice" name="pprice" value="<?php echo $pprice ?>"><br>
                     <br>  
                     <label for="pquantity" id="lpquantity">Product Quantity: </label>
                     <input type="text" id="pquantity" name="pquantity" value="<?php echo $pquantity ?>"><br>
                     <br>  
        
                     <label for="ptype" id="lptype">Product Category: </label>
                     <select name="ptype" id="ptype">
                     <option value="Baby" <?php if($ptype == "Baby"){echo $ptype; }?>>Baby</option>
                     <option value="Beverages" <?php if($ptype == "Beverages"){echo $ptype; }?>>Beverages</option>
                     <option value="Breakfast & Cereal" <?php if($ptype == "Breakfast & Cereal"){echo $ptype; }?>>Breakfast & Cereal</option>
                     <option value="Cookies, Snacks & Candy" <?php if($ptype == "Cookies, Snacks & Candy"){echo $ptype; }?>>Cookies, Snacks & Candy</option>
                     <option value="Produce: Fruits & Vegetables" <?php if($ptype == "Produce: Fruits & Vegetables"){echo $ptype; }?>>Produce: Fruits & Vegetables</option>
                     <option value="Meat & Seafood" <?php if($ptype == "Meat & Seafood"){echo $ptype; }?>>Meat & Seafood</option>
                     <option value="Miscellaneous – gift cards/wrap, batteries, etc" <?php if($ptype == "Miscellaneous – gift cards/wrap, batteries, etc"){echo $ptype; }?>>Miscellaneous – gift cards/wrap, batteries, etc</option>
                     <option value="Health & Beauty, Personal Care & Pharmacy – pharmacy items, shampoo, toothpaste" <?php if($ptype == "Health & Beauty, Personal Care & Pharmacy – pharmacy items, shampoo, toothpaste"){echo $selected; }?>>Health & Beauty, Personal Care & Pharmacy – pharmacy items, shampoo, toothpaste</option>
                     <option value="International Cuisine" <?php if($ptype == "International Cuisine"){echo $ptype; }?>>International Cuisine</option>
                     <option value="Frozen Foods" <?php if($ptype == "Frozen Foods"){echo $ptype; }?>>Frozen Foods</option>
                     <option value="Dairy, Eggs & Cheese" <?php if($ptype == "Dairy, Eggs & Cheese"){echo $ptype; }?>>Dairy, Eggs & Cheese</option>
                     </select><br>
                     <br> 
                     
                     <label for="pdate" id="lpdate">Product Quantity: </label>
                     <input type="date" id="pdate" name="pdate" value="<?php echo $pdate ?>"><br>
                     <br>
                     <input type="submit" id="update" name="update" value="UPDATE">
                     <input type="reset" id="reset" name="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                </div>
                    </td>

                </tr>
        </table>
        <p id="demo"></p>
         <!-- Java Script File -->
         <script src="../JS/searchProductHandle.js"></script>
    </body>
    <?php echo $error; ?>
</html>
<?php  
echo "<h6><a href=../control/logout.php> Log Out</a></h6>";
?>