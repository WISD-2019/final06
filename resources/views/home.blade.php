@extends('layouts.app')

@section('content')
<div class="container" style="font-family: '微軟正黑體'" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    登入成功!
                        <br><br>
                        <h2><a href="http://localhost:8000/" target="_parent">回首頁</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
