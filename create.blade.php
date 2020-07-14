<!--ここから「PHP/Laravel 11 課題4」より記述200709-->

{{--layouts/profile.blade.phpを読み込む--}}
@extends('layouts.profile')

{{--profile.blade.phpの@yield('title')に'プロフィールの新規作成'を埋め込む--}}
@section('title', 'プロフィールの新規作成')

{{--admin.blade.phpの@yield('content')に以下のタグを埋め込む--}}
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>Myプロフィール</h2>
      </div>
    </div>
  </div>
@endsection