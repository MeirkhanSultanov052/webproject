<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href= "{{ asset('page3.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('lang.requests')</title>
    <link rel = "icon" href ="https://image.flaticon.com/icons/png/512/702/702797.png" type = "image/x-icon">
</head>
<body onload="load()">
    <header class="container-fluid" id="header">
		<div  class="container-fluid" id="nav">
        <div id="title1">
            <a href="/main/ru" id="gorset">@lang('lang.city_power_grid')</a>
        </div>
			<a href="/main/ru" id="logo"><img src="https://image.flaticon.com/icons/png/512/702/702797.png" id="logo" alt="lampa"></a>
			<ul class="menu">
				<li >
					<a class="second" href="/consumers/ru" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">@lang('lang.consumers')</a>
				</li>
                <li >
					<a class="secondcreate" href="/consumer/create/ru" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">@lang('lang.login')</a>
				</li>
				<li >
					<a class="third" href="/requests/ru" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">@lang('lang.requests')</a>
				</li>
				<li >
					<a class="thirdcreate" href="/request/create/ru" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">@lang('lang.leave_a_request')</a>
				</li>
                <li >
                <a class="mail1" href="/mail/send/ru" onclick="change(this)" onmouseover ="big(this)" onmouseout="small(this)">@lang('lang.send_a_mail')</a>
				</li>
			</ul>
		</div>
	</header> 

    <div>
        <div>
        <h3>
        @lang('lang.requests_text1')
            <br>
            <br>
            @lang('lang.requests_text2') <br>
            @lang('lang.requests_text3') <br>
            @lang('lang.requests_text4') <br>
            @lang('lang.requests_text5') <br>
            @lang('lang.requests_text6') <br>
            @lang('lang.requests_text7') <br>
            <br>
            @lang('lang.requests_text8') <br>
            @lang('lang.requests_text9')
            </h3>
        </div>
        <div id="divtable">
            <h3 id="reqs">@lang('lang.requests_database')</h3>
        <table id="table1">
                <tr>
                    <th>@lang('lang.id')</th>
                    <th>@lang('lang.consumer_id')</th>
                    <th>@lang('lang.title')</th>
                    <th>@lang('lang.body')</th>
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