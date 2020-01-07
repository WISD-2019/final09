@extends('frontend.layouts.master')
@section('title','電影售票')
@section('content')
    <!-- Page Content -->
    <html lang="zh-TW">

    <body>

        {{ csrf_field() }}
    <div class="container">
        <h2>開始訂票</h2>
        <table class="table">
            <tbody>
            <tr>
                <th scope="col">電影名稱</th>
                <th scope="col">選擇時刻</th>
                <th scope="col">數量</th>
                <th scope="col">票價</th>
            </tr>
            <tr>
                <td>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>
                            <select name="movie_name">
                                @foreach($movies as $movie)
                                    <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>
                            <select name="section_start_time">
                                @foreach($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->start_time }}</option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>
                            <select name="sheets">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </p>
                    </div>
                </td>
                <td>280</td>
            </tr>
            <tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <a class="button" href="{{ url('/done') }}">下一步
                        <span class="sr-only">(current)</span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    </body>
    </html>
@endsection
