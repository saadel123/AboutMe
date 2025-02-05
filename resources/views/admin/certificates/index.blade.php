@extends('admin.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>certificates</h1>
        <nav style="display: flex;justify-content: space-between;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                <li class="breadcrumb-item active">certificates</li>
            </ol>
            <a href="{{ route('certificates.create') }}" class="btn btn-primary">Ajouter</a>
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
                                        <th scope="col">Titre</th>
                                        <th scope="col">Description</th>
                                        {{-- <th scope="col">Link</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($certificates as $certificate)
                                        <tr>
                                            <th scope="row">{{ $certificate->id }}</th>
                                            <td>{{ $certificate->title_fr }}</td>
                                            <td>{{ $certificate->description_fr }}</td>
                                            {{-- <td>{{ $certificate->link }}</td> --}}
                                            <td>
                                                <a class="edit" href="{{ route('certificates.edit', $certificate->id) }}"
                                                    style="color:rgb(125, 125, 5)"><i
                                                        class="material-icons"></i>Modifier</a>
                                                <form action="{{ route('certificates.destroy', $certificate->id) }}" method="POST" style="display:inline;">
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
