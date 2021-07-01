@extends('./Composenen/ping')
@section('isi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pemupukan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}/IOT/">Home</a></li>
                        <li class="breadcrumb-item active">IOT TANAH SMKN 4 KOTA BOGOR</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Kelembapan Tanah</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body row">
                <div class="col-lg-3 card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Indikasi</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-12 text-center">
                            <input type="text" class="form-control text-center" placeholder="Value" readonly value="Data Saat Ini">
                        </div>
                        <div class="col-12">
                            <input type="text" id="misl" class="form-control text-center" placeholder="Value" value="{{$data->value}}" readonly>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="col-lg-7 card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Pengaturan</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow-">
                                    <input type="number" class="form-control text-center" name="numset" id="colosalnumberset" value="{{$data->value}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow-">
                                    <button id="colosalnumbersen" class="btn btn-primary">Set Rule</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <div class="card" style="height: 100px;width: 100px;">
                                        <b class="loading"></b>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->

                </div>
                <div class="col-12">
                    <!-- interactive chart -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Area Chart</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="myChart" width="400" height="100"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>

                <div class="col-md-12">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
