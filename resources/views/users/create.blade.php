@php
    $title = ('Create User');
@endphp
@extends('layouts.my')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('users') }}" method="post">
        @csrf {{-- CSRF保護 --}}
        @method('POST') {{-- 疑似フォームメソッド --}}
        <div class="form-group">
            <label for="name">{{ ('Name') }}</label>
            <input id="name" type="text" class="form-control" name="name" required autofocus>
        </div>
        <div class="form-group">
            <label for="email">{{ ('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">{{ ('Password') }}</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">{{ ('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{ ('Submit') }}</button>
    </form>
</div>
@endsection