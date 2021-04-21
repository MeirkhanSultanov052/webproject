<html lang="en">
<head>
<link rel = "icon" href ="https://image.flaticon.com/icons/png/512/702/702797.png" type = "image/x-icon">
    <title>Send mail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href= "{{ asset('createmail.css') }}" />
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
    
    <div>
        <div id="main">
            <h1>Send Email</h1>
            <form method="POST" action="{{ route('send_mail')}}">
                @csrf
                <input type="text" name="sender" placeholder="sender">
                <input type="text" name="message" placeholder="message">
                <input type="submit" name="send" value="Send">
            </form>
            </div>
    </div>
    <script src="{{ asset('page1.js') }}"></script>
</body>
</html>  