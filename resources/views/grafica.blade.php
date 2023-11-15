@extends('layout')

@section('content')
    <div class="container" style="height: 120vh">
        <h2>GALLETAS</h2>
        <div class="graphic-cookies">
            <canvas id="container-cookies"></canvas>
        </div>

        <h2>FIDEOS</h2>
        <div class="graphic-fideos">
            <canvas id="container-fideos"></canvas>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{!! asset('js/cookies.js') !!}"></script>
    <script></script>
@endsection
