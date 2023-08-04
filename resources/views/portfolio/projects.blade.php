@extends('layouts.master')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="tab-content">
        <!-- start section title-wrap -->
        <div class="title-wrap wow zoomIn">
            <div class="section-title-box">
                <h2 class="section-title"> <strong>projects</strong></h2>
            </div><!-- end section-title-box -->
        </div>
        <div class="table table-responsive">
            <table id="datatableproject" class="table table-striped">
                <thead>
                    <tr>
                        <th width="150px">No</th>
                        <th>title</th>
                        <th>description</th>
                        <th>link</th>
                        <th>image</th>
                        <th class="text-center" width="150px">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addproject">
                                Add
                            </button>
                        </th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <tbody>
                    @foreach ($listproject as $project)
                        <tr class="post{{ $project->id }}">
                            <td>{{ $project->id}}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->link }}</td>
                            <td>
                                <img style="max-height: 65px" src="{{asset('storage/'.$project->image)}}" alt="">                            </td>
                            <td>
                                <form action="{{ route('project.delete', $project->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-primary editproject" data-toggle="modal"
                                        data-target="#editModalproject">
                                        Update
                                    </button>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- modal add projects --}}
    <div class="modal fade" id="addproject" tabindex="-1" role="dialog" aria-labelledby="addExpLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('project.add') }}" method="Post"  enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                       
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" >
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text"  class="form-control" name="description" >
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" name="link" >
                        </div>
                        <div class="form-group">
                            <label for="image">Image </label>
                            <input type="file" class="form-control" name="image" >
                        </div>
                        <div class="form-group">
                            <label for="">Images</label>
                            <input type="file" multiple class="form-control" name="images[]" >
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input type="file" class="form-control" name="video" >
                        </div>
                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end model experince --}}

    {{-- modal edit expeirince --}}
    <div class="modal fade" id="editModalproject" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('project.update', $project->id) }}" method="Post" id="editprojectForm"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                     <div class="modal-body">
                       
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title"  class="form-control" name="title" >
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" id="description"  class="form-control" name="description" >
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" id="link"  class="form-control" name="link" >
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image"  class="form-control" name="image" >
                        </div>
                        <div class="form-group">
                            <label for="">Images</label>
                            <input type="file" id="images" multiple class="form-control" name="images[]" >
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input type="file" id="video"  class="form-control" name="video" >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update language</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#datatableproject').DataTable();
            table.on('click', '.editproject', function() {
                // console.log('test');
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                $('#title').val(data[1]);
                $('#description').val(data[2]);
                $('#link').val(data[3]);
                $('#editprojectForm').attr('action', '/projects/' + data[0]);
                $('#editModalproject').modal('show');
            });
        });
    </script>
    {{-- end edit expeirince model --}}
@endsection
