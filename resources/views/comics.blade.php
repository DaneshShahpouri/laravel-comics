@extends('layout/main-layout')

@section('content-page')
<main class="main">
    <div class="container">
        <div class="current-series">

            @foreach ($comics as $singleComic)
            <div class="_card">
                <div class="img-wrapper">
                    <img src="{{$singleComic["thumb"]}}" alt="">
                </div>

                <span class="titl3">{{$singleComic["title"]}}</span>
            </div>
            @endforeach

        </div>
    </div>  
</main>
@endsection