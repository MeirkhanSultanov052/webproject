<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href= "{{ asset('page2.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Потребители</title>
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
            <h3 id="title1">Our Consumers Database</h3>
        </div>
        <div id="table">
            <table id="table1">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Adress</th>
                    <th>Photo</th>
                </tr>
                @forelse ($consumers as $consumer)
                <tr class="table_row">
                    <td>{{$consumer->id}}</td>
                    <td>{{$consumer->name}}</td>
                    <td>{{$consumer->surname}}</td>
                    <td>{{$consumer->adress}}</td>
                    <td><img src="{{$consumer->photo}}" width="100px"></td>
                </tr>
                @empty
                <p id="nothing">There are no profiles registered.</p>
                @endforelse
            </table>
        </div>
    </div>
    <script src="{{ asset('page2.js') }}"></script>
</body>
</html>