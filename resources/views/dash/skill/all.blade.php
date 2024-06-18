@extends('dash.layouts.app')

@section('title' , 'skill')

@push('custom_css')
<link href="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.css" rel="stylesheet">
@endpush

@push('custom_js')
<script src="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.js"></script>

<script>
let table = new DataTable('#skillsTable');
</script>
@endpush

@section('content')
<div class="container">


            <div class="card col-12">
                <div class="card-body pa-0">
                    <div class="table-wrap">
                        <a href="{{ route('dashboard.skills.create') }}" class="btn btn-info"> Add New</a>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="skillsTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>image</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $skill)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $skill->name }}</td>
                                        @foreach ( $skill->media as $image )
                                        <td>
                                            <img src=" {{ $image->geturl() }} " class="img-fluid" width="75px" height="75px" alt="">
                                        </td>
                                        @endforeach


                                        <td>
                                            <div class="button-list">

                                                <a href="{{ route('dashboard.skills.edit' , $skill->id ) }}"> <button class="btn btn-icon btn-secondary btn-icon-style-1">
                                                    <span class="btn-icon-wrap"><i class="fa fa-pencil"></i></span></button>
                                                </a>


                                                <form action="{{ route('dashboard.skills.destroy' , $skill->id ) }}" method="POST">
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
