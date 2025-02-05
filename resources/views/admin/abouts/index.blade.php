@extends('admin.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>About</h1>
        <nav style="display: flex; justify-content: space-between;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                <li class="breadcrumb-item active">About</li>
            </ol>
            <a href="{{ route('abouts.create') }}" class="btn btn-primary">Ajouter</a>
        </nav>
    </div>
    <section class="section container">
        <div class="row">
            <div class="col-lg-12" style="margin: auto;">
                <div class="row">
                    <div class="card p-3">
                        <div class="card-body">
                            @include('components.alerts')
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($abouts as $about)
                                        <tr>
                                            <th scope="row">{{ $about->id }}</th>
                                            <td>{{ $about->title_en }}</td>
                                            <td>{{ $about->location_en }}</td>
                                            <td>{{ Str::limit($about->description_en, 200) }}</td>
                                            <td>
                                                <a class="edit" href="{{ route('abouts.edit', $about->id) }}"
                                                    style="color:rgb(125, 125, 5)">Modifier</a>
                                                <form action="{{ route('abouts.destroy', $about->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete" style="color:red"
                                                        onclick="return confirm('Are you sure you want to delete this item?');">
                                                        Supprimer
                                                    </button>
                                                </form>
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
    </section>
@endsection
