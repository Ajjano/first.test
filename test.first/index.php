<?php
    $r='';
    $g='';
    $b='';

    if($_GET['r_input']&&$_GET['g_input']&&$_GET['b_input']){
        $r=$_GET['r_input'];
        $g=$_GET['g_input'];
        $b=$_GET['b_input'];
    }

    test.first?r_input=123&g_input=50


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="#" method="get">
<?php
echo "<input type='text' name='r_input'>";
echo "<input type='text' name='g_input'>";
echo "<input type='text' name='b_input'>";
echo "<input type='submit'>";

?>
</form>



<div>
    <span>Some text</span>
</div>
</body>
</html>