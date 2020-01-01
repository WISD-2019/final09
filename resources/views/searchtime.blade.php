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
        <tr>
            <td><div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://capi.showtimes.com.tw/thumbs/3f/3fa5258bafeb6d654d70fc2ae6327a68.jpeg" alt=""></a>
                    </div>
                </div>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://capi.showtimes.com.tw/thumbs/01/01d457eb9879822215f8ca928eccd740.jpeg" alt=""></a>
                    </div>
                </div></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://capi.showtimes.com.tw/thumbs/99/99d1c1c00791b164fc3ca8bf2cc687ec.jpeg" alt=""></a>
                    </div>
                </div></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>
@endsection
