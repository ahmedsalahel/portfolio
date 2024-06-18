
@extends('dash.layouts.app')
@section('title' , 'education')

@section('content')
<div class="col-xl-12">
    <section class="hk-sec-wrapper">

        <h5 class="hk-sec-title">Default Layout</h5>
        <p class="mb-25">More complex forms can be built using the grid classes. Use these for form layouts that require
            multiple columns, varied widths, and additional alignment options.</p>
        <div class="row">
            <div class="col-sm">
                <form action="{{ route('dashboard.educations.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="username">name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input name="name" value="" class="form-control" id="username" placeholder="education " type="text">
                        </div>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="username">date</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input name="date" value="" class="form-control" id="username" placeholder="date " type="text">
                        </div>
                        @error('date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label for="username">country</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input name="country" value="" class="form-control" id="username" placeholder="country " type="text">
                        </div>
                        @error('country')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="username">section</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input name="section" value="" class="form-control" id="username" placeholder="section " type="text">
                        </div>
                        @error('section')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                    <label for="description">description</label>
                        <div class="form-floating mb-3">
                        <textarea class="form-control" id="description" name="description" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>

                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <button class="btn btn-primary" type="submit">Add</button>
                </form>

@endsection
