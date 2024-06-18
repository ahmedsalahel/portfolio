
@extends('dash.layouts.app')
@section('title' , 'projects')

@section('content')
<div class="col-xl-12">
    <section class="hk-sec-wrapper">

        <h5 class="hk-sec-title">Default Layout</h5>
        <p class="mb-25">More complex forms can be built using the grid classes. Use these for form layouts that require
            multiple columns, varied widths, and additional alignment options.</p>
        <div class="row">
            <div class="col-sm">
                <form action="{{ route('dashboard.projects.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-2">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Image</span>
                            </div>
                            <div class="form-control text-truncate" data-trigger="fileinput"><i
                                    class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                    class="fileinput-filename"></span></div>
                            <span class="input-group-append">
                                <span class=" btn btn-primary btn-file"><span class="fileinput-new">Select
                                        file</span><span class="fileinput-exists">Change</span>
                                    <input type="file" name="image">
                                </span>
                                <a href="#" class="btn btn-secondary fileinput-exists"
                                    data-dismiss="fileinput">Remove</a>
                            </span>
                        </div>
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="username">name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input name="name" value="" class="form-control" id="username" placeholder="name of project" type="text">
                        </div>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="link">link</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">link</span>
                                </div>
                                <input type="text" id="link" name="link" class="form-control" aria-label="Default"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            @error('link')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>

                    <div>
                        <label for="description">description</label>
                        <textarea class="form-control mt-15" id="description" rows="3" name="description" placeholder="Textarea"></textarea>
                    </div>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <button class="btn btn-primary" type="submit">Add</button>
                </form>

@endsection
