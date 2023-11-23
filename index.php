<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .border1 {
            border: 5px dashed red;
            padding: 40px 0px;
            width: 50%;
            margin: 0 auto !important;
            line-height: 2.5rem;
        }
        .border1 form{
            margin: 0 auto;
            width: 70%;
        }
        .title{
            display: grid;

        }
        form input[type="submit"]{
            width: 90%;
            height: 30px;
            background-color: orange;
        }
        form input[type="submit"]:hover{
            background-color: darkorange;
        }

        form input[type="text"]{
            margin-left: 30%;
            height: 28px;
            position: relative;
        }

        form input[type="radio"]{
            margin-left: 20%;
        }

        form .select{
            position: absolute;
            left: 41.4%;
            width: 150px !important;
            height: 30px !important;

        }
        
    </style>
</head>
<body>
<div class="border1">
    <form action="result.php" method="POST">
        <div style="display: flex;">
            <label for="name" class="title">Name</label>
            <input type="text" name="Name" id="name">
        </div>
        
        <div style="display: flex;"> 
        <label for="club" class="title">Club you want to apply</label>
        <div class="select">
            <select name="Robotic_Club" id="club" class="select">
                <option value="Robotic Club1">Robotic Club1</option>
                <option value="Robotic Club2">Robotic Club2</option>
                <option value="Robotic Club3">Robotic Club3</option>
            </select>
        </div>
        </div>
        <label class="title">Best time for you </label>
        <input type="radio" name="weather" value="saturday morning" id="morning">
        <label for="morning">Saturday morning</label>
        <input type="radio" name="weather" value="saturday morning" id="morning">
        <label for="morning">sumday afternoon</label>
        <input type="radio" name="weather" value="saturday afternoon" id="afternoon">
        <label for="afternoon">Saturday afternoon</label>

        <label class="title">Your skills</label>
        <div style="display: flex; gap:15px; margin-left: 20%; ">
        <div style="display: grid; grid-template-columns: auto auto; column-gap: 20px;" >
            <input type="checkbox" name="the[]" value="the best coder" id="coder">
        <label for="coder">The best coder</label>
            <input type="checkbox" value="a superstar" name="the[]" class="in" id="superstar">
            <label for="superstar">A superstar</label>
            <input type="checkbox" value="singer" class="in" name="the[]" id="singer">
            <label for="singer">Singer</label>
            <input type="checkbox" value="the best eater" class="in" name="the[]" id="eater">
            <label for="eater">The best eater</label>
        </div>
        <div style="display:grid; grid-template-columns: auto auto; column-gap: 20px;">
            <input type="checkbox" value="good in arts" name="the[]" id="arts">
        <label for="arts">Good in arts</label>
            <input type="checkbox" value="a crazy dancer" class="con" name="the[]" id="dancer">
            <label for="dancer">A crazy dancer</label>
            <input type="checkbox" value="good in design" class="con" name="the[]" id="design">
            <label for="design">Good in design</label>
            <input type="checkbox" value="good in speeches" class="con" name="the[]" id="speeches">
            <label for="speeches">Good in speeches</label>
        </div>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>