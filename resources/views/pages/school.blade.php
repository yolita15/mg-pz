@extends('app')

@section('content')
<body>
	<h1><span class="glyphicon glyphicon-bell"></span> Ръководство</h1>
	<br>
		<div class="container">
		<div class="row">
	        <div class="col-md-4"><img src="{{url('images/velkov.jpg')}}" class="img-rounded img-responsive" alt="The director" id="director" title="Ангел Велков"></div>
	        <div class="col-md-4"><img src="{{url('images/mileva.jpg')}}" class="img-rounded img-responsive" alt="The director" id="director" title="Величка Милева"></div>
	        <div class="col-md-4"><img src="{{url('images/gicev.jpg')}}" class="img-rounded img-responsive" alt="The director" id="director" title="Благой Гицев"></div>
	    </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4" id="director-about">
				<br>
				<p align="center">
					<b>Директор <br>Ангел Димитров Велков</b>
                    <br>
                </p>
                <p>
                    Роден 21.06.1959г. в гр. Пазарджик.
                    Завършил Пловдивски Университет през 1984г.
                    специалност математика. 
                    Учител в Математическа Гимназия гр. Пазарджик от 1984г.,
                    Заема длъжността  от септември 1992г.
                </p>
			</div>
			<div class="col-md-4" id="director-about">
				<br>
				<p align="center">
					<b>Зам. директор по администр.-стопанската дейност <br>
                        Величка Петрова Милева</b>
                </p>
                <p>
                    Завършила СА "Димитър Ценов" гр. Свищов
                    специалност финансов мениджмънт.
                    Заема длъжността  от септември 2004г.
                </p>
			</div>
			<div class="col-md-4" id="director-about">
				<br>
				<p align="center">
					<b>Зам. директор по учебната дейност <br>
                        Благой Петров Гицев</b>
                </p>
                    Завършил Софийски Университет
                    специалност история и философия.
                    Заема длъжността  от септември 2000г.

			</div>
		</div>
	</div>
  <br>
  <h1>Училищно настоятелство</h1>
  <br>
  <div class="container">
  <p id="board">
    Сдружение с нестопанска цел <br> „Училищно настоятелство при МГ „К. Величков” – гр. Пазарджик
    <br>ОББ АД Пазарджик, BIC код UBBS BGSF,
    <br>IBAN  BG13UBBS80021031863714
      <br>
      <a href="{{url('pdf/ustav_nastoyatelstvo.pdf')}}" target="new"> Устав</a>
  </p>
</div>
  <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Име</th>
        <th>Длъжност</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Георги Георгиев Карабойчев</td>
        <td>Председател <span class="glyphicon glyphicon-phone"></span>  0889 716255   <span class="glyphicon glyphicon-envelope"></span>  gg_karaboichev@abv.bg</td>
      </tr>
      <tr>
        <td>Веселина Кирилова Червенкова</td>
        <td>Зам. председател</td>
      </tr>
      <tr>
        <td>Даниел Георгиев Апостолов</td>
        <td>Секретар</td>
      </tr>
      <tr>
        <td>Лиляна Стоянова Гюрова</td>
        <td>Член</td>
      </tr>
      <tr>
        <td>Иван Василев Грозданов</td>
        <td>Член</td>
      </tr>
      <tr>
        <td>Нина Илиева Колчакова</td>
        <td>Член</td>
      </tr>
      <tr>
        <td>Елена Видинова Керинова</td>
        <td>Член</td>
      </tr>
    </tbody>
  </table>
  </div>
  <br>
  <div class="container">
  	<div class="row">
  		<div class="col-md-6">
  			<div class="panel panel-danger">
            <div class="panel-heading"><b>Отчет на бюджета</b></div>
            <div class="panel-body">
                <a href="{{ url('pdf/otchet_31_12_2015.pdf') }}" target="new"><span class="glyphicon glyphicon-usd"></span>  31 декември 2015 г.</a>
                <br>
            	<a href="{{ url('pdf/otch_na_butjet_30_09_2015.pdf') }}" target="new"><span class="glyphicon glyphicon-usd"></span>  30 септември 2015 г.</a>
            	<br>
            	<a href="{{ url('pdf/otchet_30_06_2015.pdf') }}" target="new"><span class="glyphicon glyphicon-usd"></span>  30 юни 2015 г.</a>
            	<br>
            	<a href="{{ url('pdf/otch_na_butjet_31_03_2015.pdf') }}" target="new"><span class="glyphicon glyphicon-usd"></span>  31 март 2015 г.</a>
            	<br>          	

            </div>
          </div>
            </div>
              <div class="col-md-6">
                <div class="panel panel-danger">
            <div class="panel-heading"><b>Важно</b></div>
            <div class="panel-body">
              <a href="{{ url('pdf/pravilnik1.pdf') }}" target="new"><span class="glyphicon glyphicon-list-alt"></span> Правилник за дейността на гимназията</a>
              <br>
              <a href="{{ url('pdf/pravilnik2.pdf') }}" target="new"><span class="glyphicon glyphicon-list-alt"></span>  Правилник за безопасна работа на учениците.</a>
              <br>
              <a href="{{ url('pdf/pravilnik3.pdf') }}" target="new"><span class="glyphicon glyphicon-list-alt"></span>  Правилник за Прилагане на Закона за Народната Просвета</a>
              <br>            
              <a href="{{ url('pdf/zaetost_KK_2_srok.pdf') }}" target="new"><span class="glyphicon glyphicon-list-alt"></span>  Заетост на компютърните кабинети </a>
            </div>
            </div>
            </div>
  		</div>
  	</div>
  </div>
  </body>
 @stop
