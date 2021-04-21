<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECOND PAGE</title>
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
					<a class="second" href="/second" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Потребители</a>
				</li>
				<li >
					<a class="third" href="/third" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Заявки</a>
				</li>
				<li >
                <a class="mail1" href="characters.html" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Почта</a>
				</li>
			</ul>
		</div>
	</header> 
    <div id="main">
        <div>
            <h3 id="title1">Our Consumers Database</h3>
        </div>
        <div>
            
        </div>
    </div>
    <script src="{{ asset('page2.js') }}"></script>
</body>
</html>