@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading"> Създаване на нов учебен предмет</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="subject">Въведи учебен предмет:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="subject" placeholder="например: Математика">
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
            <div class=" panel-heading" id="admin-heading"> Изтриване на съществуващ учебен предмет</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="subject">Избери учебен предмет:</label>
                            <div class="col-md-6">
                                <select class="form-control" id="subject">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default">Изтрий</button>
                            </div>
                        </div>

                    </form>
                </form>
            </div>
        </div>


    </div>
@stop