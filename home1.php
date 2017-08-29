<?php
$year = '';
$month = '';
$result = '';

if(isset($_GET['year'])) {
    $year = $_GET['year'];
    $month = $_GET['month'];
}


    if ($year % 4 == 0){
    if ($year % 100 == 0){
        if ($year % 400 == 0){
            echo $result='29';
        }else{
            echo $result='28';
        }
    }else{
        echo $result='29';
    }
}else{
        echo $result='28';
    }



?>

<form>

<input name="year" value="<?php echo $year; ?>" />
    年
<input name="month" value="<?php echo $month; ?>" />
    月
<input type="submit"  value="=>" />

<?php echo $result ?>天

</form>