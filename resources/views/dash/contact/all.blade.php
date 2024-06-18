@extends('dash.layouts.app')

@section('title' , 'messages')

@push('custom_css')
<link href="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.css" rel="stylesheet">
@endpush

@push('custom_js')
<script src="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.js"></script>

<script>
let table = new DataTable('#messagesTable');
</script>
@endpush

@section('content')
<div class="container">


            <div class="card col-12">
                <div class="card-body pa-0">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="messagessTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>message</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $message)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->phone }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td>
                                            <div class="button-list">




                                                <form action="{{ route('dashboard.messages.destroy' , $message->id  ) }}" method="POST">
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
