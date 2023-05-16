@extends('layouts.main')
@section('title', 'Edit')
@section('content')
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit</p>
                  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
                  rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
                  </head>
                  <form action="{{ route('dashboard.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text"  name='name' class="form-control" id="name" value="{{old('name', $data->name)}}">
                    </div>

                    <div class="mb-3">
                        {{-- <label for="email" name='email' class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div> --}}

                    <div class="mb-3">
                        <label for="phone" class="form-label">NO HP</label>
                        <input type="number" name='phone' class="form-control" id="phone" value="{{old('phone', $data->phone)}}">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="address" name='address' class="form-control" id="address" value="{{old('address', $data->address)}}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg ms-3">Submit</button>

                </div>
@endsection
