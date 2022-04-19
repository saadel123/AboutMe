@extends('layouts.header')
@section('content')
        <div class="tab-content">
            <!-- start section title-wrap -->
            <div class="title-wrap wow zoomIn">
                <div class="section-title-box">
                    <h2 class="section-title"> <strong>Experinces</strong></h2>
                </div><!-- end section-title-box -->
            </div>
            <div class="table table-responsive">
                <table id="datatableExp" class="table table-striped">
                    <thead>
                        <tr>
                            <th width="150px">No</th>
                            <th>Resume id</th>
                            <th>Position</th>
                            <th>Slide</th>
                            <th>Title</th>
                            <th>Updated At</th>
                            <th>Start date</th>
                            <th>end start</th>
                            <th class="text-center" width="150px">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addExp">
                                    Add
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <tbody>
                        @foreach ($listexps as $exps)
                            <tr class="post{{ $exps->id }}">
                                <td>{{ $no++ }}</td>
                                <td>{{ $exps->resume_id }}</td>
                                <td>{{ $exps->postion }}</td>
                                <td>{{ $exps->slide }}</td>
                                <td>{{ $exps->titre }}</td>
                                <td>{{ $exps->body }}</td>
                                <td>{{ date('Y', strtotime($exps->debut)) }}</td>
                                <td>{{ date('Y', strtotime($exps->fin)) }}</td>
                                <td>
                                    <form action="{{ route('exp.delete', $exps->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-primary editExp" data-toggle="modal"
                                            data-target="#editModalExp">
                                            Update
                                        </button>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')">
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
    {{-- modal add experince --}}
    <div class="modal fade" id="addExp" tabindex="-1" role="dialog" aria-labelledby="addExpLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Experince</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin') }}" method="Post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Resume id</label>
                            <input type="text" class="form-control" name="idr" value="{{$exps->resume_id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Text Position</label>
                            <select class="form-control form-control-sm" id="postion1" name="postion" required>
                                <option value="left">left</option>
                                <option value="right">right</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm" id="slide1" name="slide" required>
                                <option value="Left">Left</option>
                                <option value="Right">Right</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="titre" required placeholder="your eduction level">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">School Name</label>
                            <textarea type="text" class="form-control" name="body" rows="3" required
                                placeholder="your eduction level"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">start Date </label>
                            <input type="date" class="form-control" name="debut" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">end date</label>
                            <input type="date" class="form-control" name="fin" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end model experince --}}

    {{-- modal edit expeirince --}}
    <div class="modal fade" id="editModalExp" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('exp.update',$exps->id)}}" method="Post" id="editExpForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" hidden class="form-control" name="id" id="id" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Resume id</label>
                            <input type="text" class="form-control" name="idr" id="idr"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Text Position</label>
                            <select class="form-control form-control-sm" id="postion" name="postion" required>
                                <option value="left">left</option>
                                <option value="right">right</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm" id="slide" name="slide" required>
                                <option value="Left">Left</option>
                                <option value="Right">Right</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="titre" id="titre" required
                                placeholder="your eduction level">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">School Name</label>
                            <textarea type="text" class="form-control" name="body" id="body" rows="3" required
                                placeholder="your eduction level"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">start Date </label>
                            <input type="date" class="form-control" name="debut" id="debut" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">end date</label>
                            <input type="date" class="form-control" name="fin" id="fin" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal edit expeirince --}}

    @include('layouts.footer')
    <script type="text/javascript">
        $(document).ready(function() {
            //onchange function
            $('#postion1').on('change', function() {
                var v1 = document.getElementById('postion1').value;
                var v2 = document.getElementById('slide1');
                if (v1 == 'left') {
                    v2.value = 'Left';
                }
                if (v1 == 'right') {
                    v2.value = 'Right';
                }
            });
            $('#postion').on('change', function() {
                var v1 = document.getElementById('postion').value;
                var v2 = document.getElementById('slide');
                if (v1 == 'left') {
                    v2.value = 'Left';
                }
                if (v1 == 'right') {
                    v2.value = 'Right';
                }
            });
            //end on change function
            var table = $('#datatableExp').DataTable();
            table.on('click', '.editExp', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                $('#id').val(data[0]);
                $('#idr').val(data[1]);
                $('#postion').val(data[2]);
                $('#slide').val(data[3]);
                $('#titre').val(data[4]);
                $('#body').val(data[5]);
                $('#debut').val(data[6]);
                $('#fin').val(data[7]);
                $('#editExpForm').attr('action', '/admins/' + data[0]);
                $('#editModalExp').modal('show');
            });
        });
    </script>
    {{-- end edit expeirince model --}}
@endsection

