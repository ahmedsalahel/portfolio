
@extends('dash.layouts.app')
@section('title' , 'Professionals')

@section('content')
<div class="col-xl-12">
    <section class="hk-sec-wrapper">

        <h5 class="hk-sec-title">Default Layout</h5>
        <p class="mb-25">More complex forms can be built using the grid classes. Use these for form layouts that require
            multiple columns, varied widths, and additional alignment options.</p>
        <div class="row">
            <div class="col-sm">
                <form action="{{ route('dashboard.Professionals.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="username">name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input name="name" value="" class="form-control" id="username" placeholder="Professional Skills" type="text">
                        </div>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <button class="btn btn-primary" type="submit">Add</button>
                </form>

@endsection
