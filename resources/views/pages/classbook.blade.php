@extends('app')

@section('content')
<head>
	<!--Login-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/loginstyle.css') }}">
    <script type="text/javascript" src="{{ ('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}"></script>
    <!--Login-->
</head>

<body>
	<div class="inner-screen">
     <div class="form">
        <input type="text" class="zocial-dribbble" placeholder="Потребителско име" >
        <input type="password" placeholder="Парола" >
        <input type="submit" value="Вход" >
     </div> 
     </div>     
</body>

 @stop
