@extends('teacher-app')
@section('teacher-content')
    <div class="col-md-9">

        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Добре дошли!</div>
            <div class="panel-body">
                <p id="historytext">
                    Добре дошли <b>{{$user->full_name}}, </b>
                </p>
                <p id="historytext">
                    Това е Вашият личен профил от който може да въвеждане оценки на учениците.
                    От менюто в ляво може да избере да напишете оценка или да прегледате
                    вече написаните оценки.
                <p id="historytext">
                    Важно е да знаете, че не можете да изтривате оценка!
                    Ако след въвеждате прецените че оценката е неправилна, то може да я редактирате и да и зададете тип „невалидна“.
                </p>
                <p align="right">
                    <i>
                        Поздрави, <br> Йо и Стаси
                    </i>
                </p>
            </div>
        </div>

        @stop
    </div>