<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCRALAUND</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Barlow+Condensed:wght@300&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            /* font-family: 'Aboreto', cursive;
            font-family: 'Barlow Condensed', sans-serif;
            font-family: 'Montserrat', sans-serif; */
            /* background: #FFF6C3; */
            font-family: 'Figtree', sans-serif;
            background-color: #EFEFEF;
        }

        .card{
            /* margin-bottom: 15px; */
            margin-top: 65px;
            margin-left: 175px;
            background-color: #850000;
            width: 1000px;
            height: 500px;
            display: flex;
            border-radius: 48px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        .login-card {
            position: absolute;
            margin-top: 3px;
            width: 360px;
            height: 300px;
            left: 750px;
            top: 150px;
            background: #FFFFFF;
            padding: 10px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        .card img{
            display: block;
            width: 420px;
            height: 414px;
            padding-top: 20px;
            padding-left: 70px;
        }

        .login-card h3{
            /* position: absolute; */
            font-size: 30px;
            color: #850000;
            width: 131px;
            height: 48px;
            margin-left: 125px;
            top: 10px;

        }
        .login-card input {
        /* input[type=text],
        input[type=password]{ */
            /* margin-top: 60px; */
            text-align: center;
            outline: 0;
            background: #f2f2f2;
            width: 85%;
            border: 0;
            margin: 0 0 15px;
            padding: 10px;
            box-sizing: border-box;
            font-size: 14px;
            margin-left: 30px;
        }
        .login-card button{
            position: absolute;
            color: #FFFFFF;
            width: 180px;
            height: 40px;
            left: 100px;
            top: 250px;
            background: #850000;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            border: none;
        }
        .login-card button a {
            color: #FFFFFF;
            padding: 2px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="img">
            <!-- <img src="logo.png" alt="" style="margin-top: -50px;"> -->
            <img src="frontend/img/laundry/tabletlogin.svg" alt="" style="margin-top: 10px;">
        </div>
        <section></section>
        <div class="login-card">
            <h3>MASUK</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="masukkan email"><br>
                <input type="password" name="password" placeholder="masukkan password"><br><br>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>