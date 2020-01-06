@extends('admin.layouts.master')
@section('title','後臺管理')
@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                新增電影 <small></small>
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
            <form action="{{ route('admin.section.store') }}" method="POST" role="form">
                {{ csrf_field() }}
                <form role="form">

                    <div class="form-group">
                        <label>電影編號：</label>
                        <input name="movie_id" class="form-control" placeholder="請輸入電影編號">
                    </div>

                    <div class="form-group">
                        <label>場次時間：</label>
                        <input name="start_time" class="form-control" placeholder="請輸入場次時間">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">新增</button>
                    </div>

                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

                </form>
            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection
