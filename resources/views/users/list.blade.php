@extends('layouts.app')

@section('banner')
    <x-banner :breadcrumbs="[['title' => 'لیست کاربران']]" />
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">لیست کاربران
                        <a class="btn btn-info text-white float-left" href="{{ route('users.create') }}">افزودن کاربر</a>
                    </div>
                    <div class="card-body myorder">
                        <div class="contentTitle">
                            <p>لیست کاربران</p>
                        </div>

                        <div class="col-12 p-0">
                            <div class="table-responsive table-sefaresh">
                                <table class="table table-bordered order-table">
                                    <tbody>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>نام</th>
                                            <th>نام خانوادگی</th>
                                            <th>موبایل</th>
                                            <th>ایمیل</th>
                                        </tr>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $user->fname }}</td>
                                                <td>{{ $user->lname }}</td>
                                                <td>{{ $user->mobile }}</td>
                                                <td>{{ $user->email ?? '---' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $users->links() }}
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
