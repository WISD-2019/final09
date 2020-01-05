@extends('frontend.layouts.master')
@section('title','電影售票')
@section('content')
<!-- Page Content -->
<html lang="zh-TW">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>時刻查詢</h2>
    <table class="table table-hover">
        <tbody>
        @foreach($movies as $movie)
        <tr>
            <td><div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{$movie->photo_url}}" alt=""></a>
                    </div>
                </div>
            </td>
            <td>時刻表</td>
            @foreach($sections as $section)
                @if ($section->movie_id==$movie->id)
                    <td>{{$section->start_time}}</td>
                @endif
            @endforeach
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
@endsection
