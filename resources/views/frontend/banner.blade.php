{{-- <!-- begin container -->

<style>
    h3{
        font-family: "Montserrat", Helvetica, Arial, serif;
        color: #850000;
        font-weight: bolder;
        font-align: center;
    }
</style>

<div class="container">
    <a href="{{route('login')}}">Masuk</a>
    <h3>Lacak Progress Laundrymu</h3>
    <div class="input-group m-b-20">
        <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : TR0392928" />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i></button>
        </span>
    </div>
    @include('frontend.modal')
</div> --}}


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SCRALAUND</title>
    @include('layouts.style')
	<style>
		body {
            height: 750px;
			font-family: "Montserrat", Helvetica, Arial, serif;
			margin: 0;
			padding: 0;
			background: #efefef;
		}
		nav {
			height: 55px;
			background-color: #850000;
		}
		ul {
			left: 1100px;
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
            text-decoration: none;
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
        li button a:hover {
            text-decoration: none;
        }
		img{
            margin-top: 15px;
            width: 550px;
            /* height: 546px; */
        }
        .content{
            height: 602px;
            text-align: center;
        }
		.content h1{
            /* position: absolute; */
            text-align: center;
            margin: 0 auto;
            width: 446px;
            height: 50px;
            margin-top: 15rem;
            color: #850000;
        }
        .content form input{
            /* position: absolute; */
            width: 720px;
            height: 30px;
            /* left: calc(50% - 750px/2 + 10.5px);
            top: calc(50% - 80px/2 + 105px); */
            background-color: #850000;
            color: #FFFFFF;
            /* background: #FFFFFF; */
            border-radius: 40px;
            border: none;
            text-align: center;
        }
        .form-input {
            position: relative;
            margin: 0 auto;
            width: 720px;
        }
        .form-input i {
            position: absolute;
            color: #FFFFFF;
            /* left: 1rem; */
            left: 2%;
            top: 25%;
        }
        footer {
            height: 20px;
            padding-bottom: 0;
        }
        h3 {
            text-align: center;
            font-weight: bold;
        }
        p {
            text-align: center;
            font-size: 30px;
        }
        h6 {
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
	<div class="container">
    <div class="content">
        <h1>SELAMAT DATANG DI</h1>
        <img src="frontend/img/laundry/logo.png" alt="" class="">
        <form>
            <!-- <img src="search.svg" alt="" srcset="" class="logo-1 "> -->
            <div class="form-input">
                <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : TR0392928" />
                <span class="input-group-btn">
                    <button type="button" class="btn btn-lg" id="search-btn">submit</button>
                </span>
            </div>
            @include('frontend.modal')
        </form>
    </div>
    </div>
    <div class="footer">
        <h3>SCRALAUND</h3>
        <p>Scralaund sendiri dibuat untuk menyediakan jasa laundry mulai dari <br>
        pakaian, bed cover, boneka, dan lain-lain.
        </p><br>
        <h6>&copy 2023 SCRALAUND</h6>
    </div>

    @include('layouts.script')
</html>
