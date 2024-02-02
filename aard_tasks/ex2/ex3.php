<?php include 'header.php'; ?>
    <div class="content">
 
 <h5>3.2 Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print
     “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h5>
    
  <div class="input-group">
  

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Firstname: <input type="text" name="firstname"aria-label="First name" class="form-control"> <br><br>
    Lastname: <input type="text" name="lastname"aria-label="Last name" class="form-control"> <br><br>
    <input type="submit" value="submit">
 </form>

 </div>

 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){

              $firstname=$_POST["firstname"];
              $lastname=$_POST["lastname"];

echo "Hello" . $firstname . $lastname . ", You are welcome to my site.";
 }
?>

<h5>HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, 
    you can use the same table. </h5>

    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    ?>

    <table>
        <tr><th>S.n.</th> <th>Name</th> <th>Grade</th></tr>
        <tr>
            <td>1</td>
            <td>John</td>
            <td> <?php echo $g1 ?> </td>
        </tr>

        <tr>
            <td>2</td>
            <td>Alice</td>
            <td> <?php echo $g2 ?> </td>
        </tr>

        <tr>
            <td>3</td>
            <td>Bob</td>
            <td> <?php echo $g3 ?> </td>
        </tr>
    </table>

<h5>String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
    Join them together and print the length of the string.</h5>
<?php
$str1 = "Hello";
$str2 = "World";
$joinedString = $str1 . $str2;

echo "Length of the joinedString: " . strlen($joinedString);


?>

<h5>Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h5>
<?php
$a=298;
$b=234;
$c=46;

$sum= $a + $b +$c;

echo "Sum:" . $sum;


?> 

<h5>Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER</h5>

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

        
</div>
</body>
 <?php include 'footer.php'; ?>








    
