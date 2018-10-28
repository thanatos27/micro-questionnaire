@extends('layouts.app')
@section('title', "Quick Vote")

<div class="container">
    <div class="jumbotron text-center">
        <h1>Quick Vote</h1>
        <p>アンケート作成サービスです。</p>
    </div>
    <div class="row">
        <div class="mx-auto">
            <a class="btn btn-primary btn-lg start-btn" href="{{ url('/votes/create') }}">Start</a>
        </div>
    </div>
</div>

@section('content')