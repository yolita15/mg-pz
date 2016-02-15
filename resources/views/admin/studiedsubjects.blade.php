@extends('admin-app')
@section('admin-content')
    <div class="col-sm-10">
        <div class="panel panel-default">
            <div class=" panel-heading" id="admin-heading">Изучавани учебни предмети</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-offset-2 col-md-3" for="class">Избери клас:</label>
                            <div class="col-md-2">
                                <select class="form-control" id="class">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                    </form>
                </form>

                <div class="row">
                    <div class="col-md-offset-3" align="left">
                        <label class="control-label">Учебни предмети, изучавани в този клас:</label>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Математика</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Информатика</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox">Информационни технологии</label>
                        </div>
                    </div>
                    <br>
                    <div align="center">
                        <button type="submit" class="btn btn-default">Запиши</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
@stop