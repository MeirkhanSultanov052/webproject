<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href= "{{ asset('page3.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявки</title>
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

    <div>
        <div>
        <h3>
            The company provides the following types of services for consumers:
            <br>
            <br>
            Construction and installation works by type: <br>
                general earthworks; <br>
                works on the arrangement of external engineering networks and structures; <br>
                work on the arrangement of internal engineering systems; <br>
                installation of technological equipment. <br>
            Provision of services of vehicles and special equipment.<br>
            <br>
            You can leave a request on this page by logging into your account; <br>
            Or in the office at the address Ekibastuz, M.Auezov 12.
            </h3>
        </div>
        <div id="divtable">
            <h3 id="reqs">Requests Database</h3>
        <table id="table1">
                <tr>
                    <th>Id</th>
                    <th>Consumer Id</th>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
                @forelse ($requests as $request)
                <tr class="table_row">
                    <td>{{$request->id}}</td>
                    <td>{{$request->consumer_id}}</td>
                    <td>{{$request->title}}</td>
                    <td>{{$request->body}}</td>
                </tr>
                @empty
                <p id="nothing">There are no profiles registered.</p>
                @endforelse
            </table>
        </div>
    </div>
    <script src="{{ asset('page3.js') }}"></script>
</body>
</html>