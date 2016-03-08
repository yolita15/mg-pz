@extends('app')

@section('content')
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1><span class="glyphicon glyphicon-apple"></span> Профили</h1>
			</div>
			<div class="col-md-6" >
				<h1><span class="glyphicon glyphicon-stats"></span> Балообразуване</h1>
			</div>
		</div>
	</div>
    <br>
    <div class="container">
	<div class="row col-md-6">		
		<ul class="list-group">			

			<li class="list-group-item" title="VIII-XII клас" id="profiles-header">Математика, Информатика, Aнглийски език,</li>
			<li class="list-group-item" id="profiles-body">
				<div class="row">
					<div class="col-md-8">
						<p id="profiles-text" title="VIII-XII клас">
							Искате компютрите да изпълняват програми, писани от вас - 
			                изберете си профил с информатика!
			                Всички ползват готови програми на компютъра си, 
			                но много по - вълнуващо е да създаваш такива!
			                Това са профили за бъдещи
			                високоплатени компютърни специалисти!
			           </p>
					</div>
					<div class="col-md-4">
						<img src="images/math.png" width="150">
					</div>
				</div>	
			</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item"  title="VIII-XII клас" id="profiles-header">Информатика, Математика, Английски език</li>
			<li class="list-group-item" >
			<div class="row">
				    <div class="col-md-4">
						<img src="images/computer.png" width="150">
					</div>
					<div class="col-md-8">
						<p id="profiles-text" title="VIII-XII клас">
							Искате компютрите да изпълняват програми, писани от вас - 
			                изберете си профил с информатика!
			                Всички ползват готови програми на компютъра си, 
			                но много по - вълнуващо е да създаваш такива!
			                Това са профили за бъдещи
			                високоплатени компютърни специалисти!
			           </p>
					</div>
					
				</div>
		    </li>
		</ul>		
		<ul class="list-group">
			<li class="list-group-item" title="VIII-XII клас" id="profiles-header">Биология, Химия, Английски език</li>
			<li class="list-group-item" id="profiles-body">
				<div class="row">
					<div class="col-md-8">
						<p id="profiles-text" title="VIII-XII клас">
							Бъдещи лекари, фармацевти, стоматолози и още много други специалисти.
							Искате да сте на ниво в биологията и английския език, което ви
							позволява още като студенти да трупате стаж по специалността и 
							полезни контакти във Великобритания и САЩ.
			                Това е вашият профил!

						</p>
					</div>
					<div class="col-md-4">
						<img src="images/biology.png" width="130">
					</div>
				</div>
			
			</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item"  title="VIII-XII клас" id="profiles-header">Информационни технологии, Информатика, Английски език </li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-4">
						<img src="images/IT.png" width="150">
					</div>
					<div class="col-md-8">
						<p id="profiles-text" title="VIII-XII клас">
							Ако искате сами да администрирате интернет мрежата си, 
							ако искате да създавате анимации и сами да сте филмови продуценти,
							ако искате да програмирате и да проектирате нови информационни системи,
							ако искате да сте уеб дизайнери и уеб разработчици и езикът да е ваш 
							помощник, то това е вашият профил!
						</p>
					</div>
					
				</div>

			
			</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item"  title="V-VII клас" id="profiles-header">За ученици 5 - 7 клас засилено изучаване на математика и информационни технологии</li>
		</ul>
	</div>
	<div class="row col-md-6" id="bal">
		<ul class="list-group">
			<li class="list-group-item" id="profiles-header">Прием след VII клас</li>
			<li class="list-group-item" >
				Обучението е с продължителност 5 години със засилено изучаване на чужд език. При дипломирането си учениците получават и сертификат за компютърни умения
				<ol>
					<li>Оценката от матурата по БЕЛ</li>
					<li>Утроената оценка от матурата по математика</li>
					<li>Оценките по математика и втори предмет - БЕЛ за профили 1, 2 и 4, биология за профил 3 от удостоверението за завършен  VII клас</li><br>
				</ol>
			</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item" id="profiles-header">Прием след IV клас</li>
			<li class="list-group-item" id="profiles-body">
			<p id="profiles-text">
				За прием в V клас на МГ "Константин Величков" могат да кандидатстват ученици, 
				успешно завършили ІV клас през текущата година и отговарящи
				 на поне едно от следните условия:
			</p>
			
			<ol>
				<li>Класирани на първите три места в областен кръг на олимпиадата по математика за текущата  учебна година.</li><br>
				<li>Класираните на първите три места от математическото състезание „Европейско кенгуру”.</li><br>
				<li>Класираните на първите три места от математическото състезание „Иван Салабашев”.</li><br>
				<li>Успешно представили се на математическото състезание за четвъртокласници, организирано от МГ "Константин Величков" 
				    което се провежда: <br><br> Предварителен кръг - месец април <br><br> Редовен кръг - първата събота на месец юни.
				    <br><br>Състезанието е с начало 10.00 часа и е с продължителност 120 минути.</li><br>
				<p id="profiles-text">
			    Балът се образува от: 
			    </p>
			</ol>
			<ol>
				<li>Утроената оценка от състезанието.</li><br>
				<li>Оценката по математика от удостоверението за завършен ІV клас.</li><br>
				<li>Класираните на първите три места от математическото състезание „Иван Салабашев”.</li><br>
				<li>Оценката по български език и литература от удостоверението за завършен ІV клас.</li><br>
			</ol>
		</ul>
		<br>

	    </div>
	</div>
	<hr>
	<div class="container">
	<ul class="list-group">
		<li class="list-group-item" title="VIII-XII клас" id="profiles-header">Казано накратко:</li>
		<li class="list-group-item" id="profiles-text">	    
			<p>
				В профилите с информационни технологии се набляга на уменията за ползване на готови програми и софтуерни пакети 
				(текстообработка, електронни таблици, бази данни, презентации, компютърна графика, анимация, мултимедия и клипове, уеб дизайн и т.н.).
	            В профилите с информатика превес има изучаването на езици за програмиране, алгоритми, създаване на приложни програми. 
	            Придобиват се умения за работа със средства за създаване на софтуер.
	            В крайна сметка компютърните умения означава да имаш понятие и от двете.
			</p>
			<p>
	    	Обучението в гимназията е с продължителност 5 години. При дипломирането си учениците получават и сертификат за компютърни умения.
	        </p>
		</li>
    </ul>
    </div>

	<div class="container">
	<div class="panel panel-danger">
        <div class="panel-heading"><b>Полезно за вас кандидат-гимназисти и бъдещи петокласници:</b> </div>
        <div class="panel-body">
        <a href="{{url('pdf/pr_izp_mat_4kl_2015.pdf')}}" target="new"><span class="glyphicon glyphicon-pushpin"></span> Пробен изпит по математика за 4 клас</a>
        <br>
        <a href="{{url('pdf/pr_izp_mat_7kl_2015.pdf')}}" target="new"><span class="glyphicon glyphicon-pushpin"></span> Пробна матура по математика за 7 клас</a>
        <br>
        <a href="{{url('pdf/pr_izp_bel_2015.pdf')}}" target="new"><span class="glyphicon glyphicon-pushpin"></span> Пробна матура по български език и литература за 7 клас</a>
        <br>
        <a href="{{url('pdf/otg_pr_izp_bel_2015.pdf')}}" target="new"><span class="glyphicon glyphicon-pushpin"></span> Отговори от пробната матура по български език и литература</a>
        <br>
        <a href="{{url('pdf/otg_pr_izp_mat_7kl_2015_1mod.pdf')}}" target="new"><span class="glyphicon glyphicon-pushpin"></span> Отговори от пробната матура по математика, модул I</a>
        <br>
        <a href="{{url('pdf/otg_pr_izp_mat_7kl_2015_2mod.pdf')}}" target="new"><span class="glyphicon glyphicon-pushpin"></span> Отговори от пробната матура по математика, модул II</a>
        </div>
    </div>
    </div>
    
</body>

 @stop
