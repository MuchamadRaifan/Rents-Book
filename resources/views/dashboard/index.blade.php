@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')
<h1>Hallo, Admin</h1>
<div class="row my-5">
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-journals"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        Books
                    </div>
                    <div class="card-count">
                        100
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data category">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-tags"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        Category
                    </div>
                    <div class="card-count">
                        6
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data user">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        User
                    </div>
                    <div class="card-count">
                        {{$data}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
