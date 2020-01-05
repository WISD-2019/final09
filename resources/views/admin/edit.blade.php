@extends('admin.layouts.master')
@section('title','後臺管理')
@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                編輯電影 <small>編輯電影內容</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 電影管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('admin.update', $movie->id) }}" method="POST" role="form">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <form role="form">

                    <div class="form-group">
                        <label>電影名稱：</label>
                        <input name="name" class="form-control" placeholder="請輸入電影名稱" value="{{$movie->name}}">
                    </div>

                    <div class="form-group">
                        <label>宣傳海報網址：</label>
                        <input name="photo_url" class="form-control" placeholder="請輸入電影宣傳海報網址" value="{{$movie->photo_url}}">
                    </div>

                    <div class="form-group">
                        <label>導演：</label>
                        <input name="director" class="form-control" placeholder="請輸入導演名字" value="{{$movie->director}}">
                    </div>

                    <div class="form-group">
                        <label>演員：</label>
                        <input name="actor" class="form-control" placeholder="請輸入演員陣容" value="{{$movie->actor}}">
                    </div>

                    <div class="form-group">
                        <label>電影介紹：</label>
                        <textarea name="introduction" class="form-control" rows="10">{{$movie->introduction}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>片長：</label>
                        <input name="length" class="form-control" placeholder="請輸入片長" value="{{$movie->length}}">
                    </div>

                    <div class="form-group">
                        <label>上映日期：</label>
                        <input name="start_date" class="form-control" placeholder="請輸入上映日期" value="{{$movie->start_date}}">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">更新</button>
                    </div>

                </form>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </form>>
        </div>
    </div>
@endsection
