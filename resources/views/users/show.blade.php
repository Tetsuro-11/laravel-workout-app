@php
    $title = ('User') . ': ' . $user->name;
@endphp
@extends('layouts.my')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    {{-- 編集・削除ボタン --}}
    <div>
        <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-primary">
            {{ ('Edit') }}
        </a>
        {{-- 削除ボタンは後で正式なものに置き換えます --}}
        <a href="#" class="btn btn-danger">
            {{ ('Delete') }}
        </a>
    </div>

    {{-- ユーザー1件の情報 --}}
    <dl class="row">
        <dt class="col-md-2">{{ ('ID') }}</dt>
        <dd class="col-md-10">{{ $user->id }}</dd>
        <dt class="col-md-2">{{ ('Name') }}</dt>
        <dd class="col-md-10">{{ $user->name }}</dd>
        <dt class="col-md-2">{{ ('E-Mail Address') }}</dt>
        <dd class="col-md-10">{{ $user->email }}</dd>
    </dl>
</div>
@endsection