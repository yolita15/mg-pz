@extends('admin-app')
@section('admin-content')
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на нов клас</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="class-name">Въведи клас:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="class-name" placeholder="например: 8а">
                            </div>
                        </div>
                    </form>
                </form>

                <form class="form-horizontal" role="form">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="profile">Избери профил:</label>
                            <div class="col-md-6">
                                <select class="form-control" id="profile">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div align="center">
                            <button type="submit" class="btn btn-default">Запиши</button>
                        </div>

                    </form>
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Изтриване на съществуващ клас</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="class">Избери клас:</label>
                            <div class="col-md-6">
                                <select class="form-control" id="class">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div clas="col-md-5">
                                <button type="submit" class="btn btn-default">Изтрий</button>
                            </div>
                        </div>

                    </form>
                </form>
            </div>
        </div>
    </div>
@stop