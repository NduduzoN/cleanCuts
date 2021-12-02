
<?php
echo "<h2>New Service</h2>";
        echo"<form method=get><input type=hidden name=controller value='service'>
         <input type=hidden name=action value='newDetails'>";
           echo"Enter hairstyle id<br><input type=text name='hairstyle_ID' placeholder='Enter hairstyle id' Required><br><br>
            Enter hairstyle name<br><input type=text name='hairstyle_description' placeholder='Enter hairstyle name' Required><br><br>
            Enter Price<br><input type=text name='hairstyle_price' placeholder='Enter Price' Required><br>";

            echo"<input type=submit name='upload' value='Upload'>";
?>
        </form>
<?php
        echo "<a href='?controller=home&action=home' name='home'>Admin Home</a>";
?>
