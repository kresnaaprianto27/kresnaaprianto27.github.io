<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            background: linear-gradient(#8562f6, #b83bbf);
            width: 100%;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
        }

        h2 {
            color: white;
            font-size: 60px;
            text-align: center;
            text-shadow: 2px 3px 4px black;
            margin: 30px;
        }

        h3 {
            margin: 10px;
            font-size: 40px;
            color: yellow;
            text-shadow: 2px 3px 4px black;
        }

        .btnopsi {
            /* border: 1px solid black; */
            width: 60%;
            display: flex;
            justify-content: space-evenly;
        }

        .btnopsi a {
            border-radius: 10px;
            border: 5px solid rgb(0, 70, 0);
            color: white;
            background-color: rgb(20, 164, 20);
            font-size: 25px;
            font-weight: bold;
            text-shadow: 2px 2px 3px black;
            box-shadow: 2px 2px 3px black;
            width: 300px;
            height: 60px;
            text-decoration: none;
            text-align: center;
            line-height: 60px;
        }

        .btnopsi a:hover {
            background: linear-gradient(#62f69b, #5abf3b);
            color: black;
            text-shadow: 2px 2px 3px rgb(255, 255, 255);
            transform: scale(1.1);
            transition: 1s;

        }
    </style>
</head>

<body>
    <div class="container">
        <h2> Aplikasi Sistem Pakar <br>
            Diagnosa Gangguan Mental</h2>
        <h3>Login sebagai</h3>
        <div class="btnopsi">
            <a href="admin/loginAdmin/loginAdmin.php">Admin</a>
            <a href="user/loginUser/LoginUser.php">User</a>
        </div>
    </div>

</body>

</html>