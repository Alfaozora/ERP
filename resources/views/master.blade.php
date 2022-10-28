<<<<<<< HEAD
@extends('layouts.main')
@section('container')
    @include('sweetalert::alert')
=======
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERP</title>
    <link href="{{asset('style/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/styles.css')}}" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="{{route('home')}}"><span>ERP</span> PRODUKSI KAOS POLOS</a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                    </a>
                                    <div class="message-body"><small class="pull-right">3 mins ago</small>
                                        <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                        <br /><small class="text-muted">1:24 pm - 25/03/2015</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                    </a>
                                    <div class="message-body"><small class="pull-right">1 hour ago</small>
                                        <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                        <br /><small class="text-muted">12:27 pm - 25/03/2015</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="all-button"><a href="#">
                                        <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                    </a></div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <em class="fa fa-bell"></em><span class="label label-info">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><a href="#">
                                    <div><em class="fa fa-envelope"></em> 1 New Message
                                        <span class="pull-right text-muted small">3 mins ago</span>
                                    </div>
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                    <div><em class="fa fa-heart"></em> 12 New Likes
                                        <span class="pull-right text-muted small">4 mins ago</span>
                                    </div>
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                    <div><em class="fa fa-user"></em> 5 New Followers
                                        <span class="pull-right text-muted small">4 mins ago</span>
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="{{asset('style/gambar/user.png')}}" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                {{Auth::user()->name}}
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li><a href="{{route('tampilbahan')}}"><em class="fa fa-bar-chart">&nbsp;</em> Katalog Bahan Baku</a></li>
            <li><a href="{{route('tampilpesanan')}}"><em class="fa fa-shopping-cart">&nbsp;</em> Pemesanan</a></li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                    <em class="fa fa-navicon">&nbsp;</em> Produksi <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="#">
                            <span class="fa fa-arrow-right">&nbsp;</span> Kaos Lengan Panjang
                        </a></li>
                    <li><a class="" href="#">
                            <span class="fa fa-arrow-right">&nbsp;</span> Kaos Lengan Pendek
                        </a></li>
                </ul>
            </li>
            <li><a href="{{route('actionlogout')}}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->

>>>>>>> origin
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="panel panel-container">
            <div class="row">
                <div class="col-xs-6 col-md-3 col-lg-4 no-padding">
                    <div class="panel panel-teal panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                            <div class="large">{{ $all_pesanan }}</div>
                            <div class="text-muted">Semua Pesanan</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-4 no-padding">
                    <div class="panel panel-blue panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-child color-orange"></em>
                            <div class="large"><strong>{{ $sum_kain }} </strong> (Kg)</div>
                            <div class="text-muted">Kain</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-4 no-padding">
                    <div class="panel panel-orange panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-bars color-teal"></em>
                            <div class="large"><strong> {{ $sum_benang }}</strong> (yard)</div>
                            <div class="text-muted">benang</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Site Traffic Overview
                        <ul class="pull-right panel-settings panel-button-tab-right">
                            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown"
                                    href="#">
                                    <em class="fa fa-cogs"></em>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <ul class="dropdown-settings">
                                            <li><a href="#">
                                                    <em class="fa fa-cog"></em> Settings 1
                                                </a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">
                                                    <em class="fa fa-cog"></em> Settings 2
                                                </a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">
                                                    <em class="fa fa-cog"></em> Settings 3
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em
                                class="fa fa-toggle-up"></em></span>
                    </div>
                    <div class="panel-body">
                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>New Orders</h4>
                        <div class="easypiechart" id="easypiechart-blue" data-percent="92"><span
                                class="percent">92%</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Comments</h4>
                        <div class="easypiechart" id="easypiechart-orange" data-percent="65"><span
                                class="percent">65%</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>New Users</h4>
                        <div class="easypiechart" id="easypiechart-teal" data-percent="56"><span
                                class="percent">56%</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Visitors</h4>
                        <div class="easypiechart" id="easypiechart-red" data-percent="27"><span
                                class="percent">27%</span></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row--> --}}
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default chat">
                    <div class="panel-heading">
                        All Orders
                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em
                                class="fa fa-toggle-up"></em></span>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <table class="table table-bordered table-striped table-hover">
                                <thead class="text-center" style="vertical-align:middle;">
                                    <tr>
                                        <th>No</th>
                                        <th>Produk</th>
                                        <th>Jumlah Kaos (pcs)</th>
                                        <th>Ukuran</th>
                                        <th>Jumlah Kain Katun 245 (Kg)</th>
                                        <th>Jumlah Benang (Yard)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center" style="vertical-align:middle;">
                                    @forelse ($pesanans as $pesanan)
                                        <tr>
                                            <td>{{ $pesanan->id }} </td>
                                            <td>{{ $pesanan->produk }} </td>
                                            <td>{{ $pesanan->jml_kaos }} </td>
                                            <td>{{ $pesanan->ukuran }} </td>
                                            <td>{{ $pesanan->kain }} </td>
                                            <td>{{ $pesanan->benang }} </td>
                                        </tr>
                                    @empty
                                        ` <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </ul>
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.col-->
            <div class="col-sm-12">
                <p class="back-link">ERP Produksi Kaos Polos 2022</p>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.main-->

    <script>
        window.onload = function() {
            var chart1 = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#c5c7cc"
            });
        };
    </script>
<<<<<<< HEAD
@endsection
=======

</body>

</html>
>>>>>>> origin
