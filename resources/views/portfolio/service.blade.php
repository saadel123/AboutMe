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
                <h2 class="section-title"> <strong>Services</strong></h2>
            </div><!-- end section-title-box -->
        </div>
        <div class="table table-responsive">
            <table id="datatableServ" class="table table-striped">
                <thead>
                    <tr>
                        <th width="150px">No</th>
                        <th hidden>resume id</th>
                        <th hidden>icon</th>
                        <th>category</th>
                        <th>Description</th>
                        <th class="text-center" width="150px">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSkl">
                                Add
                            </button>
                        </th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <tbody>
                    @foreach ($listserv as $listserv)
                        <tr class="post{{ $listserv->id }}">
                            <td>{{ $no++ }}</td>
                            <td hidden>{{ $listserv->resume_id }}</td>
                            <td hidden>{{ $listserv->icon }}</td>
                            <td>{{ $listserv->category }}</td>
                            <td>{{ $listserv->body }}</td>
                            <td>
                                <form action="{{ route('serv.delete', $listserv->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-primary editServ" data-toggle="modal"
                                        data-target="#editModalServ">
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
    {{-- modal add service --}}
    <div class="modal fade" id="addSkl" tabindex="-1" role="dialog" aria-labelledby="addExpLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('serv.add') }}" method="Post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <!--<label for="exampleInputEmail1">Resume id</label>-->
                            <input type="text" class="form-control" name="idr" hidden value="{{ $listserv->resume_id }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Categories:</label>
                            <select class="form-control form-control-sm" id="category" name="category" required>
                                <option value="Web Development">Web Development</option>
                                <option value="Web Design">Web Design</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Photography">Photography</option>
                                <option value="Flash Design">Flash Design</option>
                                <option value="Support">Support</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm" id="icon" name="icon" required>
                                <option value="desktop">desktop</option>
                                <option value="cogs">cogs</option>
                                <option value="paint-brush">paint-brush</option>
                                <option value="camera">camera</option>
                                <option value="umbrella">umbrella</option>
                                <option value="bolt">bolt</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descroption:</label>
                            <textarea type="text" class="form-control" name="body" rows="4" required
                                placeholder="your eduction level"></textarea>
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
    <div class="modal fade" id="editModalServ" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('serv.update', $listserv->id) }}" method="Post" id="editServForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" hidden name="idr" id="idr" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Categories:</label>
                            <select class="form-control form-control-sm" id="category1" name="category" required>
                                <option value="Web Development">Web Development</option>
                                <option value="Web Design">Web Design</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Photography">Photography</option>
                                <option value="Flash Design">Flash Design</option>
                                <option value="Support">Support</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm" hidden id="icon1" name="icon" required>
                                <option value="desktop">desktop</option>
                                <option value="cogs">cogs</option>
                                <option value="paint-brush">paint-brush</option>
                                <option value="camera">camera</option>
                                <option value="umbrella">umbrella</option>
                                <option value="bolt">bolt</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descroption:</label>
                            <textarea type="text" class="form-control" name="body" id="body" rows="4" required
                                ></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal edit expeirince --}}

    @include('layouts.footer')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#datatableServ').DataTable();
            table.on('click', '.editServ', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                $('#idr').val(data[1]);
                $('#icon1').val(data[2]);
                $('#category1').val(data[3]);
                $('#body').val(data[4]);
                $('#editServForm').attr('action', '/servs/' + data[0]);
                $('#editModalServ').modal('show');
            });
            $('#category').on('change', function() {
                var v1 = document.getElementById('category').value;
                var v2 = document.getElementById('icon');
                if (v1 == 'Web Development') {
                    v2.value = 'desktop';
                }
                if (v1 == 'Web Design') {
                    v2.value = 'cogs';
                }
                if (v1 == 'Graphic Design') {
                    v2.value = 'paint-brush';
                }
                if (v1 == 'Photography') {
                    v2.value = 'camera';
                }
                if (v1 == 'Flash Design') {
                    v2.value = 'umbrella';
                }
                if (v1 == 'Support') {
                    v2.value = 'bolt';
                }
            });
            $('#category1').on('change', function() {
                var v1 = document.getElementById('category1').value;
                var v2 = document.getElementById('icon1');
                if (v1 == 'Web Development') {
                    v2.value = 'desktop';
                }
                if (v1 == 'Web Design') {
                    v2.value = 'cogs';
                }
                if (v1 == 'Graphic Design') {
                    v2.value = 'paint-brush';
                }
                if (v1 == 'Photography') {
                    v2.value = 'camera';
                }
                if (v1 == 'Flash Design') {
                    v2.value = 'umbrella';
                }
                if (v1 == 'Support') {
                    v2.value = 'bolt';
                }
            });

        });
    </script>
    {{-- end edit expeirince model --}}
@endsection
