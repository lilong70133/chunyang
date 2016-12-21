@extends('common.index')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <p>编辑</p>
            <form class="form-horizontal" role="form" action="{{route('role.update',['id'=>$role->id])}}" method="post">
                {{ method_field('PUT') }}
                {{ csrf_field('PUT') }}
                {{--<div class="form-group">--}}
                    {{--<label for="inputId" class="col-sm-4 control-label">{{trans('common.id')}}</label>--}}
                    {{--<div class="col-sm-4">--}}
                        {{--<p class="form-control-static">{{$role->id}}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="inputName" class="col-sm-4 control-label">{{trans('common.name')}}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputName" placeholder="{{trans('common.name')}}" value="{{$role->name}}" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDsName" class="col-sm-4 control-label">{{trans('common.ds_name')}}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputDsName" placeholder="{{trans('common.ds_name')}}" value="{{$role->display_name}}" name="display_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDs" class="col-sm-4 control-label">{{trans('common.ds')}}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputDs" placeholder="{{trans('common.ds')}}" value="{{$role->description}}" name="description">
                    </div>
                </div>
                <div class="form-group">
                    <label for="selectPermission" class="col-sm-4 control-label">{{trans('common.ds')}}</label>
                    <div class="col-sm-4">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">Action</button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                {{--<li class="divider"></li>--}}
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Split button -->


                {{--<div class="form-group">--}}
                    {{--<div class="col-sm-offset-4 col-sm-8">--}}
                        {{--<div class="checkbox">--}}
                            {{--<label>--}}
                                {{--<input type="checkbox"> Remember me--}}
                            {{--</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-default">{{trans('common.sure')}}</button>
                    </div>
                </div>
            </form>


        </div>
    </div>

@endsection