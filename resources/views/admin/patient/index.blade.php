@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Patients</h5>
                        <span>list of all patients</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Patients</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            @if(Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header"><h3>Data Table</h3>

                </div>
                <div class="card-body">
                    <table id="data_table" class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="nosort">Avatar</th>
                            <th>Address</th>
                            <th>Phone number</th>
                            <th>Symptoms</th>
                            <th class="nosort">&nbsp;</th>
                            <th class="nosort">&nbsp;</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(count($patients))
                            @foreach($patients as $patient)
                                <tr>
                                    <td>{{$patient->name}}</td>
                                    <td><img src="{{asset('images')}}/{{'4MPnOUgn92WdyWJwuiX9FaZFOKD6iuI5qBubxYzc.jpeg'}}" class="table-user-thumb" alt=""></td>

                                    <td>{{$patient->address}}</td>
                                    <td>{{$patient->phone_number}}</td>
                                    <td>{{$patient->symptoms}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" data-toggle="modal" data-target="#exampleModal{{$patient->id}}">
                                                <i class="ik ik-eye"></i>
                                            </a>
                                            <a href="{{route('patient.edit',[$patient->id])}}"><i class="ik ik-edit-2"></i></a>

                                            <a href="{{route('patient.show',[$patient->id])}}">
                                                <i class="ik ik-trash-2"></i>
                                            </a>

                                        </div>
                                    </td>
                                    <td>x</td>

                                </tr>

                                <!-- View Modal -->
                                @include('admin.patient.modal')



                            @endforeach

                        @else
                            <td>No user to display</td>
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection