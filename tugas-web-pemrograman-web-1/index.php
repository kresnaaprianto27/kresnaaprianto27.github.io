<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page | Website</title>
    <style>
        body {
            background-image: url('images/bg-hero.jpg');
            font-family: Arial, Helvetica, sans-serif;
            display: flex;


        }

        .container {
            margin-top: 200px;
            margin: auto;
            /* border: 1px solid white; */
            width: 80%;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            font-size: 60px;
            text-align: center;
            margin: 20px;
            background-color: yellow;
            padding: 5px 50px;
            border-radius: 10px;
            font-weight: bolder;

        }

        p {
            font-size: 30px;
            color: white;
            margin: 5px;
        }
        .button {
            /* border: 1px solid yellow; */
            width: 40%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
            
        }
        a {
            text-align: center;
            font-size: 30px;
            background: linear-gradient(blue, rgb(0, 87, 133));
            color: white;
            width: 150px;
            height: 40px;
            border-radius: 6px;
            border: 6px solid blue;
            text-decoration: none;
        }
        a:hover {
            background-color: blue;
            transform: scale(1.1);
            transition: 0.5s;
        }
        
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat Datang di My Site</h1>
        <p>Login Sebagai :</p>
        <div class="button">
            <a class="btnauser" href="./pages/user/loginUser/loginUser.php">User</a>
            <a class="btnadmin" href="./pages/admin/loginAdmin/loginAdmin.php">Admin</a>
        </div>
    </div>


</body>

</html>