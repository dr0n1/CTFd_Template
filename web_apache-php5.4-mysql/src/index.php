<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xxxx管理系统</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            width: 100%;
            height: 100%;
            background: #475a66;
        }

        #box {
            width: 550px;
            height: 410px;
            margin: auto;
            margin-top: 100px;
            background: #ffffff;
            border-radius: 20px;
            
        }

        #title {
            width: 100%;
            height: 100px;
            border-bottom: 1px solid #f0f0f0;
            font-size:40px;
            font-weight: bold;
            text-align: center;
            line-height:100px;
        }

        #input {
            margin-left:50px;
            width: 450px;
            height: 200px;
            margin-top: 50px;
        }

        #input input{
            border-radius: 20px;
            height: 40px;
            background: #f0f0f0;
            margin-top:25px;
            margin-left:10px;
            border:none;
            outline: 0 none;
        }


        .inputtext>input{
            width:350px;
            line-height: 40px;
            padding-left: 40px;
            padding-right: 40px;
        }

        #submit {
            width: 450px;
            
        }

        #submit>input{
            width:430px;
            
        }

        #output{
            margin-top:15px;
            width:100%;
            text-align:center;
        }
    </style>
</head>

<body>
    <div id="box">
        <div id="title">
            xxx管理系统
        </div>
        <div id="input">
            <form action="" method="GET">
                <div class="inputtext">
                    <input type="text" name="username" value="" placeholder="用户名">
                    <input type="text" name="password" value="" placeholder="密码">
                </div>
                <div id="submit">
                    <input type="submit">
                </div>
            </form>
        </div>
        <div id="output">
            <h5>
<?php
error_reporting(0);
include 'dbConnect.php';

$username = $_GET['username'];
$password = $_GET['password'];
if (isset($_GET['username']) && isset($_GET['password'])) {
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $mysqli->query($sql);
    if (!$result)
        die(mysqli_error($mysqli));
    $data = $result->fetch_all();
    if (!empty($data)) {
        echo '登录成功！';
    } else {
        echo "用户名或密码错误";
    }
}
?></h5>
        </div>

    </div>
</body>

</html>
