<?php
$dayColors = [
'Sunday'=>'green',
'Monday'=>'red',
'Tuesday'=>'blue',
'Wednesday' =>'#98fb98',
'Thursday'=>'#f0e68c',
'Friday'=>'#dda0dd',
'Saturday'=>'#c0c0c0'
];
$currentDay =date('l');
$backgroundColor ='lightgreen';
if (array_key_exists($currentDay, $dayColors))
{
 $backgroundColor = $dayColors[$currentDay];
}
?>
<html>
<head>
<title> Background Color based on the day of the week </title>
<style>
body {
 background-color:<?php echo $backgroundColor; ?>;
 }
</style>
</head>
<body>
<h1> welcome! today is <?php echo $currentDay; ?></h1>
</body>
</html>