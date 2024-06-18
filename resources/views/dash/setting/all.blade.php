@extends('dash.layouts.app')

@section('title' , 'setting')

@section('content')
<div class="container">


            <div class="card col-12">
                <div class="card-body pa-0">
                    <div class="table-wrap">
                        <a href="{{ route('dashboard.settings.create') }}" class="btn btn-info"> Add New</a>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>image</th>
                                        <th>username</th>
                                        <th>description</th>
                                        <th>linkedin</th>
                                        <th>github</th>
                                        <th>phone</th>
                                        <th>email</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $setting)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        @foreach ( $setting->media as $image )
                                        <td>
                                            <img src="{{ $image->geturl() }}" class="img-fluid" width="75px" height="75px" alt="">
                                        </td>
                                        @endforeach
                                        <td>{{ $setting->name }}</td>
                                        <td>{{ $setting->description }}</td>
                                        <td>{{ $setting->linkedin }}</td>
                                        <td>{{ $setting->github }}</td>
                                        <td>{{ $setting->phone }}</td>
                                        <td>{{ $setting->email }}</td>
                                        <td>
                                            <div class="button-list">
                                                <a href="{{ route('dashboard.settings.edit', $setting->id) }}" class="btn btn-icon btn-secondary btn-icon-style-1">
                                                    <span class="btn-icon-wrap"><i class="fa fa-pencil"></i></span>
                                                </a>
                                                <form action="{{ route('dashboard.settings.destroy', $setting->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-icon btn-info btn-icon-style-1">
                                                        <span class="btn-icon-wrap"><i class="icon-trash"></i></span>
                                                    </button>
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
            </div>

            @endsection
