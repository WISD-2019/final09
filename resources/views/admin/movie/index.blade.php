@extends('admin.layouts.master')
@section('title','後臺管理')
@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                電影管理 <small>所有電影列表</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 電影管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row" style="margin-bottom: 20px; text-align: right">
        <div class="col-lg-12">
            <a href="{{ route('admin.movie.create') }}" class="btn btn-success">建立新電影</a>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="30" style="text-align: center">#</th>
                        <th width="100" style="text-align: center">電影名稱</th>
                        <th width="100" style="text-align: center">上映日期</th>
                        <th width="100" style="text-align: center">功能</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($movies as $movie)
                        <tr>
                            <td style="text-align: center">{{ $movie->id }}</td>
                            <td>{{ $movie->name }}</td>
                            <td style="text-align: center">{{$movie->start_date}}</td>
                            <td>
                                <a href="{{route('admin.movie.edit',$movie->id)}}">編輯</a>
                                /
                                <form action="{{ route('admin.movie.destroy', $movie->id) }}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}

                                    <button class="btn btn-link">刪除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /.row -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
