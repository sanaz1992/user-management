@extends('layouts.app')

@section('banner')
    <x-banner :breadcrumbs="[['title' => 'لیست کاربران', 'url' => route('users.index')], ['title' => 'افزودن کاربر']]" />
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <div class="card">
                    <div class="card-header">افزودن کاربر
                    </div>
                    <div class="card-body myorder">
                        <div class="contentTitle">
                            <p>افزودن کاربر</p>
                        </div>
                        <div class="col-12 p-0">
                            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12 float-right col-md-6 p-0 pl-md-1 pr-md-1">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon10">نام</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="fname" name="fname"
                                            required aria-describedby="basic-addon10" value="{{ old('fname') }}" />
                                    </div>
                                </div>
                                <div class="col-12 float-right col-md-6 p-0 pl-md-1 pr-md-1">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon11">نام خانوادگی</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="lname" name="lname"
                                            required aria-describedby="basic-addon11" value="{{ old('lname') }}" />
                                    </div>
                                </div>
                                <div class="col-12 float-right col-md-6 p-0 pl-md-1 pr-md-1">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon12">موبایل</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="mobile" name="mobile"
                                            required aria-describedby="basic-addon12" value="{{ old('mobile') }}" />
                                    </div>
                                </div>
                                <div class="col-12 float-right col-md-6 p-0 pl-md-1 pr-md-1">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon12">ایمیل</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="email" name="email"
                                            aria-describedby="basic-addon12" value="{{ old('email') }}" />
                                    </div>
                                </div>
                                <div class="col-12 float-right col-md-6 p-0 pl-md-1 pr-md-1">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon12">رمز عبور</span>
                                        </div>
                                        <input type="password" class="form-control" aria-label="password" name="password"
                                            minlength="6" required aria-describedby="basic-addon12" />
                                    </div>
                                </div>
                                <div class="col-12 float-right col-md-6 p-0 pl-md-1 pr-md-1">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon12">تکرار رمز عبور</span>
                                        </div>
                                        <input type="password" class="form-control" aria-label="password_confirmation"
                                            minlength="6" name="password_confirmation" required
                                            aria-describedby="basic-addon12" />
                                    </div>
                                </div>
                                <div class="col-12 mt-3 text-left p-0 mb-2 pl-md-1 pr-md-1">

                                    <button type="submit" class="btn simple-outlined-btn">
                                        ثبت
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
