<!-- layouts/admin.blade.phpを読み込む -->
@extends('layouts.admin')
<!-- admin.blade.phpの@yield('title')に'HAHAごはん'を埋め込む -->
@section('title', 'HAHAごはん')
<!-- admin.blade.phpの@yield('content')に以下のタグを埋め込む -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>HAHAごはん作成画面</h2>
            </div>
        </div>
    </div>
@endsection