@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на нов ученик</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-md-3" for="first-name">Въведи име:</label>
                        <div class="col-md-5">
                            <input type="email" class="form-control" id="first-name" placeholder="Име">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="last-name">Въведи фамилия:</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" id="last-name" placeholder="Фамилия">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="sel1">Избери клас:</label>
                        <div class="col-md-2">
                            <select class="form-control" id="sel1">
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="username">Въведи потребителско име:</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" id="username" placeholder="ivan.ivanov">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="password">Въведи парола:</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" id="password" placeholder="ivanivanov">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="sel1">Тип на потребителя:</label>
                        <div class="col-md-2">
                            <select class="form-control" id="sel1">
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div align="center">
                        <button type="submit" class="btn btn-default">Създай</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Редактиране на съществуващ ученик</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="class">Избери клас:</label>
                            <div class="col-md-3">
                                <select class="form-control" id="class">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="student">Избери ученик:</label>
                            <div class="col-md-3">
                                <select class="form-control" id="student">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="first-name-edit">Редактирай име:</label>
                            <div class="col-md-5">
                                <input type="email" class="form-control" id="first-name-edit" placeholder="Име">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="last-name-edit">Редактирай фамилия:</label>
                            <div class="col-md-5">
                                <input type="password" class="form-control" id="last-name-edit" placeholder="Фамилия">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="class-edit">Редактирай клас:</label>
                            <div class="col-md-3">
                                <select class="form-control" id="class-edit">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div align="center">
                            <button type="submit" class="btn btn-default">Редактирай</button>
                        </div>

                    </form>
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Изтриване на съществуващ ученик</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="class">Избери клас:</label>
                            <div class="col-md-3">
                                <select class="form-control" id="class">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="student">Избери ученик:</label>
                            <div class="col-md-3">
                                <select class="form-control" id="student">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div align="center">
                            <button type="submit" class="btn btn-default">Изтрий</button>
                        </div>

                    </form>
                </form>
            </div>
        </div>
    </div>
@stop