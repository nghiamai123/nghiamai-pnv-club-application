<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .con{
            margin: 0 auto;
        }
        img{
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="con" style="display: grid; width: 450px; border: 5px dashed red;">
        <img src="cetifica-removebg-preview.png" alt="ct" style="width: 400px; height: 300px;" >
        <div style="text-align: center;">
        <h1> Thx you <?= $_POST["Name"]?> !!</h1> 
        <p>We receied yor application for the 
            <?php 
                if(isset($_POST['Robotic_Club']))
                {
                $selected_val = $_POST['Robotic_Club'];  // Lưu trữ giá trị được chọn trong biến
                echo $selected_val;  // Hiển thị giá trị đã chọn
                }
            ?> 
        </p>
        <p>You will be available on 
        <?php 
                if(isset($_POST['wether']))
                {
                $a = $_POST['wether'];  
                echo $a;
                }
            ?> 
        </p>
        <p>You are
        <?php 
            $arr = $_POST["the"];// key
            // print_r($arr);
            $dis = implode(" and ", $arr);
            echo $dis;
        ?>
        
        </p>
        </div>
    </div>
</body>
</html>