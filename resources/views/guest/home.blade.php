@extends('layouts.app')

@section('content')

    <div>Front</div>

    <div class="content">
        <div id="root"></div>
    </div>

    <script src=" {{asset('js/app.js')}} "></script>
    <script src=" {{asset('js/front.js')}} "></script>

@endsection
