@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/assets/index.css') }}">

@section('content')
<div class="message-area">
    <p class="stamping-massage">ユーザーさんお疲れ様です！</p>
</div>
<div class="stamping">
    <form action="">
        <div class="start-work">
            <button type="submit" autofocus class="button">勤務開始</button>
        </div>
        <div class="end-work">
            <button type="submit" autofocus class="button">勤務終了</button>
        </div>
        <div class="start-break">
            <button type="submit" autofocus class="button">休憩開始</button>
        </div>
        <div class="end-break">
            <button type="submit" autofocus class="button">休憩終了</button>
    </form>
</div>

@endsection