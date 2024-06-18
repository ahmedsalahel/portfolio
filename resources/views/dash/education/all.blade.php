@extends('dash.layouts.app')

@section('title' , 'skill')

@push('custom_css')
<link href="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.css" rel="stylesheet">
@endpush

@push('custom_js')
<script src="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.js"></script>

<script>
let table = new DataTable('#educationsTable');
</script>
@endpush

@section('content')
<div class="container">


            <div class="card col-12">
                <div class="card-body pa-0">
                    <div class="table-wrap">
                        <a href="{{ route('dashboard.educations.create') }}" class="btn btn-info"> Add New</a>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="educationsTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>date</th>
                                        <th>country</th>
                                        <th>description</th>
                                        <th>section</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $edu)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $edu->name }}</td>
                                        <td>{{ $edu->date }}</td>
                                        <td>{{ $edu->country }}</td>
                                        <td>{{ $edu->description }}</td>
                                        <td>{{ $edu->section }}</td>
                                        <td>
                                            <div class="button-list">

                                                <a href="{{ route('dashboard.educations.edit' , $edu->id ) }}"> <button class="btn btn-icon btn-secondary btn-icon-style-1">
                                                    <span class="btn-icon-wrap"><i class="fa fa-pencil"></i></span></button>
                                                </a>


                                                <form action="{{ route('dashboard.educations.destroy' , $edu->id ) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-icon btn-info btn-icon-style-1">
                                                        <span class="btn-icon-wrap"><i class="icon-trash"></i></span></button>
                                                </form>

                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


</div>
</div>


@endsection
