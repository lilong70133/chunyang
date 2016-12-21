@extends('common.index')
@section('content')
    <article class="page-container">
        {!! Form::open(['route'=>['role.update',$role->id],'method'=>'put','class'=>'form form-horizontal','id'=>'role_edit']) !!}
        {!! Form::bsText('name',$role->name,['red'=>1,'text'=>'角色名称','nullmsg'=>'角色名不能为空']) !!}
        {!! Form::close() !!}
    </article>
@endsection