<?php
   $a = $b = $result = '';
if(isset($_GET['a'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $result = $a + $b;
    //echo "--> $a + $b = $result";
}
?>

<form>



<input name="a" value="<?php echo $a; ?>" />
    <select>
        <option>+</option>
        <option>-</option>
        <option>x</option>
        <option>/</option>
    </select>
<input name="b" value="<?php echo $b; ?>" />

<input type="submit"  value="=" />
<?php echo $result ?>


</form>