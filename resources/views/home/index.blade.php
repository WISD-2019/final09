@extends('frontend.layouts.master')
@section('title','電影售票')
@section('content')
<!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">現正熱映</h1>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">


        </div>

        <div class="row">
                @foreach ($movies as $movie)
                      <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                          <a href="#"><img class="card-img-top" src="{{ $movie->photo_url }}" alt="" style="width:100%"></a>
                          <div class="card-body">
                            <h4 class="card-title">
                              <a href="#">{{ $movie->name }}</a>
                            </h4>
                              <p class="card-text" style="overflow:scroll ;height:300px"; >{{ $movie->introduction }}</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">{{ $movie->start_date }} 上映</small>
                          </div>
                        </div>
                      </div>
                    @endforeach
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
