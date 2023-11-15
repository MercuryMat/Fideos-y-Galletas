@extends('layout')

@section('content')
    <div class="container">
        <h2>GALLETAS</h2>
        <div class="container-cookies"></div>
        <h2>FIDEOS</h2>
        <div class="container-fideos"></div>
    </div>
@endsection

@section('scripts')
    <script src="{!! asset('js/getCookies.js') !!}"></script>
    <script src="{!! asset('js/getFideos.js') !!}"></script>
    <script>
        getCookies('');
        getFideos('');
    </script>
@endsection
