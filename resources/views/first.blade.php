<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "icon" href ="https://image.flaticon.com/icons/png/512/702/702797.png" type = "image/x-icon">
    <title>Горэлектросеть</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href= "{{ asset('page1.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="load()">
<header class="container-fluid" id="header">
		<div  class="container-fluid" id="nav">
        <div id="title1">
            <a href="/" id="gorset">Горэлектросеть</a>
        </div>
			<a href="/" id="logo"><img src="https://image.flaticon.com/icons/png/512/702/702797.png" id="logo" alt="lampa"></a>
			<ul class="menu">
				<li >
					<a class="second" href="/second" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Second</a>
				</li>
				<li >
					<a class="third" href="/third" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Third</a>
				</li>
				<li >
					<a class="characters" href="characters.html" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Characters</a>
				</li>
			</ul>
		</div>
	</header> 

    <div id="main">
        <div id="text">
            <h3>ТОО «Горэлектросеть» - Экибастузская распределительная энергопередающая организация, субъект естественной монополии.
                <br>
                Предприятие зарегистрировано, как юридическое лицо, 4 сентября 1996 года в Министерстве юстиции Республики Казахстан.
                <br>
                Юридический адрес: Павлодарская область, г. Экибастуз, ул.Ауэзова,12.
                <br>
                ТОО «Горэлектросеть» осуществляет эксплуатацию, ремонт и обслуживание электрических сетей напряжением 35, 10, 0,4 кВ в городе Экибастузе, Экибастузской сельской зоне и поселке Солнечный.</h3>
        </div>
    </div>
    <script src="{{ asset('page1.js') }}"></script>
</body>
</html>