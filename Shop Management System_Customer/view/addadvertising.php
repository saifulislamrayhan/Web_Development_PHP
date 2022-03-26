<?php

;
echo "<h3><a href=home.php>Home Page</a></h3>";
include("../control/advertisingcheck.php");

?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/addadvertising.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <div class="advertising">
                    <fieldset>
                     <h1> Add Advertising </h1>
                     <form method="post" action="">
                     <label for="aid" id="laid">Advertising ID: </label>
                     &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<input type="text" name="aid" id="aid" placeholder="Advertising ID: "><br>
                     <br>
                     <label for="adetails" id="ladetails">Advertising Details: </label>
                     <input type="text" name="adetails" id="adetails" placeholder="Advertising Details: "><br>
                     <br> 
                     <input type="submit" id="submit" name="addadvertising" value="ADD">  
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