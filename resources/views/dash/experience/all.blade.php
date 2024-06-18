@extends('dash.layouts.app')

@section('title' , 'skill')

@push('custom_css')
<link href="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.css" rel="stylesheet">
@endpush

@push('custom_js')
<script src="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.js"></script>

<script>
let table = new DataTable('#experiencesTable');
</script>
@endpush

@section('content')
<div class="container">


            <div class="card col-12">
                <div class="card-body pa-0">
                    <div class="table-wrap">
                        <a href="{{ route('dashboard.experiences.create') }}" class="btn btn-info"> Add New</a>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="experiencesTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>date</th>
                                        <th>description</th>
                                        <th>department</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $exp)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $exp->name }}</td>
                                        <td>{{ $exp->date }}</td>
                                        <td>{{ $exp->description }}</td>
                                        <td>{{ $exp->department }}</td>
                                        <td>
                                            <div class="button-list">

                                                <a href="{{ route('dashboard.experiences.edit' , $exp->id ) }}"> <button class="btn btn-icon btn-secondary btn-icon-style-1">
                                                    <span class="btn-icon-wrap"><i class="fa fa-pencil"></i></span></button>
                                                </a>


                                                <form action="{{ route('dashboard.experiences.destroy' , $exp->id ) }}" method="POST">
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
