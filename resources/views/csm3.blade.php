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
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Pemupukan</li>
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
                <h3 class="card-title">Pemupukan</h3>
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
                <div class="col-lg-4 card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Tombol Siram</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <style>
                                #asw {
                                    background: linear-gradient(#fff, #c7cad1);
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    height: 50vh;
                                    margin: 0;
                                }

                                label,
                                label:before,
                                input[type=checkbox]:before,
                                input[type=checkbox]:after {
                                    box-sizing: border-box;
                                    display: block;
                                }

                                label {
                                    --transDur: 0.2s;
                                    --shadowA:
                                        -1.5em 0 1.5em #8d273100,
                                        1.5em 0 1.5em #8d273100,
                                        0 0 3em #8d273144,
                                        0 6.5em 3em #0002;
                                    --shadowB:
                                        -1.5em 0 1.5em #8d273100,
                                        1.5em 0 1.5em #8d273100,
                                        0 3.25em 3em #8d273144,
                                        0 6.5em 3em #0002;
                                    --shadowC:
                                        -1.5em 0 1.5em #8d273177,
                                        1.5em 0 1.5em #8d273177,
                                        0 3.25em 3em #8d273144,
                                        0 6.5em 3em #0002;
                                    --shadowD:
                                        -1.5em 0 1.5em #8d273177,
                                        1.5em 0 1.5em #8d273177,
                                        0 6.5em 3em #8d273144,
                                        0 6.5em 3em #0002;
                                    --switchOnA:
                                        linear-gradient(90deg, #ecc0, #ecc 0.05em 0.45em, #ecc0) 50% 50% / 0.5em 4em no-repeat,
                                        linear-gradient(90deg, #0000, #0002 0.25em 0.75em, #0000) 50% 50% / 1em 4em no-repeat,
                                        linear-gradient(#0000, #0003 0.25em 4.25em, #0000) 50% 50% / 0.5em 4.5em no-repeat,
                                        radial-gradient(12em 6em at 0 0, #95001100 25%, #95001100 50%),
                                        radial-gradient(12em 6em at 100% 0, #95001100 25%, #95001100 50%),
                                        radial-gradient(100% 75% at center, #ff002c, #ff002c00 50%) 0 0 / 0.6em 0.6em,
                                        radial-gradient(6em 9em at 50% 10%, #ff002c00, #ff002c00 50%),
                                        radial-gradient(12em 6em at 0 90%, #ff002c00, #ff002c00 50%),
                                        radial-gradient(12em 6em at 100% 90%, #ff002c00, #ff002c00 50%),
                                        radial-gradient(9em 9em at 53% 87.5%, #ffc56400 5%, #ff002c00 20%, #ff002c00 50%),
                                        linear-gradient(#a90020 87.5%, #d4001d);
                                    --switchOnB:
                                        linear-gradient(90deg, #ecc0, #ecc 0.05em 0.45em, #ecc0) 50% 50% / 0.5em 4em no-repeat,
                                        linear-gradient(90deg, #0000, #0002 0.25em 0.75em, #0000) 50% 50% / 1em 4em no-repeat,
                                        linear-gradient(#0000, #0003 0.25em 4.25em, #0000) 50% 50% / 0.5em 4.5em no-repeat,
                                        radial-gradient(12em 6em at 0 0, #950011 25%, #95001100 50%),
                                        radial-gradient(12em 6em at 100% 0, #950011 25%, #95001100 50%),
                                        radial-gradient(100% 75% at center, #ff002c, #ff002c00 50%) 0 0 / 0.6em 0.6em,
                                        radial-gradient(6em 9em at 50% 10%, #ff002c, #ff002c00 50%),
                                        radial-gradient(12em 6em at 0 90%, #ff002c, #ff002c00 50%),
                                        radial-gradient(12em 6em at 100% 90%, #ff002c, #ff002c00 50%),
                                        radial-gradient(9em 9em at 53% 87.5%, #ffc564 5%, #ff002c 20%, #ff002c00 50%),
                                        linear-gradient(#950011 87.5%, #c10017);
                                    --switchOffA:
                                        radial-gradient(4em 4em at center, #ecc0 1.45em, #ecc 1.5em 1.95em, #ecc0 2em),
                                        radial-gradient(5em 5em at center, #0000 1em, #0002 1.5em 2em, #0000 2.5em),
                                        radial-gradient(100% 75% at center, #ff002c 25%, #ff002c00 50%) 0 0 / 0.6em 0.6em,
                                        radial-gradient(4em 12em at 50% 100%, #ff002c00, #ff002c00 50%),
                                        radial-gradient(12em 6em at 0 10%, #ff002c00, #ff002c00 50%),
                                        radial-gradient(12em 6em at 100% 10%, #ff002c00, #ff002c00 50%),
                                        radial-gradient(9em 9em at 50% 12.5%, #ffc56400 5%, #ff002c00 20%, #ff002c00 50%),
                                        linear-gradient(#c10017, #c10017);
                                    --switchOffB:
                                        radial-gradient(4em 4em at center, #ecc0 1.45em, #ecc 1.5em 1.95em, #ecc0 2em),
                                        radial-gradient(5em 5em at center, #0000 1em, #0002 1.5em 2em, #0000 2.5em),
                                        radial-gradient(100% 75% at center, #ff002c 25%, #ff002c00 50%) 0 0 / 0.6em 0.6em,
                                        radial-gradient(4em 12em at 50% 100%, #ff002c, #ff002c00 50%),
                                        radial-gradient(12em 6em at 0 10%, #ff002c, #ff002c00 50%),
                                        radial-gradient(12em 6em at 100% 10%, #ff002c, #ff002c00 50%),
                                        radial-gradient(9em 9em at 50% 12.5%, #ffc564 5%, #ff002c 20%, #ff002c00 50%),
                                        linear-gradient(#c10017, #c10017);
                                    border-radius: 0.5em;
                                    box-shadow:
                                        0 0.1em 0 #565057,
                                        0 0 0 0.1em #2e3138,
                                        0 0 0.2em 0.3em #000 inset,
                                        0 1em 0.2em 0 #000 inset,
                                        0 -1em 0.2em 0 #000 inset,
                                        0.5em 0 0.1em #e7454e inset,
                                        0.6em 0 0.1em #8d2731 inset,
                                        -0.5em 0 0.1em #e7454e inset,
                                        -0.6em 0 0.1em #8d2731 inset,
                                        0 1.5em 0.2em 0 #800007 inset,
                                        0 2em 0.2em 0 #8d2731 inset,
                                        0 3em 0.2em 0 #ff8a90 inset,
                                        0 4em 0.2em 0 #f8f4f6 inset,
                                        0 -1.5em 0.3em 0 #a0001c inset,
                                        0 -2em 0.2em 0 #9f0020 inset,
                                        0 -3em 0.2em 0 #ae1433 inset,
                                        0 -3.5em 0.2em 0 #941028 inset;
                                    font-size: calc(12px + 6 * (100vw - 320px) / (1280 - 320));
                                    margin: 1.5em;
                                    position: relative;
                                    width: 13em;
                                    height: 17em;
                                    -webkit-tap-highlight-color: transparent;
                                }

                                label:before {
                                    background: linear-gradient(#454954, #2a272d);
                                    border-radius: 0.25em;
                                    box-shadow:
                                        0 0 0 0.2em #000 inset,
                                        0 0.3em 0 0 #737a8c inset;
                                    content: "";
                                    margin: auto;
                                    position: absolute;
                                    top: -1.5em;
                                    left: -1.5em;
                                    width: 16em;
                                    height: 20em;
                                    z-index: -1;
                                }

                                input[type=checkbox],
                                input[type=checkbox]:before,
                                input[type=checkbox]:after {
                                    transform-style: preserve-3d;
                                }

                                input[type=checkbox] {
                                    animation: shadowOff var(--transDur) ease-in-out;
                                    border: 0;
                                    box-shadow: var(--shadowA);
                                    cursor: pointer;
                                    font-size: 1em;
                                    margin: 0;
                                    padding: 0;
                                    position: relative;
                                    top: 1.5em;
                                    left: 0.5em;
                                    width: 12em;
                                    height: 14em;
                                    transform: rotateX(-20deg) translateZ(0.75em);
                                    transition: transform var(--transDur) ease-in-out;
                                    -webkit-appearance: none;
                                    appearance: none;
                                }

                                input[type=checkbox]:checked {
                                    animation: shadowOn var(--transDur) ease-in-out;
                                    box-shadow: var(--shadowD);
                                    transform: rotateX(20deg) translateZ(0.75em);
                                }

                                input[type=checkbox]:before,
                                input[type=checkbox]:after {
                                    color: #fff;
                                    content: "";
                                    filter: brightness(0.7);
                                    -webkit-filter: brightness(0.7);
                                    position: absolute;
                                    text-align: center;
                                    transition:
                                        box-shadow var(--transDur) ease-in-out,
                                        filter var(--transDur) ease-in-out,
                                        -webkit-filter var(--transDur) ease-in-out;
                                    width: 100%;
                                    height: 50%;
                                }

                                input[type=checkbox]:before {
                                    animation: switchBeforeOff var(--transDur) steps(1, start);
                                    background: var(--switchOnA);
                                    box-shadow:
                                        0 0.2em 0 0 #fff0 inset,
                                        -0.5em -0.5em 0.5em #0000,
                                        0.5em -0.5em 0.5em #0000;
                                    top: 0;
                                    transform: rotateX(-20deg);
                                    transform-origin: 50% 100%;
                                    z-index: 1;
                                }

                                input[type=checkbox]:after {
                                    animation: switchAfterOff var(--transDur) steps(1, start);
                                    background: var(--switchOffA);
                                    box-shadow:
                                        0 -0.2em 0 0 #fff0 inset,
                                        -0.5em 0 0.5em #0007,
                                        0.5em 0 0.5em #0007;
                                    top: 50%;
                                    transform: rotateX(20deg);
                                    transform-origin: 50% 0%;
                                }

                                input[type=checkbox]:checked:before,
                                input[type=checkbox]:checked:after {
                                    filter: brightness(1);
                                    -webkit-filter: brightness(1);
                                }

                                input[type=checkbox]:checked:before {
                                    animation: switchBeforeOn var(--transDur) steps(1, start) forwards;
                                    box-shadow:
                                        0 0.2em 0 0 #fff inset,
                                        -0.5em -0.5em 0.5em #0007,
                                        0.5em -0.5em 0.5em #0007;
                                }

                                input[type=checkbox]:checked:after {
                                    animation: switchAfterOn var(--transDur) steps(1, start) forwards;
                                    box-shadow:
                                        0 -0.2em 0 0 #fff7 inset,
                                        -0.5em 0 0.5em #0000,
                                        0.5em 0 0.5em #0000;
                                }

                                input[type=checkbox]:focus {
                                    outline: transparent;
                                }

                                input[type=checkbox].pristine,
                                input[type=checkbox].pristine:before,
                                input[type=checkbox].pristine:after {
                                    animation: none;
                                }

                                /* Animations */
                                @keyframes shadowOn {
                                    from {
                                        box-shadow: var(--shadowA);
                                    }

                                    50% {
                                        box-shadow: var(--shadowB);
                                    }

                                    51% {
                                        box-shadow: var(--shadowC);
                                    }

                                    to {
                                        box-shadow: var(--shadowD);
                                    }
                                }

                                @keyframes shadowOff {
                                    from {
                                        box-shadow: var(--shadowD);
                                    }

                                    50% {
                                        box-shadow: var(--shadowC);
                                    }

                                    51% {
                                        box-shadow: var(--shadowB);
                                    }

                                    to {
                                        box-shadow: var(--shadowA);
                                    }
                                }

                                @keyframes switchBeforeOn {

                                    from,
                                    50% {
                                        background: var(--switchOnA);
                                    }

                                    to {
                                        background: var(--switchOnB);
                                    }
                                }

                                @keyframes switchBeforeOff {

                                    from,
                                    50% {
                                        background: var(--switchOnB);
                                    }

                                    to {
                                        background: var(--switchOnA);
                                    }
                                }

                                @keyframes switchAfterOn {

                                    from,
                                    50% {
                                        background: var(--switchOffA);
                                    }

                                    to {
                                        background: var(--switchOffB);

                                    }
                                }

                                @keyframes switchAfterOff {

                                    from,
                                    50% {
                                        background: var(--switchOffB);
                                    }

                                    to {
                                        background: var(--switchOffA);

                                    }
                                }
                            </style>
                            <div class="col-md-12" id='asw'>
                                <label>
                                    <input class="pristine" type="checkbox" name="switch" onclick="tombol_merah()" value="on" id="tombol">
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                {{--
                <div class="col-8">
                    <!-- interactive chart -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Jadwal Penyiraman</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!--                     <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <div class="row">
                                    <div class="col-3">
                                        <input type="date" name="date" id="kalender" class="form-control col-md-12">
                                        <input type="time" name="date" id="kalender" class="form-control col-md-12">
                                    </div>
                                    <div class="col-9">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Jadwal Penyiraman Berikutnya</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body p-0">
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">id</th>
                                                            <th>Tangal</th>
                                                            <th>Jam</th>
                                                            <th style="width: 40px">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>06/22/2021</td>
                                                            <td>12:54 AM</td>
                                                            <td><span class="badge bg-primary">Terjadwal</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>07/22/2021</td>
                                                            <td>01:54 PM</td>
                                                            <td><span class="badge bg-primary">Terjadwal</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.</td>
                                                            <td>06/22/2021</td>
                                                            <td>11:54 AM</td>
                                                            <td><span class="badge bg-primary">Terjadwal</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                </div>
                                <!-- kalender here -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                --}}
                <div class="col-8">
                    <!-- interactive chart -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">History</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!--                     <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">id</th>
                                        <th>Tangal</th>
                                        <th>Jam</th>
                                        <th style="width: 40px">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>06/22/2021</td>
                                        <td>12:54 AM</td>
                                        <td><span class="badge bg-success">Tersiram</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>07/22/2021</td>
                                        <td>01:54 PM</td>
                                        <td><span class="badge bg-success">Tersiram</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>06/22/2021</td>
                                        <td>11:54 AM</td>
                                        <td><span class="badge bg-success">Tersiram</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>09/20/2021</td>
                                        <td>11:54 AM</td>
                                        <td><span class="badge bg-danger">Error</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

                Rekayasa Perangkat Lunak SMKN 4 Bogor
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    // for allowing animations after load since they’re initially prevented from firing
    document.addEventListener("DOMContentLoaded", function() {
        let s = this.getElementsByName("switch");
        if (s.length)
            s[0].addEventListener("change", function() {
                this.removeAttribute("class");
            });
    });
    uu
</script>
@endsection
