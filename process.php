<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Marksheet</title>
    <style>
        body{
            margin:0;
            padding:0;
            background-color: navy;
        }
        .main{
            margin-left: 570px;
        }
        .welcome{
            color:peachpuff;
            margin-left: 5px;
        }
        .fail{
            background-color:red;
        }
        .tableintro{
            text-align: center;
            font-weight: bold;
        }
        .back{
            margin-top:100px;
        }
        .table{
            color: peachpuff;
        }
        .back{
            color: peachpuff;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
$name = $_POST['name'];
$english=$_POST['english'];
$maths=$_POST['maths'];
$computer=$_POST['computer'];
$science=$_POST['science'];

$total_marks =  $english + $maths + $science + $computer;
$percentage = ($total_marks / 400) * 100;
$grade = "F";
if($percentage >=80){
    $grade = "A1";
}
if($percentage >= 70 && $percentage <= 79){
    $grade = "A";
}
if($percentage >= 60 && $percentage < 70){
    $grade = "B";
}
if($percentage >= 50 && $percentage < 60){
    $grade = "C";
}
if($english < 50 || $maths < 50 || $science < 50 || $computer < 50){
    $grade = "F";
}
 ?>
 <div class="welcome"><p> <h1>Welcome <?php echo $name; ?> , here is your marksheet:</h1> </p></div>
 <div class="main">
<table border="1" class="table" >
    <tr>
        <td colspan="2" class="tableintro">Marksheet</td>
    </tr>
    <tr>
        <td>English</td>
        <td> <?php echo  $english;?></td>
    </tr>
    <tr>
        <td>Maths</td>
        <td > <?php echo  $maths;?></td>
    </tr>
    <tr>
        <td>Computer</td>
        <td> <?php echo  $computer;?></td>
    </tr>
    <tr>
        <td>Science</td>
        <td> <?php echo  $science;?></td>
    </tr>
    <tr>
        <td>
            Total Obtained Marks
        </td>
        <td>
            <?php echo $total_marks; ?>
        </td>
    </tr>
    <tr>
        <td>
            Percentage
        </td>
        <td>
            <?php echo $percentage; ?>%
        </td>
    </tr>
    <tr>
        <td>
            Grade
        </td>
        <td>
            <?php echo $grade; ?>
        </td>
    </tr>
</table>

<div class="back">
Back to Home:
<a href="marksheet.php"><button>Main Page</button></a>
</div>

