<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "icon" href ="https://image.flaticon.com/icons/png/512/702/702797.png" type = "image/x-icon">
    <title>@lang('lang.city_power_grid')</title>
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
    <div id="main">
        <div id="text">
            <h3>@lang('lang.main_text1')
                <br>
                @lang('lang.main_text2')
                <br>
                @lang('lang.main_text3')
                <br>
                @lang('lang.main_text4') </h3>
        </div>
    </div>
    <script src="{{ asset('page1.js') }}"></script>
</body>
</html>