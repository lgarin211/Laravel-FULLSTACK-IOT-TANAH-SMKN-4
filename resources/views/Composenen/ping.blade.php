<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IOT TANAH SMKN 4 BOGOR</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/')}}/IOT/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/')}}/IOT/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="{{url('/')}}/M/LEF.css">

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{url('/')}}/IOT/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{url('/')}}/IOT/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{url('/')}}/IOT/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3" class="brand-link">
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
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
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
                            <a href="#" class="nav-link ">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Prototipe
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="csm1" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Prototipe 5</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="csm1" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Prototipe 4</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="csm1" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Prototipe 3</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="csm1" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Prototipe 2</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="csm1" class="nav-link ">
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

        @yield('isi')

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{url('/')}}/IOT/dist/js/demo.js"></script> -->

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
        fetch("{{url('/')}}/api/getall", {
            method: 'GET',
        }).then((response) => response.json()).then((data) => {

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
                poinlast = ban.id - 1
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
                let pas = 0;
                setInterval(() => {
                    const tombol = document.getElementsByClassName('loading')[0]
                    const patokan = document.getElementById('misl').value
                    fetch(`{{url('/')}}/api/getupdate?id=` + poinlast, {
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
                                    if (ban.data_soil >= patokan) {
                                        if (pas == 0) {
                                            tombol.click()
                                            console.log('1')
                                            pas = 1
                                        }
                                    } else {
                                        if (ban.data_soil <= patokan) {
                                            if (pas == 1) {
                                                console.log('0')
                                                tombol.click()
                                                pas = 0
                                            }
                                        }

                                    }
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
