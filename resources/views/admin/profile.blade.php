@extends('admin-app')
@section('admin-content')
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на нов профил</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="profile-name">Въведи профил:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="profile-name"
                                       placeholder="например: ИТ, Математика, AE">
                            </div>
                            <div clas="col-md-5">
                                <button type="submit" class="btn btn-default">Запиши</button>
                            </div>
                        </div>
                    </form>
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Изтриване на съществуващ профил</div>
            <div class="panel-body">
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