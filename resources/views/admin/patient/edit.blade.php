@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-edit bg-blue"></i>
                    <div class="d-inline">
                        <h5>Patients</h5>
                        <span>Update Patient</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Patient</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            @if(Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif

            <div class="card">
                <div class="card-header"><h3>Update Patient</h3></div>
                <div class="card-body">
                    <form class="forms-sample" action="{{route('patient.update',[$patient->id])}}" method="post" enctype="multipart/form-data" >@csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Full name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="doctor name" value="                   {{$patient->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email"value="                   {{$patient->email}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <label for="">Gender</label>
                                <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                    @foreach(['male','female'] as $gender)
                                        <option value="{{$gender}}" @if($patient->gender==$gender)selected @endif>{{$gender}}</option>
                                    @endforeach
                                </select>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Education</label>
                                <input type="text" name="symptoms" class="form-control @error('symptoms') is-invalid @enderror" placeholder="symptoms" value="                   {{$patient->symptoms}}">
                                @error('education')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="doctor address"  value="{{$patient->address}}">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone number</label>
                                    <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror"value="{{$patient->phone_number}}">
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control file-upload-info @error('image') is-invalid @enderror"  placeholder="Upload Image" name="image">
                                    <span class="input-group-append">

                        </span>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="exampleTextarea1">Health status</label>
                            <textarea class="form-control @error('health_condition') is-invalid @enderror" id="exampleTextarea1" rows="4" name="health_condition">
                {{$patient->health_condition}}

                </textarea>
                            @error('health_condition')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>


                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection