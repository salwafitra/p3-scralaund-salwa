<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCRALAUND</title>
    <style>
        body {
            font-family: 'Figtree', sans-serif;
			margin: 0;
			padding: 0;
			background: #efefef;
		}
		nav {
			height: 55px;
			background-color: #850000;
		}
		ul {
			left: 1000px;
			margin: 0 0 0 700px;
			list-style: none;
		}
		li {
			float: left;
		}
		li a {
			width: 100px;
			display: block;
			padding: 20px;
			text-decoration: none;
			color: #efefef;
			text-align: center;
		}
		li a:hover {
			background: #efefef;
			color: #850000;
		}
		nav ul button {
			width: 84px;
            height: 36px;
            font-family: 'Figtree', sans-serif;
            margin-top: 10px;
            margin-left: 20px;
            margin-right: 20px;
            left: 1201px;
            top: 74px;
            background: #efefef;
            color: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            border: none;
		}
		nav ul button a {
			text-decoration: none;
			color: #850000;
		}
        .content img{
            height: 400px;
            weight: 400px;
            margin-left: 70px;
            margin-top: 85px;
        }
        .content p {
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
		<ul>
			<li><a href="/">Beranda</a></li>
			<li><a href="/tentang">Tentang</a></li>
			<li><a href="/why">Why Us?</a></li>
			<button><a href="/login">Masuk</a></button>
		</ul>
	</nav>
    <div class="content">
        <img src="frontend/img/laundry/Asset 5.png" style="position: absolute;width: 164px;height: 262px;left: 150px;top: 100px;">
        <p style="position: absolute;width: 300px;height: 60px;left: 175px;top: 492px;">
        Dicuci dengan mesin yang berkualitas
        dan tenaga kerja yang sudah ahli dalam
        menangani noda membandel di segala
        jenis kain.
        </p>
        <img src="frontend/img/laundry/pewangi.png" style="position: absolute;width: 214px;height: 262px;left: 521px;top: 100px;">
        <p style="position: absolute;width: 300px;height: 45px;left: 560px;top: 496px;">
        Dengan pewangi dan pelembut yang berkualitas
        menjadikan pakaian harum semerbak dan
        senantiasa rapih.
        </p>
        <img src="frontend/img/laundry/Asset 6.png" style="position: absolute;width: 201px;height: 262px;left: 891px;top: 100px;">
        <p style="position: absolute;width: 300px;height: 30px;left: 935px;top: 497px;">
        Pakaian yang sudah selesai dijaga dengan baik
        dari debu yang tidak terlihat.
        </p>
    </div>
</body>
</html>