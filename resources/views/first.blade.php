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
            <a href="/" id="gorset">City Power Grid</a>
        </div>
			<a href="/" id="logo"><img src="https://image.flaticon.com/icons/png/512/702/702797.png" id="logo" alt="lampa"></a>
			<ul class="menu">
				<li >
					<a class="second" href="/consumers" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Consumers</a>
				</li>
                <li >
					<a class="secondcreate" href="consumer/create" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Login</a>
				</li>
				<li >
					<a class="third" href="/requests" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Requests</a>
				</li>
				<li >
					<a class="thirdcreate" href="request/create" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Leave a Request</a>
				</li>
                <li >
                <a class="mail1" href="/mail/send" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">Send a Mail</a>
				</li>
			</ul>
		</div>
	</header> 
    <div id="main">
        <div id="text">
            <h3>LLP "Gorelectroset" - Ekibastuz power distribution organization, a subject of natural monopoly.
                <br>
                The enterprise was registered as a legal entity on September 4, 1996 at the Ministry of Justice of the Republic of Kazakhstan.
                <br>
                Legal address: Pavlodar region, Ekibastuz, Auezov str., 12.
                <br>
                LLP "Gorelectroset" carries out operation, repair and maintenance of electrical networks with voltage of 35, 10, 0.4 kV in the city of Ekibastuz, the Ekibastuz rural area and the village of Solnechny. </h3>
        </div>
    </div>
    <script src="{{ asset('page1.js') }}"></script>
</body>
</html>