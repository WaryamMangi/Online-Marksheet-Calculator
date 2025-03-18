<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: navy;
        }
        label{
            display: inline-block;
            text-align: left;
        }
        form{
            background-color: aqua;
            width: 200px;
            padding-left: 50px;
            padding-bottom: 10px;
            margin-top: -20px;
            border: 5px solid black;
            border-radius: 5px;
        }
        h2{
            background-color: beige;
            display: inline-block;
            width: 250px;
            text-align: center;
            border-radius: 5px;
            border: 5px solid black;
        }
        .form{
            margin-top: 50px;
            margin-left:560px;
        }
        .buttons{
            margin-top: 5px;
        }
        .reset{
            margin-left: 40px;
        }
        .intro{
            text-align: center;
            background-color:peachpuff;
            border-radius: 500000px;
            width:1350px;
        }
    </style>
</head>
<body>
<div class="intro">
    <h1>Welcome to Online Marksheet Calculator</h1>
</div>
    <div class="form">
        <h2>Enter Your Details</h2>
        <form action="process.php" method="POST">
            <div>
             <br>
                <label for="">Enter Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="">Enter English Marks</label>
                <input type="text" name="english">
            </div>
            <div>
                <label for="">Enter Maths Marks</label>
                <input type="text" name="maths">
            </div>
            <label for="">Enter Computer Marks</label>
            <input type="text" name="computer">
            <div>
                <label for="">Enter Science Marks</label>
                <input type="text" name="science">
            </div>
            <div class="buttons">
                <label for="">&nbsp;</label>
                <input type="submit" value="Generate Marksheet">
                <div class="buttons reset">
                    <label for="">&nbsp;</label>
                    <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>
