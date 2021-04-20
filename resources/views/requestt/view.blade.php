<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href= "{{ asset('page3.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIRD PAGE</title>
    <link rel = "icon" href ="https://image.flaticon.com/icons/png/512/702/702797.png" type = "image/x-icon">
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
					<a class="second" href="/consumers" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Потребители</a>
				</li>
                <li >
					<a class="secondcreate" href="consumer/create" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Войти</a>
				</li>
				<li >
					<a class="third" href="/requests" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Заявки</a>
				</li>
				<li >
					<a class="thirdcreate" href="request/create" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Подать заявку</a>
				</li>
                <li >
					<a class="mail1" href="characters.html" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Почта</a>
				</li>
			</ul>
		</div>
	</header> 

    <div>
        <div>
        <h3>
            Предприятие оказывает следующие виды услуг для потребителей:
            <br>
            <br>
            Выполнение строительно-монтажных работ по видам: <br>
                земляные работы общего характера; <br>
                работы по устройству наружных инженерных сетей и сооружений; <br>
                работы по устройству внутренних инженерных систем; <br>
                монтаж технологического оборудования. <br>
            Предоставление услуг автотранспорта и спецтехники 
            <br>
            <br>
            Оставить заявку можно на данной странице войдя в учетную запись; <br>
            Или в офисе по адресу г. Экибастуз, М.Ауэзова 12.
            </h3>
        </div>
        <div>
        {{$requests}}
        </div>
    </div>
    <script src="{{ asset('page3.js') }}"></script>
</body>
</html>