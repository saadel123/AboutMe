@extends('layouts.header')
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
                <h2 class="section-title"> <strong>Skills</strong></h2>
            </div><!-- end section-title-box -->
        </div>
        <div class="table table-responsive">
            <table id="datatableSkl" class="table table-striped">
                <thead>
                    <tr>
                        <th width="150px">No</th>
                        <th hidden>Resume id</th>
                        <th>Percent</th>
                        <th>Programing Langage</th>
                        <th class="text-center" width="150px">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSkl">
                                Add
                            </button>
                        </th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <tbody>
                    @foreach ($listskill as $skill)
                        <tr class="post{{ $skill->id }}">
                            <td>{{ $no++ }}</td>
                            <td hidden>{{ $skill->resume_id }}</td>
                            <td>{{ $skill->percent }}</td>
                            <td>{{ $skill->langage }}</td>
                            <td>
                                <form action="{{ route('skill.delete', $skill->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-primary editSkill" data-toggle="modal"
                                        data-target="#editModalSkl">
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
    {{-- modal add skills --}}
    <div class="modal fade" id="addSkl" tabindex="-1" role="dialog" aria-labelledby="addExpLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('skill.add') }}" method="Post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <!--<label for="exampleInputEmail1">Resume id</label>-->
                            <input type="text" class="form-control" name="idr" hidden value="{{ $skill->resume_id }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Precent</label>
                            <input type="number" max="100" min="0" class="form-control" name="percent" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Programin language</label>
                            <input type="text" class="form-control" name="langage" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Education</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end model experince --}}

    {{-- modal edit expeirince --}}
    <div class="modal fade" id="editModalSkl" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('skill.update', $skill->id) }}" method="Post" id="editSklForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" hidden name="idr" id="idr" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Precent</label>
                            <input type="number" max="100" min="0" class="form-control" name="percent" id="percent"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Programin language</label>
                            <input type="text" class="form-control" name="langage" id="langage" required>
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
            var table = $('#datatableSkl').DataTable();
            table.on('click', '.editSkill', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                $('#idr').val(data[1]);
                $('#percent').val(data[2]);
                $('#langage').val(data[3]);
                $('#editSklForm').attr('action', '/skills/' + data[0]);
                $('#editModalSkl').modal('show');
            });
        });
    </script>
    {{-- end edit expeirince model --}}
@endsection
