<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    <title>AboutMe - Personal Portfolio Resume Template</title>
    <!-- set your website meta description and keywords -->
    <meta name="description" content="Add your business website description here">
    <meta name="keywords" content="Add your business website keywords here">
    <!-- set your website favicon -->
    <link href="favicon.ico" rel="icon">
    <!-- Font Awesome Stylesheets -->
    <link rel="stylesheet" href="assests/css/font-awesome.min.css">
    <!-- Owl Carousel Stylesheets -->
    <link rel="stylesheet" href="assests/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assests/css/owl.theme.default.min.css">
    <!-- Lightbox Stylesheets -->
    <link rel="stylesheet" href="assests/css/lightbox.min.css">
    <!-- Parallax Stylesheets -->
    <link rel="stylesheet" href="assests/css/parallax.css" type="text/css">
    <!-- Template Main Stylesheets -->
    <link rel="stylesheet" href="assests/css/style.css" type="text/css">
    <!-- Responsive Stylesheets -->
    <link rel="stylesheet" href="assests/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

</head>

<body>
    <!-- start Header -->
    <header id="header" class="header">
        <div class="header-nav bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar top-bar"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/index"><img class="logo"
                                        src="assests/images/logo-color.png" alt="AboutMe"></a>
                            </div>
                            <!--End navbar-header -->
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="menubgactive" href="/index">Back To Home</a></li>
                                </ul>
                            </div>
                            <!--End navbar -->
                        </nav>
                    </div>
                    <!--End col -->
                </div>
                <!--End row -->
            </div>
            <!--End container -->
        </div>
        <!--End header-nav -->
    </header>
    <!-- end Header -->
    <!-- start banner -->
    <section id="single-page-banner" class="page-title page-title-image service-hbg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Service Details</h2>
                </div><!-- end col -->
                <div class="col-sm-6">
                    <ul class="breadcrumb">
                        <li><a href="/index">Home</a></li>
                        <li class="active">Graphic Design</li>
                    </ul>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end slider -->

    <div class="container">
        @yield('content')
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
                            <input type="text" class="form-control" name="idr" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Text Position</label>
                            <select class="form-control form-control-sm" id="postion1" name="postion" required>
                                <option value="left">left</option>
                                <option value="right">right</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm"  id="slide1" name="slide" required>
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
                <form action="{{ url('ResumeController@update') }}" method="Post" enctype="multipart/form-data"
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
    </div>
    {{-- end edit resume model --}}

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
                <form action="{{ url('ExperienceController@update') }}" method="Post" id="editExpForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Resume id</label>
                            <input type="text" class="form-control" name="idr" id="idr" required>
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
    {{-- end edit expeirince model --}}


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
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
                $('#editModal').modal('show');
            });
            //end editing resume record

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

            var table2 = $('#datatableExp').DataTable();
            table2.on('click', '.editExp', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table2.row($tr).data();
                console.log(data);
                $('#idr').val(data[1]);
                $('#postion').val(data[2]);
                $('#slide').val(data[3]);
                $('#titre').val(data[4]);
                $('#body').val(data[5]);
                $('#debut').val(data[6]);
                $('#fin').val(data[7]);
                $('#editExpForm').attr('action', '/admin/' + data[0]);
                $('#editModalExp').modal('show');
            });
        });
    </script>
</body>

</html>
