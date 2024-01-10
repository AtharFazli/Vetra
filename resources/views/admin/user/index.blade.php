@extends('admin.layout.master')

@section('index')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">List User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">List User</h5>

            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Name</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Role</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            
                        </td>
                            
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
