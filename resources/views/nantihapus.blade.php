<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/')}}/IOT/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/')}}/IOT/dist/css/adminlte.min.css">
    <!-- loding -->
    <link rel="stylesheet" href="{{url('/')}}/M/LEF.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/')}}/IOT/index3.html" class="brand-link">
                <img src="{{url('/')}}/IOT/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{url('/')}}/IOT/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{url('/')}}/IOT/#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control text-center form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="{{url('/')}}/IOT/#" class="nav-link ">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Prototipe
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/')}}/IOT/csm1.html" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Prototipe 5</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/')}}/IOT/csm1.html" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Prototipe 4</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/')}}/IOT/csm1.html" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Prototipe 3</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/')}}/IOT/csm1.html" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Prototipe 2</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/')}}/IOT/csm1.html" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Prototipe 1</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blank Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('/')}}/IOT/#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
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
                        <h3 class="card-title">Title</h3>
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
                                <h3 class="card-title">Different Width</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-12 text-center">
                                    <input type="number" id="temp" class="form-control text-center" placeholder="Value" readonly>
                                </div>
                                <div class="col-12">
                                    <input type="text" id="misl" class="form-control text-center" placeholder="Value" value="600" readonly>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="col-lg-7 card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Different Width</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card shadow-">
                                            <input type="number" class="form-control text-center" name="numset" id="colosalnumberset" value="600">
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

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="{{url('/')}}/IOT/https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{url('/')}}/IOT/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{url('/')}}/IOT/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{url('/')}}/IOT/dist/js/adminlte.min.js"></script>
    <!-- FLOT CHARTS -->
    <script src="{{url('/')}}/IOT/plugins/flot/jquery.flot.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="{{url('/')}}/IOT/plugins/flot/plugins/jquery.flot.resize.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="{{url('/')}}/IOT/plugins/flot/plugins/jquery.flot.pie.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{url('/')}}/IOT/dist/js/demo.js"></script> -->
    <!-- Page specific script -->

    <script>
        var t, togg = true;

        $(".loading").on({

            "click": function(e) {

                clearTimeout(t);

                togg = !togg;
                $(this)
                    .trigger("reset");

            },

            "saved": function(e) {

                $(this)
                    .addClass("ok")
                    .removeClass("danger")
                    .text(`!!`);

            },

            "error": function(e) {

                $(this)
                    .addClass("danger")
                    .removeClass("ok")
                    .text(`!!`);

            },

            "reset": function(e) {

                $(this)
                    .removeClass("ok danger")
                    .text(`!!`);

                t = setTimeout(function() {

                    if (!togg) {

                        $(".loading")
                            .trigger("saved");

                    } else {

                        $(".loading")
                            .trigger("error");

                    }

                }, 1000);

            }

        }).trigger("reset");
    </script>
    <script>
        let poinlast = 0
        let valuedatahistory = []
        let timedatahistory = []
        let banlast = 0
        let banlasttime = ''
        fetch("http://localhost:8000/api/getall", {
                method: 'GET',
            }).then((response) => response.json())
            .then((data) => {

                function addData(chart = myChart, label, data) {
                    console.log('point=' + data);
                    chart.data.labels.push(label);
                    chart.data.datasets.forEach((dataset) => {
                        dataset.data.push(data);
                        if (data > document.getElementById('misl').value) {
                            dataset.backgroundColor.push('#3bff00')
                        } else {
                            dataset.backgroundColor.push('red')
                        }

                    });
                    chart.update();
                }

                // console.log(data);
                let poin = data.data
                // console.log(poin);
                for (let index = 0; index < poin.length; index++) {

                    // if (index == 0) {
                    //     console.log('nol');
                    // } else {
                        let ban = poin[index]
                        console.log(poin);
                        poinlast = ban.id-1
                        console.log('cli');
                        // valuedatahistory[ban.id] = ban.data_soil
                        // timedatahistory[ban.id] = ban.updated_at
                        console.log(ban.updated_at, 'as', ban.data_soil);
                        // addData(myChart, ban.updated_at, ban.data_soil)
                        // setTimeout(() => {
                        //     addData(myChart, ban.updated_at, ban.data_soil)

                        // }, 2000);
                        banlast = ban.data_soil
                        banlasttime = ban.updated_at
                    // }
                }



                // upline
                const das = valuedatahistory
                // console.log(das);
                let i = 0
                let a = 0
                let b = 100
                const tombol = document.getElementsByClassName('loading')[0]
                var areaData = []
                setInterval(() => {
                    console.log(das);
                    const patokan = document.getElementById('misl').value
                    if (a == 0) {
                        // console.log(das[i], 'vs', patokan);
                        // console.log();
                        if (das[i] <= patokan) {
                            tombol.click()
                            a = 1
                        }
                    } else {
                        // console.log(patokan, 'vs', das[i]);
                        if (das[i] >= patokan) {
                            tombol.click()
                            a = 0
                        }
                    }


                    // var current = new Date();
                    // console.log(current)
                    // current.getFullYear();
                    // current.getMonth();
                    // current.getMonth() + 1;
                    // current.getDate();
                    // current.getHours();
                    // current.getMinutes();

                    document.getElementById('temp').value = das[i]
                    // addData(myChart, (timedatahistory[i]), das[i])

                    // if (i < 6) {
                    //   i++
                    // } else {
                    //   i = 0
                    // }

                    i++

                }, 5000);

                console.log(banlasttime, 'm', banlast);
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Waktu"],
                        datasets: [{
                            label: 'History Pada : ',
                            data: [0],
                            borderColor: '#007bff',
                            tension: 0.1,
                            backgroundColor: [
                                'blue'
                            ],

                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                            }
                        }
                    }
                });



                function getupsc() {
                    setInterval(() => {
                        fetch(`http://localhost:8000/api/getupdate?id=` + poinlast, {
                                method: 'GET',
                            }).then((response) => response.json())
                            .then((data) => {
                                let pasn = data.data
                                if (pasn.length >= 0) {
                                    for (let index = 0; index < pasn.length; index++) {
                                        let ban = pasn[index]
                                        poinlast = ban.id
                                        // valuedatahistory[ban.id] = ban.data_soil
                                        // timedatahistory[ban.id] = ban.updated_at
                                        addData(myChart, ban.updated_at, ban.data_soil)
                                    }

                                }

                                // console.log('valuedatahistory');
                                // console.log(poinlast);
                            });

                    }, 5000);
                }
                getupsc()

            });
        // console.log(valuedatahistory)
        // console.log(timedatahistory)


        // setInterval set for update das

        document.getElementById('colosalnumbersen').addEventListener('click', () => {
            setls()
        })

        function setls() {
            let pasi = document.getElementById('colosalnumberset').value
            document.getElementById('misl').value = pasi
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    </script>
</body>

</html>
