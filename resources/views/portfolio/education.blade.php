@extends('layouts.header')
@section('content')
        <div class="tab-content">
            <!-- start section title-wrap -->
            <div class="title-wrap wow zoomIn">
                <div class="section-title-box">
                    <h2 class="section-title"> <strong>Education</strong></h2>
                </div><!-- end section-title-box -->
            </div>
            <div class="table table-responsive">
                <table id="datatableEdc" class="table table-striped">
                    <thead>
                        <tr>
                            <th width="150px">No</th>
                            <th>Resume id</th>
                            <th>Position</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Start date</th>
                            <th>end date</th>
                            <th class="text-center" width="150px">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEdc">
                                    Add
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <tbody>
                        @foreach ($listedc as $edc)
                            <tr class="post{{ $edc->id }}">
                                <td>{{ $no++ }}</td>
                                <td>{{ $edc->resume_id}}</td>
                                <td>{{ $edc->positioned}}</td>
                                <td>{{ $edc->titreed}}</td>
                                <td>{{ $edc->bodyed}}</td>
                                <td>{{ date('Y', strtotime($edc->debuted)) }}</td>
                                <td>{{ date('Y', strtotime($edc->fined)) }}</td>
                                <td>
                                    <form action="{{ route('edc.delete', $edc->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-primary editEdc" data-toggle="modal"
                                            data-target="#editModalEdc">
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
    {{-- modal add experince --}}
    <div class="modal fade" id="addEdc" tabindex="-1" role="dialog" aria-labelledby="addExpLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('edc.add') }}" method="Post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <!--<label for="exampleInputEmail1">Resume id</label>-->
                            <input type="text" class="form-control" name="idr" hidden value="{{$edc->resume_id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Text Position</label>
                            <select class="form-control form-control-sm" name="positioned" required>
                                <option value="left">left</option>
                                <option value="right">right</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="titreed" required placeholder="your eduction level">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">School Name</label>
                            <textarea type="text" class="form-control" name="bodyed" rows="3" required
                                placeholder="your eduction level"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">start Date </label>
                            <input type="date" class="form-control" name="debuted" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">end date</label>
                            <input type="date" class="form-control" name="fined" required>
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
    <div class="modal fade" id="editModalEdc" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('edc.update',$edc->id)}}" method="Post" id="editEdcForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" hidden class="form-control" name="id" id="id" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" hidden name="idr" id="idr"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Text Position</label>
                            <select class="form-control form-control-sm" id="postion" name="positioned" required>
                                <option value="left">left</option>
                                <option value="right">right</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="titreed" id="titre" required
                                placeholder="your eduction level">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">School Name</label>
                            <textarea type="text" class="form-control" name="bodyed" id="body" rows="3" required
                                placeholder="your eduction level"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">start Date </label>
                            <input type="date" class="form-control" name="debuted" id="debut" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">end date</label>
                            <input type="date" class="form-control" name="fined" id="fin" required>
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
            var table = $('#datatableEdc').DataTable();
            table.on('click', '.editEdc', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                $('#id').val(data[0]);
                $('#idr').val(data[1]);
                $('#postion').val(data[2]);
                $('#titre').val(data[3]);
                $('#body').val(data[4]);
                $('#debut').val(data[5]);
                $('#fin').val(data[6]);
                $('#editEdcForm').attr('action', '/edcs/' + data[0]);
                $('#editModalEdc').modal('show');
            });
        });
    </script>
    {{-- end edit expeirince model --}}
@endsection

