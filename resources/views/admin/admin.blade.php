@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Добре дошли!</div>
            <div class="panel-body">
                <p id="historytext">
                    Добре дошли в администраторския панел на електронния дневник!
                </p>
                <p id="historytext">
                    Тук накратко ще Ви обясним как лесно и правилно да използвате дадените Ви права.
                    Както вече знаете, като администратор на приложението,
                    Вие може да добавяте и да изтривате различни записи.
                    <br><br>
                    В страницата „Профил“ може да създавате нов профил ( например: „ИТ, Математика, АЕ“ ) и да изтривате
                    съществуващ вече такъв.
                    <br>
                    В страницата „Клас“ може да създавате нов клас ( например: „8а“ ) и да изтривате съществуващ вече
                    такъв.
                    <br>
                    В страницата „Учебни предмети“ може да създавате нов клас ( например: „Математика“ ) и изтривате
                    съществуващ вече такъв.
                    <br>
                    В страницата „Ученик“ може да създавате нов профил от тип „ученик“
                    (забележка: потребителското име и паролата е желателно да бъдат записани по дадения пример), да
                    изтривате и да
                    редактирате съществуващ такъв. При редакция не е възможна промяна на потребителското име, паролата и
                    типа на профила!
                    <br>
                    В страницата „Учител“ може създавате нов профил от тип „учител“
                    (забележка: потребителското име и паролата е желателно да бъдат записани по дадения пример),
                    да изтривате и да редактирате съществуващ такъв . Ако учителят преподава по повече от един предмет,
                    се избират съответно „Предмет 2“, „Предмет 3“, „Предмет 4“ и т.н .
                    При редакция не е възможна промяна на потребителското име, паролата и типа на профила!
                    <br>
                    В страницата „Изучаване на учебните предмети“ може да избирате предметите, които даден клас изучава.
                    Ако даден предмет не фигурира в списъка, то значи той не съществува и е нужно да бъде създаден в
                    страницата „Учебни предмети“.
                </p>
                <br>
                <p align="right">
                    <i>
                        Поздрави, <br> Йо и Стаси
                    </i>

                </p>

            </div>
        </div>
    </div>
@stop


