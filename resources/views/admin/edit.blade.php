@extends('admin.layouts.master')
@section('title','後臺管理')
@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                編輯文章 <small>編輯文章內容</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 文章管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    @include('admin.layouts.partials.validation')
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <form action="/admin/posts/{{$movie->id}}" method="POST" role="form">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <form role="form">

                    <div class="form-group">
                        <label>標題：</label>
                        <input name="title" class="form-control" placeholder="請輸入文章標題" value="{{$movie->title}}">
                    </div>

                    <div class="form-group">
                        <label>內容：</label>
                        <textarea name="content" class="form-control" rows="10">{{$movie->content}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>精選？</label>
                        <select name="is_feature" class="form-control" >
                            <option value="0" {{ $movie->is_feature?'':'SELECTED' }}>否</option>
                            <option value="1" {{ $movie->is_feature?'SELECTED':'' }}>是</option>
                        </select>
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
