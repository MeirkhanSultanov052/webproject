<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href= "{{ asset('createcon.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel = "icon" href ="https://image.flaticon.com/icons/png/512/702/702797.png" type = "image/x-icon">
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
        <div>
            <h3 id="title1">Create а new Account</h3>
        </div>
        <div class="container">
<form id = "form" method="POST" action="{{ route('add-consumer')}}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="adress" placeholder="adress">
        <input type="file" name="photo" accept="image/png,image/jpeg">
        <button type="submit">Create</button>
    </form>
</div>
    </div>
    <script src="{{ asset('page2.js') }}"></script>
</body>
</html>

