@extends('layouts.header')

@section('content')
    <div id="service-single-content" class="service-single-content SectionMargin">

        <div class="title-wrap wow zoomIn">
            <div class="section-title-box">
                <h2 class="section-title"> <strong>Resume</strong></h2>
            </div><!-- end section-title-box -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th width="150px">No</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th class="text-center" width="150px">
                                Action
                            </th>
                        </tr>
                    </thead>
                    @csrf
                    <?php $no = 1; ?>
                    <tbody>
                        @foreach ($listcvs as $cvs)
                            <tr class="post{{ $cvs->id }}">
                                <td>{{ $no++ }}</td>
                                <td style="width: 40%">{{ $cvs->presentation }}</td>
                                <td><img width="150" height="150" src="{{ asset('storage/' . $cvs->pic) }}" alt="">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary edit" data-toggle="modal"
                                        data-target="#editModal">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    {{-- modal edit Resume --}}
    <div class="modal fade" id="editModal" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('res.update',$cvs->id) }}" method="Post" enctype="multipart/form-data"
                    id="editForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <textarea type="text" class="form-control" name="presentation" id="presentation"
                                rows="6"></textarea>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Replace Image here</label> <br>
                            <input type="file" name="pic">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- end edit resume model --}}
        @include('layouts.footer')
        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#datatable').DataTable();
                //start editing resume the record
                table.on('click', '.edit', function() {
                    $tr = $(this).closest('tr');
                    if ($($tr).hasClass('child')) {
                        $tr = $tr.prev('.parent');
                    }
                    var data = table.row($tr).data();
                    console.log(data);
                    $('#presentation').val(data[1]);
                    $('#pic').val(data[2]);
                    $('#editForm').attr('action', '/admin/' + data[0]);
                });
                //end editing resume recor  
            });
        </script>
    @endsection
