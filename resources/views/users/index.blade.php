@extends('skeleton.dashboard')

@section('name', 'Users')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <p class="card-category">Used Space</p>
                        <h3 class="card-title">49/50
                            <small>GB</small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
