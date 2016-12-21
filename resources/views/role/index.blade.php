@extends('common.index')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th data-field="id">{{trans('common.id')}}</th>
                    <th data-field="name">{{trans('common.name')}}</th>
                    <th data-field="display_name">{{trans('common.ds_name')}}</th>
                    <th data-field="description">{{trans('common.ds')}}</th>
                    <th data-field="updated_at">{{trans('common.update_time')}}</th>
                    <th data-field="created_at">{{trans('common.add_time')}}</th>
                    <th data-field="created_at">{{trans('common.caozuo')}}</th>
                </tr>
                </thead>
                <tbody>
                @if(count($roles)>0)
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->display_name}}</td>
                            <td>{{str_limit($role->description,20)}}</td>
                            <td>{{$role->updated_at}}</td>
                            <td>{{$role->created_at}}</td>
                            <td>

                                <a href="{{route('role.edit',['id'=>$role->id])}}" type="button" class="btn btn-default btn-xs">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>

                                <a href="{{route('role.destroy',['id'=>$role->id])}}" type="button" class="btn btn-default btn-xs">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {{ $roles->links() }}
        </div>
    </div>

@endsection