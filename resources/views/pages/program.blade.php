@extends('app')

@section('content')
   <body>
    <br>
   	<h1> <span class="glyphicon glyphicon-th-list"></span> Седмична програма</h1>
   	<br>
    <div class="container">
   	    <div class="container btn-group" id="program-menu">
           <a href="#12klas" class="btn btn-default">12 клас</a>
           <a href="#11klas" class="btn btn-default">11 клас</a>
           <a href="#10klas" class="btn btn-default">10 клас</a>
           <a href="#9klas" class="btn btn-default">9 клас</a>
           <a href="#8klas" class="btn btn-default">8 клас</a>
           <a href="#7klas" class="btn btn-default">5-7 клас</a>
        </div>
    </div>
        <br>
        <br>
        <div class="container">
            <h2 class="program-class-heading" id="12klas">12 клас</h2>
        </div>
        <div class="container ">
            <table  class="table table-striped table-bordered table-responsive" id="program">
                <tr class="head">
                    <td>час</td>
                    <td></td>
                    <td>XII a</td>
                    <td></td>
                    <td>XII б</td>
                    <td></td>
                    <td>XII в</td>
                    <td></td>
                    <td>XIIг</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="head">
                    <td></td>
                    <td></td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td></td>
                </tr>

                <tr>
                	<td colspan="11" id="day"> <b>П О Н Е Д Е Л Н И К</b></td>
                </tr>
                <tr class="class">
                    <td></td>
                    <td>-1</td>
                    <td>СИП-Математика</td>
                    <td>17</td>
                    <td>СИП-Математика</td>
                    <td>17</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="class">
                    <td></td>
                    <td>0</td>
                    <td>СИП-Математика</td>
                    <td>17</td>
                    <td>СИП-Математика</td>
                    <td>17</td>
                    <td></td>
                    <td></td>
                    <td>Немски език</td>
                    <td>21</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Ф.Калбурова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="class">
                    <td></td>
                    <td>1</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Математика</td>
                    <td>18</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мария Георгиева</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="class">
                    <td></td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="class">
                    <td></td>
                    <td>3</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td>Инф. технологии</td>
                    <td>30/29</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>В.Бояджиев/Л.Сиракова</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="class">
                    <td></td>
                    <td>4</td>
                    <td>Английски език</td>
                    <td>22</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Инф. технологии</td>
                    <td>30/29</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td></td>
                </tr>
                <tr >
                    <td></td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>В.Бояджиев/Л.Сиракова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="class">
                    <td></td>
                    <td>5</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="class">
                    <td></td>
                    <td>6</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>Инф. технологии</td>
                    <td>30/29</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td>Английски език</td>
                    <td>22</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Н.Кордова/Л.Сиракова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="class">
                    <td></td>
                    <td>7</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>Инф. технологии</td>
                    <td>30/29</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Н.Кордова/Л.Сиракова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day"> <b>В Т О Р Н И К </b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Руски език</td>
                    <td>26</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>25/26</td>
                    <td>Немски език</td>
                    <td>25</td>
                    <td>География и иконом.</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ст. Попова</td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Ф.Калбурова</td>
                    <td></td>
                    <td>Мария Георгиева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Английски език</td>
                    <td>3</td>
                    <td>Математика</td>
                    <td>9</td>
                    <td>Математика</td>
                    <td>26</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>Ангел Велков</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Математика</td>
                    <td>9</td>
                    <td>Английски език</td>
                    <td>3</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>3</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td>Инф. технологии</td>
                    <td>30/29</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Н.Кордова/Л.Сиракова</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Инф. технологии</td>
                    <td>30/29</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td>История и цивил.</td>
                    <td>6</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td>Н.Кордова/Л.Сиракова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Руски език</td>
                    <td>9</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>8/9</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day"> <b>С Р Я Д А </b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Инф. технологии</td>
                    <td>30/29</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>В.Бояджиев/Л.Сиракова</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Инф. технологии</td>
                    <td>30/29</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>В.Бояджиев/Л.Сиракова</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Свят и личност</td>
                    <td>6</td>
                    <td>История и цивил.</td>
                    <td>20</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Благой Гицев</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Бълг.ез. и лит. - ЗИП</td>
                    <td>9</td>
                    <td>Английски език</td>
                    <td>11</td>
                    <td>Свят и личност</td>
                    <td>6</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td>Благой Гицев</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Свят и личност</td>
                    <td>6</td>
                    <td>Бълг.ез. и лит. - ЗИП</td>
                    <td>9</td>
                    <td>География и иконом.</td>
                    <td>17</td>
                    <td>Английски език</td>
                    <td>11</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Благой Гицев</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Мария Георгиева</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Английски език</td>
                    <td>11</td>
                    <td>Свят и личност</td>
                    <td>6</td>
                    <td>Математика</td>
                    <td>5</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td>Благой Гицев</td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>13/1</td>
                    <td>Руски език</td>
                    <td>1</td>
                    <td>Математика</td>
                    <td>5</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Ст. Попова</td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day" > <b>Ч Е Т В Ъ Р Т Ъ К </b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Бълг.ез. и лит. - ЗИП</td>
                    <td>9</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>13/12</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>13/12</td>
                    <td>Руски език</td>
                    <td>12</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Ст. Попова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Бълг.ез. и лит. - ЗИП</td>
                    <td>9</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Математика</td>
                    <td>26</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Мария Георгиева</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Ангел Велков</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Инф. технологии</td>
                    <td>30/29</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td>Н.Кордова/Л.Сиракова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Инф. технологии</td>
                    <td>30/29</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Н.Кордова/Л.Сиракова</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day" > <b>П Е Т Ъ К</b></td>
                </tr>
                <tr>
                	<td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>Немски език</td>
                    <td>20</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ф.Калбурова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Бълг.ез. и лит. - ЗИП</td>
                    <td>9</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Бълг.ез. и лит. - ЗИП</td>
                    <td>9</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Свят и личност</td>
                    <td>6</td>
                    <td>Бълг.ез. и лит. - ЗИП</td>
                    <td>9</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td>Благой Гицев</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Свят и личност</td>
                    <td>6</td>
                    <td>Английски език</td>
                    <td>8</td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>Бълг.ез. и лит. - ЗИП</td>
                    <td>9</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Благой Гицев</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Свят и личност</td>
                    <td>6</td>
                    <td>Инф. технологии</td>
                    <td>30/29</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Благой Гицев</td>
                    <td></td>
                    <td>В.Бояджиев/Л.Сиракова</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td>Инф. технологии</td>
                    <td>30/30</td>
                    <td>Свят и личност</td>
                    <td>6</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td>В.Бояджиев/Л.Сиракова</td>
                    <td></td>
                    <td>Благой Гицев</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td>Час на класа</td>
                    <td>17</td>
                    <td>Час на класа</td>
                    <td>26</td>
                    <td>Час на класа</td>
                    <td>3</td>
                    <td id="11klas">Час на класа</td>
                    <td>9</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td >Даниела Ангелова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Лидия Сиракова</td>
                    <td></td>
                    <td>Петя Кошева</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div >
        <br>
        <b>
        	<h2>11 клас</h2>
        </b>
        <br>
        <div class="container">
            <table class="table table-striped table-bordered table-responsive" id="program" >
                <tr>
                    <td>час</td>
                    <td></td>
                    <td>XIa</td>
                    <td></td>
                    <td>XIб</td>
                    <td></td>
                    <td>XIв</td>
                    <td></td>
                    <td>XIг</td>
                    <td></td>
                    <td>XIд</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                </tr>
                <tr>
                	<td colspan="12" id="day" > <b>П О Н Е Д Е Л Н И К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Руски език</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>СИП-Математика</td>
                    <td>16</td>
                    <td></td>
                    <td></td>
                    <td>СИП-Математика</td>
                    <td>16</td>
                    <td>СИП-Математика</td>
                    <td>16</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Хим. и оп. на ок.ср.</td>
                    <td>1</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Инф. технологии</td>
                    <td>27/28</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>В.Микова/Л.Сиракова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Инф. технологии</td>
                    <td>27/28</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>В.Микова/Л.Сиракова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Инф. технологии</td>
                    <td>27/28</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>В.Микова/Н.Кордова</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Инф. технологии</td>
                    <td>27/28</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>В.Микова/Н.Кордова</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                    <td>Философия</td>
                    <td>11</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Английски език</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>Философия</td>
                    <td>11</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Немски език</td>
                    <td>4</td>
                    <td></td>
                    <td></td>
                    <td>Немски език</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>С.Попова</td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="12" id="day" > <b>В Т О Р Н И К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Немски език</td>
                    <td>20</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>С.Попова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Немски език</td>
                    <td>20</td>
                    <td></td>
                    <td></td>
                    <td>Немски език</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Философия</td>
                    <td>6</td>
                    <td>Математика</td>
                    <td>17</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>С.Пенова/В.Микова</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>С.Пенова/В.Микова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Философия</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Философия</td>
                    <td>6</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>Философия</td>
                    <td>13</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Математика</td>
                    <td>17</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td></td>
                    <td></td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="12" id="day" > <b>С Р Я Д А</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>СИП-Математика</td>
                    <td>16</td>
                    <td></td>
                    <td></td>
                    <td>СИП - ИТ/Математ.</td>
                    <td>28/16</td>
                    <td>СИП-Математика</td>
                    <td>16</td>
                    <td>Руски език</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Л.Сиракова/Ц.Андонова</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Инф. технологии</td>
                    <td>27/28</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>В.Микова/Л.Сиракова</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                    <td>Инф. технологии</td>
                    <td>27/28</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                    <td>В.Микова/Л.Сиракова</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Инф. технологии</td>
                    <td>27/28</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>В.Микова/Н.Кордова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>13/1</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>13/1</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Инф. технологии</td>
                    <td>27/28</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>В.Микова/Н.Кордова</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="12"  id="day"> <b>Ч Е Т В Ъ Р Т Ъ К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>Руски език</td>
                    <td>20</td>
                    <td>Руски език</td>
                    <td>20</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>13/12</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>13/12</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Философия</td>
                    <td>3</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Философия</td>
                    <td>3</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>Английски език</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>С.Пенова/В.Микова</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>С.Пенова/В.Микова</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td>Философия</td>
                    <td>8</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>Немски език</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>С.Попова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="12" id="day" > <b>П Е Т Ъ К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Руски език</td>
                    <td>11</td>
                    <td>Руски език</td>
                    <td>11</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                    <td>Стойна Попова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>Философия</td>
                    <td>24</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Инф. технологии</td>
                    <td>27/28</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Математика</td>
                    <td>17</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Р.Спасова/Ц.Славкова</td>
                    <td></td>
                    <td>В.Микова/Л.Сиракова</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Даниела Ангелова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Английски език</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Математика</td>
                    <td>16</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                    <td>Английски език</td>
                    <td>7</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                    <td>Цв. Килитанова</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td  id="10klas">Час на класа</td>
                    <td>16</td>
                    <td>Час на класа</td>
                    <td>5</td>
                    <td>Час на класа</td>
                    <td>20</td>
                    <td>Час на класа</td>
                    <td>4</td>
                    <td>Час на класа</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цветка Андонова</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <br>
        <b>
        	<h2>10 клас</h2>
        </b>
        <br>
        <div class="container">
        	<table class="table table-striped table-bordered table-responsive" id="program">
                <tr>
                    <td>час</td>
                    <td></td>
                    <td>Xа</td>
                    <td></td>
                    <td>Xб</td>
                    <td></td>
                    <td>Xв</td>
                    <td></td>
                    <td>Xг</td>
                    <td></td>
                    <td>Xд</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                </tr>
                <tr>
                	<td colspan="13" id="day" > <b>П О Н Е Д Е Л Н И К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Немски език</td>
                    <td>20</td>
                    <td>СИП-Химия и ООС</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Английски език</td>
                    <td>4</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>5/7</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>5/7</td>
                    <td>Руски език</td>
                    <td>7</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Бълг.език и литер.</td>
                    <td>10</td>
                    <td>История и цивил.</td>
                    <td>6</td>
                    <td>Английски език</td>
                    <td>4</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Информатика</td>
                    <td>32/31</td>
                    <td>История и цивил.</td>
                    <td>6</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>Английски език</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Н.Панева/С.Пенова</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Информатика</td>
                    <td>32/31</td>
                    <td>Английски език</td>
                    <td>11</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td>Бълг.език и литер.</td>
                    <td>13</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Н.Панева/С.Пенова</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Математика</td>
                    <td>18</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td>Бълг.език и литер.</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td>Инф. технологии</td>
                    <td>32/31</td>
                    <td>Английски език</td>
                    <td>16</td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td>Н.Панева/В.Шишин.</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td>Бълг.език и литер.</td>
                    <td>13</td>
                    <td>Математика</td>
                    <td>19</td>
                    <td></td>
                    <td></td>
                    <td>Етика и право</td>
                    <td>11</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="13" id="day"> <b>В Т О Р Н И К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td>СИП-Математика</td>
                    <td>19</td>
                    <td>СИП-Математика</td>
                    <td>19</td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td>СИП-Математика</td>
                    <td>19</td>
                    <td>СИП-Математика</td>
                    <td>19</td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Ц.Славкова/В.Шишин.</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>25/26</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>25/26</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Ц.Славкова/В.Шишин.</td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Математика</td>
                    <td>18</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Информатика</td>
                    <td>27/28</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td>Н.Панева/С.Пенова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Бълг.език и литер.</td>
                    <td>13</td>
                    <td>Английски език</td>
                    <td>17</td>
                    <td>Инф. технологии</td>
                    <td>27</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Инф. технологии</td>
                    <td>29/30</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Валя Малинова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Н.Панева/Н.Кордова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>История и цивил.</td>
                    <td>6</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>Инф. технологии</td>
                    <td>27</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td>Английски език</td>
                    <td>17</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Валя Малинова</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Информатика</td>
                    <td>32/31</td>
                    <td>Етика и право</td>
                    <td>13</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>Английски език</td>
                    <td>17</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Н.Панева/С.Пенова</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Английски език</td>
                    <td>17</td>
                    <td></td>
                    <td></td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="13" id="day" > <b>С Р Я Д А</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td>СИП-Математика</td>
                    <td>18</td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>СИП-Математика</td>
                    <td>18</td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Е.Евлогиева</td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Инф. технологии</td>
                    <td>31/32</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>9/12</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>9/12</td>
                    <td>Руски език</td>
                    <td>12</td>
                    <td>Математика</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>В.Шишин./Н.Панева</td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>18</td>
                    <td>Бълг.език и литер.</td>
                    <td>13</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Етика и право</td>
                    <td>15</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Бълг.език и литер.</td>
                    <td>13</td>
                    <td>Инф. технологии</td>
                    <td>29/30</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Р.Спасова/В.Шишин.</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Н.Панева/В.Малинова</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Английски език</td>
                    <td>19</td>
                    <td>Инф. технологии</td>
                    <td>29/30</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td>Р.Спасова/В.Шишин.</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Н.Панева/В.Малинова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td>История и цивил.</td>
                    <td>22</td>
                    <td>Английски език</td>
                    <td>19</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Английски език</td>
                    <td>19</td>
                    <td>Географ. и иконом.</td>
                    <td>20</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td>Английски език</td>
                    <td>19</td>
                    <td>Информатика</td>
                    <td>27</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Стояна Пенова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="13" id="day"> <b>Ч Е Т В Ъ Р Т Ъ К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Математика</td>
                    <td>18</td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td>Етика и право</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>18</td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>Бълг.език и литер.</td>
                    <td>10</td>
                    <td>Информатика</td>
                    <td>27/28</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Ц.Славкова/В.Шишин.</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>13/4</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Бълг.език и литер.</td>
                    <td>10</td>
                    <td>Нем.ез./Рус.ез.</td>
                    <td>13/4</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Ф.Калбур./Ст.Попова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                    <td>Етика и право</td>
                    <td>3</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>Математика</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>Английски език</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td>Английски език</td>
                    <td>9</td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>История и цивил.</td>
                    <td>6</td>
                    <td>Бълг.език и литер.</td>
                    <td>11</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td>Английски език</td>
                    <td>9</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Физика и астроном.</td>
                    <td>26</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="13" id="day"> <b>П Е Т Ъ К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Немски език</td>
                    <td>21</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Стойна Попова </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Бълг.език и литер.</td>
                    <td>7</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>Инф. технологии</td>
                    <td>29/30</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Н.Панева/В.Малинова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Математика</td>
                    <td>19</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td>Инф. технологии</td>
                    <td>29/30</td>
                    <td>Бълг.език и литер.</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td>Н.Панева/В.Малинова</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Бълг.език и литер.</td>
                    <td>7</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Бълг.език и литер.</td>
                    <td>12</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Р.Спасова/В.Шишин.</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Математика</td>
                    <td>18</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Инф. технологии</td>
                    <td>27</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td>Р.Спасова/В.Шишин.</td>
                    <td></td>
                    <td>Валя Малинова</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>Бълг.език и литер.</td>
                    <td>12</td>
                    <td>Инф. технологии</td>
                    <td>27</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Математика</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Валя Малинова</td>
                    <td></td>
                    <td>Д. Хаджидимитров</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td id="9klas">Час на класа</td>
                    <td>18</td>
                    <td>Час на класа</td>
                    <td>7</td>
                    <td>Час на класа</td>
                    <td>19</td>
                    <td>Час на класа</td>
                    <td>15</td>
                    <td>Час на класа</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td>Ваня Шишиньова</td>
                    <td></td>
                    <td>Сашка Топалова</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td>Стояна Пенова</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <br>
        <b>
        	<h2>9 клас</h2>
        </b>
        <br>
        <div class="container">
        	<table class="table table-striped table-bordered table-responsive" id="program">
                <tr>
                    <td>час</td>
                    <td></td>
                    <td>IXа</td>
                    <td></td>
                    <td>IXб</td>
                    <td></td>
                    <td>IXв</td>
                    <td></td>
                    <td>IXг</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="12" id="day" > <b>П О Н Е Д Е Л Н И К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>СИП-Химия и ООС</td>
                    <td>23</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td>Г.Кокозов</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Математика</td>
                    <td>8</td>
                    <td>Инф. технол -ЗИП</td>
                    <td>31/32</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>Аделина Чопанова</td>
                    <td></td>
                    <td>Н.Панева/В.Малинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>Математика</td>
                    <td>8</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                    <td>Инф. технол -ЗИП</td>
                    <td>31/32</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Аделина Чопанова</td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Н.Панева/В.Малинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Математика</td>
                    <td>8/11</td>
                    <td>Хим. и оп. на ок.ср.</td>
                    <td>3</td>
                    <td>География и иконом.</td>
                    <td>19</td>
                    <td>Английски език</td>
                    <td>22</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>А.Чопан./М.Маркова</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td>Мария Георгиева</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>История и цивил.</td>
                    <td>6</td>
                    <td>Английски език</td>
                    <td>8</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Мария Георгиева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Информатика</td>
                    <td>29/28/27</td>
                    <td>Бълг.език и литер.</td>
                    <td>12</td>
                    <td>Английски език</td>
                    <td>8</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>СП/ВШ/РС</td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Английски език</td>
                    <td>8</td>
                    <td>История и цивил.</td>
                    <td>6</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>С.Пенова/В.Шишин.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="12" id="day"> <b>В Т О Р Н И К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td>СИП-Математика</td>
                    <td>17/16</td>
                    <td>СИП-Математика</td>
                    <td>17</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>А.Чопан./К.Петрова</td>
                    <td></td>
                    <td>А.Чопанова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>СИП-Математика</td>
                    <td>17/16</td>
                    <td>СИП-Математика</td>
                    <td>17</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>А.Чопан./К.Петрова</td>
                    <td></td>
                    <td>А.Чопанова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Математика</td>
                    <td>8</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Аделина Чопанова</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>8</td>
                    <td>География и икон.</td>
                    <td>18</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Псих.и логика</td>
                    <td>6</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>А.Чопан./М.Маркова</td>
                    <td></td>
                    <td>География 2</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Английски език</td>
                    <td>16</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                    <td>Математика</td>
                    <td>8</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Аделина Чопанова</td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Немски език</td>
                    <td>8</td>
                    <td>Бълг.език и литер.</td>
                    <td>19</td>
                    <td>Английски език</td>
                    <td>16</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ф.Калбурова</td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>География и иконом.</td>
                    <td>19</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Немски език</td>
                    <td>8</td>
                    <td>Информатика</td>
                    <td>32/31</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мария Георгиева</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Ф.Калбурова</td>
                    <td></td>
                    <td>Н.Панева/С.Пенова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                    <td>Немски език</td>
                    <td>8</td>
                    <td>География и иконом.</td>
                    <td>19</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Ф.Калбурова</td>
                    <td></td>
                    <td>Мария Георгиева</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>Инф. технологии</td>
                    <td>31/32</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>В.Малинова/Н.Кордова</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="12" id="day" > <b>С Р Я Д А</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Английски език</td>
                    <td>4</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>История и цивил.</td>
                    <td>20</td>
                    <td>Математика</td>
                    <td>11</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Бълг.език и литер.</td>
                    <td>10</td>
                    <td>Псих.и логика</td>
                    <td>9</td>
                    <td>Немски език</td>
                    <td>9</td>
                    <td>Инф. технологии</td>
                    <td>31/32</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Ф.Калбурова</td>
                    <td></td>
                    <td>Н.Панева/В.Малинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Математика</td>
                    <td>8/11</td>
                    <td>Немски език</td>
                    <td>16</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>А.Чопан./М.Маркова</td>
                    <td></td>
                    <td>Ф.Калбурова</td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Немски език</td>
                    <td>16</td>
                    <td>Математика</td>
                    <td>8</td>
                    <td>Английски език</td>
                    <td>4</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Ф.Калбурова</td>
                    <td></td>
                    <td>Аделина Чопанова</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Немски език</td>
                    <td>13</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td>С.Пенова/В.Шишин.</td>
                    <td></td>
                    <td>Георги Кокозов</td>
                    <td></td>
                    <td>Ф.Калбурова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>География и иконом.</td>
                    <td>17</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Математика</td>
                    <td>8</td>
                    <td>История и цивил.</td>
                    <td>22</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мария Георгиева</td>
                    <td></td>
                    <td>С.Пенова/В.Шишин.</td>
                    <td></td>
                    <td>Аделина Чопанова</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Английски език</td>
                    <td>11</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мими Йончева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="12" id="day" > <b>Ч Е Т В Ъ Р Т Ъ К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Бълг.език и литер.</td>
                    <td>17</td>
                    <td>Математика</td>
                    <td>3</td>
                    <td>Инф. технологии</td>
                    <td>31/32</td>
                    <td>Английски език</td>
                    <td>4</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Аделина Чопанова</td>
                    <td></td>
                    <td>В.Малинова/Н.Кордова</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Инф. технологии</td>
                    <td>31/32</td>
                    <td>Английски език</td>
                    <td>4</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Ева Евлогиева</td>
                    <td></td>
                    <td>В.Малинова/Н.Кордова</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Инф.технол./Матем.</td>
                    <td>28/27/8</td>
                    <td>Географ. и иконом.</td>
                    <td>19</td>
                    <td>Псих.и логика</td>
                    <td>3</td>
                    <td>Математика</td>
                    <td>11</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>НК/ВБ/А.Чопанова</td>
                    <td></td>
                    <td>Мария Георгиева</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Инф.технол./Матем.</td>
                    <td>28/27/8</td>
                    <td>Английски език</td>
                    <td>24</td>
                    <td>Бълг.език и литер.</td>
                    <td>11</td>
                    <td>География и иконом.</td>
                    <td>18</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>НК/ВБ/А.Чопанова</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Мария Георгиева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Музика</td>
                    <td>13</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Английски език</td>
                    <td>24</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Псих.и логика</td>
                    <td>8</td>
                    <td>Бълг.език и литер.</td>
                    <td>15</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td>Инф. технологии</td>
                    <td>31/32</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>С.Пенова/В.Микова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="12" id="day"> <b>П Е Т Ъ К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Английски език</td>
                    <td>16</td>
                    <td>Музика</td>
                    <td>13</td>
                    <td>Псих.и логика</td>
                    <td>24</td>
                    <td>Немски език</td>
                    <td>4</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Ф.Калбурова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Информатика</td>
                    <td>31/32</td>
                    <td>Английски език</td>
                    <td>16</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>С.Пенова/В.Шишин.</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Цветанка Димитрова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Псих.и логика</td>
                    <td>24</td>
                    <td>Математика</td>
                    <td>8</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td>Музика</td>
                    <td>13</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>Аделина Чопанова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Инф.технологии</td>
                    <td>27/28/29</td>
                    <td>Английски език</td>
                    <td>13</td>
                    <td>Бълг.език и литер.</td>
                    <td>10</td>
                    <td>Математика</td>
                    <td>11</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>НК/ВБ/СП</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Математика -ЗИП</td>
                    <td>8/11</td>
                    <td>Биология и здр.обр.</td>
                    <td>22</td>
                    <td>Музика</td>
                    <td>13</td>
                    <td>Псих.и логика</td>
                    <td>10</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>А.Чопан./М.Маркова</td>
                    <td></td>
                    <td>Мая Зафирова</td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Математика -ЗИП</td>
                    <td>8/11</td>
                    <td>Псих.и логика</td>
                    <td>10</td>
                    <td>Информатика-ЗИП</td>
                    <td>31/32</td>
                    <td>Бълг.език и литер.</td>
                    <td>4</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>А.Чопан./М.Маркова</td>
                    <td></td>
                    <td>Татяна Симова</td>
                    <td></td>
                    <td>С.Пенова/В.Шишин.</td>
                    <td></td>
                    <td>Лидия Коцева</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td id="8klas">Час на класа</td>
                    <td>8</td>
                    <td>Час на класа</td>
                    <td>25</td>
                    <td>Час на класа</td>
                    <td>10</td>
                    <td>Час на класа</td>
                    <td>11</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Аделина Чопанова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <br>
        <b>
        	<h2>8 клас</h2>
        </b>
        <br>
        <div class="container">
        	<table class="table table-striped table-bordered table-responsive" id="program">
                <tr>
                    <td>час</td>
                    <td></td>
                    <td>VIIIа</td>
                    <td></td>
                    <td>VIIIб</td>
                    <td></td>
                    <td>VIIIв</td>
                    <td></td>
                    <td>VIIIг</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                </tr>
                <tr>
                	<td colspan="11" id="day" > <b>П О Н Е Д Е Л Н И К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td>СИП-Математика</td>
                    <td>24</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>СИП-Инф.технол.</td>
                    <td>29/30</td>
                    <td>СИП-Здр.образов.</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td>Л.Сиракова/В.Микова</td>
                    <td></td>
                    <td>М.Зафирова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>СИП-Математика</td>
                    <td>24</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>СИП-Инф.технол.</td>
                    <td>29/30</td>
                    <td>СИП-Здр.образов.</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td>Л.Сиракова/В.Микова</td>
                    <td></td>
                    <td>М.Зафирова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Музика</td>
                    <td>13</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Математика</td>
                    <td>24</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>24</td>
                    <td>Бълг.език и литер.</td>
                    <td>19</td>
                    <td>Музика</td>
                    <td>13</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Инф. технологии</td>
                    <td>31/32</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>В.Бояджиев/В.Малин.</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Бълг.език и литер.</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day"> <b>В Т О Р Н И К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>СИП-Математика</td>
                    <td>24</td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>СИП-Математика</td>
                    <td>24</td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Математика</td>
                    <td>24</td>
                    <td>Музика</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Бълг.език и литер.</td>
                    <td>23</td>
                    <td>Бълг.език и литер.</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Инф. технологии</td>
                    <td>29/30</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Л.Сиракова/В.Микова</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                    <td>Бълг.език и литер.</td>
                    <td>21</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Бълг.език и литер.</td>
                    <td>21</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day" > <b>С Р Я Д А</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>СИП-Математика</td>
                    <td>24</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Математика</td>
                    <td>24</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Математика</td>
                    <td>24</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Математика</td>
                    <td>24</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Бълг.език и литер.</td>
                    <td>18</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Бълг.език и литер.</td>
                    <td>18</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day" > <b>Ч Е Т В Ъ Р Т Ъ К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>СИП-Математика</td>
                    <td>24</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Инф. технологии</td>
                    <td>29/30</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Математика</td>
                    <td>24</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>Н.Панева/В.Бояджиев</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Математика</td>
                    <td>24</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Математика</td>
                    <td>24</td>
                    <td>Бълг.език и литер.</td>
                    <td>17</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Бълг.език и литер.</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Бълг.език и литер.</td>
                    <td>17</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Бълг.език и литер.</td>
                    <td>18</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day"> <b>П Е Т Ъ К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Бълг.език и литер.</td>
                    <td>18</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Инф. технологии</td>
                    <td>29/30</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>В.Бояджиев/В.Малин.</td>
                    <td></td>
                    <td>М.Такева-Ненчева</td>
                    <td></td>
                    <td>Емилия Бояджиева</td>
                    <td></td>
                    <td>Елица Бекярова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Бълг.език и литер.</td>
                    <td>18</td>
                    <td>Математика</td>
                    <td>24</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Математика</td>
                    <td>24</td>
                    <td>Бълг.език и литер.</td>
                    <td>19</td>
                    <td>Бълг.език и литер.</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td>Музика</td>
                    <td>13</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Математика</td>
                    <td>24</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td id="7klas">Час на класа</td>
                    <td>13</td>
                    <td>Час на класа</td>
                    <td>24</td>
                    <td>Час на класа</td>
                    <td>14</td>
                    <td>Час на класа</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td>Гина Чергарова</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <br>
        <b>
        	<h2>5-7 клас</h2>
        </b>
        <br>
        <div class="container">
        	<table class="table table-striped table-bordered table-responsive" id="program">
                <tr>
                    <td>час</td>
                    <td></td>
                    <td>Vа</td>
                    <td></td>
                    <td>VIа</td>
                    <td></td>
                    <td>VIIа</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td>предмет</td>
                    <td>каб.</td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day" > <b>П О Н Е Д Е Л Н И К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td>СИП-Математика</td>
                    <td>2</td>
                    <td>Дом.техн.и ик. - І гр.</td>
                    <td>14</td>
                    <td>СИП-Юлиана Камова</td>
                    <td>19</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Кр. Петрова</td>
                    <td></td>
                    <td>Е. Гидикова-Илиева</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>СИП-Математика</td>
                    <td>2</td>
                    <td>Дом.техн.и ик. - І гр.</td>
                    <td>14</td>
                    <td>СИП-Юлиана Камова</td>
                    <td>19</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Кр. Петрова</td>
                    <td></td>
                    <td>Е. Гидикова-Илиева</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>История и цивил. </td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>11</td>
                    <td>Бълг.език и литер.</td>
                    <td>19</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>11</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Кр. Петрова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Човек и природа</td>
                    <td>26</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Бълг.език и лит.</td>
                    <td>2</td>
                    <td>Човек и природа</td>
                    <td>26</td>
                    <td>Математика</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Изобр.изк.</td>
                    <td>14</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>История и цивил.</td>
                    <td>6</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Е. Гидикова-Илиева</td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Изобр.изк.</td>
                    <td>14</td>
                    <td>Бълг.език и литер.</td>
                    <td>13</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Е. Гидикова-Илиева</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day"> <b>В Т О Р Н И К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td>СИП-Математика</td>
                    <td>15</td>
                    <td>СИП-Математика</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>Дом.техн.и ик. - І гр.</td>
                    <td>14</td>
                    <td>СИП-Математика</td>
                    <td>15</td>
                    <td>СИП-Математика</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Инф. технологии</td>
                    <td>29/30</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                    <td>Бълг.език и литер.</td>
                    <td>23</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Н.Панева/Н.Кордова</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Инф.технол. ЗИП</td>
                    <td>29/30</td>
                    <td>Изобр.изкуство</td>
                    <td>14</td>
                    <td>Музика</td>
                    <td>13</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Н.Панева/Н.Кордова</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Бълг.език и лит.</td>
                    <td>2</td>
                    <td>Бълг.език и литер.</td>
                    <td>13</td>
                    <td>География и икон.</td>
                    <td>20</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Математика</td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>11</td>
                    <td>Математика - ЗИП</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Физ.възп. и спорт</td>
                    <td></td>
                    <td>География и икон.</td>
                    <td>20</td>
                    <td>Математика - ЗИП</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Геогр. и иконом.</td>
                    <td>20</td>
                    <td>Английски език</td>
                    <td>10</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day"> <b>С Р Я Д А</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td>3ДЧ - ФВС</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td>Д.Нестерова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Бълг.език и лит.</td>
                    <td>2</td>
                    <td>Музика</td>
                    <td>13</td>
                    <td>Математика</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Английски език</td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>11</td>
                    <td>Физика и астроном.</td>
                    <td>25</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td>Катя Стефанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Физ.възп. и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>4</td>
                    <td>Бълг.език и литер.</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>История и цивил.</td>
                    <td>2</td>
                    <td>Бълг.език и литер.</td>
                    <td>13</td>
                    <td>Технологии</td>
                    <td>14</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Математика</td>
                    <td>2</td>
                    <td>Дом.техн.и ик.- ІІ гр.</td>
                    <td>14</td>
                    <td>Инф. технологии</td>
                    <td>29/30</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Ц.Славкова/В.Малин.</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Човек и природа</td>
                    <td>26</td>
                    <td>Дом.техн.и ик.- ІІ гр.</td>
                    <td>14</td>
                    <td>Инф. технол. ЗИП</td>
                    <td>29/30</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Ц.Славкова/В.Малин.</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day" > <b>Ч Е Т В Ъ Р Т Ъ К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td>СИП-Математ. /клуб/</td>
                    <td>2</td>
                    <td>СИП-Матем. /клуб/</td>
                    <td>19</td>
                    <td>СИП-Матем. /клуб/</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Кр. Петрова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>СИП-Математ. /клуб/</td>
                    <td>2</td>
                    <td>СИП-Матем. /клуб/</td>
                    <td>19</td>
                    <td>СИП-Матем. /клуб/</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Кр. Петрова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Математика</td>
                    <td>2</td>
                    <td>География и икон.</td>
                    <td>20</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>11</td>
                    <td>Бълг.език и литер.</td>
                    <td>17</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Инф. технологии</td>
                    <td>29/30</td>
                    <td>Математика</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                    <td>В.Шишин./В. Микова</td>
                    <td></td>
                    <td>Христина Стефанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Музика</td>
                    <td>13</td>
                    <td>Инф. технол. ЗИП</td>
                    <td>29/30</td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td>В.Шишин./В. Микова</td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Бълг.език и литер.</td>
                    <td>2</td>
                    <td>Бълг.език и литер.</td>
                    <td>11</td>
                    <td>История и цивил.</td>
                    <td>6</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Мая Кръстанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Английски език</td>
                    <td>2</td>
                    <td>Музика</td>
                    <td>13</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Гергана Дамянова</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="11" id="day"> <b>П Е Т Ъ К</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>-1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td>Час на класа</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>Час на класа</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Математика</td>
                    <td>2</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td>Английски език</td>
                    <td>15</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Красимира Петрова</td>
                    <td></td>
                    <td>П.Стойч.-Маргинова</td>
                    <td></td>
                    <td>Димитрийка Боева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Бълг.език и литер.</td>
                    <td>2</td>
                    <td>Математика</td>
                    <td>11</td>
                    <td>Бълг.език и литер.</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Юлиана Камова</td>
                    <td></td>
                    <td>Мария Маркова</td>
                    <td></td>
                    <td>Мария Янчева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Човек и природа</td>
                    <td>26</td>
                    <td>Английски език</td>
                    <td>16</td>
                    <td>Физ.възп.и спорт</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Даниела Несторова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>География и иконом.</td>
                    <td>20</td>
                    <td>Човек и природа</td>
                    <td>26</td>
                    <td>Биология и здр.обр.</td>
                    <td>23</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Людмила Стоянова</td>
                    <td></td>
                    <td>Краси Манчева</td>
                    <td></td>
                    <td>Вера Цонева</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Английски език</td>
                    <td>2</td>
                    <td>Бълг.език и литер.</td>
                    <td>12</td>
                    <td>Химия и оп. на ок.ср.</td>
                    <td>1</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>М.Бъбарова</td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td>Дима Трифонова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Дом.техн.и ик. - ІІ гр.</td>
                    <td>14</td>
                    <td>История и цивил.</td>
                    <td>21</td>
                    <td>Математика</td>
                    <td>18</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Е.Гидикова-Илиева</td>
                    <td></td>
                    <td>Ана Рабаджийска</td>
                    <td></td>
                    <td>Хр. Стефанова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td>Час на класа</td>
                    <td>12</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Цанко Бангьозов</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
    </body>
 @stop
