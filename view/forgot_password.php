<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/view/assets/img/logo/favicon.ico" type="image/png">
    <link rel="stylesheet" href="./view/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo/favicon.ico">
    <title>Bobby Coffee</title>

    <style>
        header {
            /*position: absolute;*/
            background: #333;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }

        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php require 'header.php' ?>
<div style="padding-top: 160px; min-height: 560px; display: flex; justify-content: center;">
    <form method="post" action="?controller=forgot_pw&action=send_mail">
        Điền email của bạn:
        <br>
        <input type="email" name="email" >
        <br>
        <button>Send mail change password</button>
    </form>
</div>
<?php require 'footer.php' ?>
</body>

</html>