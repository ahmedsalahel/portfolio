
@extends('dash.layouts.app')
@section('title' , 'Settings0')

@section('content')
<div class="col-xl-12">
    <section class="hk-sec-wrapper">
        <h5 class="hk-sec-title">Default Layout</h5>
        <p class="mb-25">More complex forms can be built using the grid classes. Use these for form layouts that require
            multiple columns, varied widths, and additional alignment options.</p>
        <div class="row">
            <div class="col-sm">
                <form action="{{ route('dashboard.settings.update' , $setting->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <img src="{{ $setting->image }}" width="75px" height="75px" alt="">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="input-group-prepend">
                                <span class="input-group-text">image</span>
                            </div>
                            <div class="form-control text-truncate" data-trigger="fileinput"><i
                                    class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                    class="fileinput-filename"></span></div>
                            <span class="input-group-append">
                                <span class=" btn btn-primary btn-file"><span class="fileinput-new">Select
                                        file</span><span class="fileinput-exists">Change</span>
                                    <input type="file"  name="image">
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
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input name="name" value="{{ $setting->name }}" class="form-control" id="username" placeholder="Username" type="text">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="linkedin">linkedin</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">linkedin</span>
                            </div>
                            <input type="text" id="linkedin" name="linkedin" value="{{ $setting->linkedin }}" class="form-control" aria-label="Default "
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        @error('linkedin')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="githup">github</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">github</span>
                            </div>
                            <input type="text" id="github" name="github" value="{{ $setting->github }}" class="form-control" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default">
<br>
                        </div>
                        @error('githup')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                    <div class="form-group">
                        <label for="email">email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">email</span>
                            </div>
                            <input type="text" id="email" name="email" value="{{ $setting->email }}" class="form-control" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default">

                        </div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror


                    </div>
                    <div class="form-group">
                        <label for="phone">phone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">phone</span>
                            </div>
                            <input type="text" name="phone" value="{{ $setting->phone }}" class="form-control" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="description">description</label>
                        <textarea class="form-control mt-15" id="description" rows="3" value="{{ $setting->description }}" name="description" placeholder="Textarea"></textarea>
                    </div>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <button class="btn btn-primary" type="submit">create</button>
                                    </div>
                                </a>

                            </div>
                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </form>
            </div>

        </div>
    </section>
</div>

@endsection
