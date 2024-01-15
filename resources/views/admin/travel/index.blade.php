@extends('admin.layout.master')

@section('index')
    <div class="pagetitle">
        <h1>List Travel Pack</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Travel Packages</li>
                <li class="breadcrumb-item active">List Travel Pack</li>
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
                        <td>Title</td>
                        <td>Slug</td>
                        <td>Location</td>
                        <td>About</td>
                        <td>Departure_date</td>
                        <td>Duration</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($travels as $travel)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $travel->title }}</td>
                            <td>{{ $travel->slug }}</td>
                            <td>{{ $travel->location }}</td>
                            <td>{{ $travel->about }}</td>
                            <td>{{ $travel->departure_date }}</td>
                            <td>{{ $travel->duration }}</td>
                            <td>
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Action</h6>
                                        </li>
                                        <form action="{{ route('travel.destroy', $travel->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <li><button class="dropdown-item" type="submit">Hapus</button></li>
                                            <li><a class="dropdown-item" href="{{ route('travel.edit', $travel->id) }}">Edit</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('travel.show', $travel->id) }}">Detail</a></li>
                                        </form>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
