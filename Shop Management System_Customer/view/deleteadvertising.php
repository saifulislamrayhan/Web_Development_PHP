<?php
include("../control/deleteadvertisingcheck.php");
echo "<h3><a href=home.php>Home Page</a></h3>";

?>

<html>
    <head>
        <link rel="stylesheet" href="../CSS/deleteadvertising.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <div class="deleteadvertising">
                    <fieldset>
                    <h1> Delete Advertising </h1> 
                    <form method="post" action="">
                    <label for="aid" id="laid">Advertising ID: </label>
                     <input type="text" name="aid" id="aid" placeholder="Advertising ID"><br>
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