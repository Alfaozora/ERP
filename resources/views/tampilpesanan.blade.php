<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERP</title>
    <link href="{{ asset('style/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/styles.css') }}" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body>
    @include('sweetalert::alert')
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="{{ route('home') }}"><span>ERP</span> PRODUKSI KAOS POLOS</a>
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
                                        <a href="#"><strong>John Doe</strong> commented on <strong>your
                                                photo</strong>.</a>
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
                <img src="{{ asset('style/gambar/user.png') }}" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                    {{ Auth::user()->name }}
                </div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li class="parent"><a href="{{ route('home') }}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li class="parent"><a href="{{ route('bahan.index') }}"><em class="fa fa-bar-chart">&nbsp;</em> Katalog
                    Bahan Baku</a></li>
            <li class="active"><a href="{{ route('pesanan.index') }}"><em class="fa fa-shopping-cart">&nbsp;</em>
                    Pemesanan</a></li>
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
            <li><a href="{{ route('actionlogout') }}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Data Pemesanan</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Detail Pesanan</h2>
            </div>
        </div>
    </div>
    <!--/.main-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form class="form-inline">
                            <div class="form-group">
                                <select class="form-control" type="text" placeholder="Pencarian. . ." name="#" value="">
                                    <option>Pilih Kode Produk</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <a type="button" class="btn btn-danger" href="{{route('pesanan.create')}}"><i class="fa fa-plus"></i> Tambah</a>
                            </div>
                            <div class="form-group">
                                <a type="button" class="btn btn-info" href="#"><i class="fa fa-print"></i> Cetak</a>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="text-center" style="vertical-align:middle;">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Produk</th>
                                    <th>Produk</th>
                                    <th>Jumlah Kaos (Lusin)</th>
                                    <th>Ukuran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" style="vertical-align:middle;">
                                @forelse ($pesanans as $pesanan)
                                <tr>
                                    <td>{{ $pesanan->id }} </td>
                                    <td>{{$pesanan->kode_produk}}</td>
                                    <td>{{ $pesanan->produk }} </td>
                                    <td>{{ $pesanan->jml_kaos }} </td>
                                    <td>{{ $pesanan->ukuran }} </td>
                                    <td>
                                        <div class="action">
                                            <a href="{{ route('pesanan.edit', $pesanan->id) }}" class="action btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                            <form action="{{ route('pesanan.destroy', $pesanan->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="action btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                ` <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                {!! $pesanans->withQueryString()->links() !!}
            </div>
            <div class="col-sm-12">
                <p class="back-link">ERP Produksi Kaos Polos 2022</a></p>
            </div>
        </div>
    </div>
    < <script src="{{ asset('style/js/jquery-1.11.1.min.js') }}">
        </script>
        <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('style/js/chart.min.js') }}"></script>
        <script src="{{ asset('style/js/chart-data.js') }}"></script>
        <script src="{{ asset('style/js/easypiechart.js') }}"></script>
        <script src="{{ asset('style/js/easypiechart-data.js') }}"></script>
        <script src="{{ asset('style/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('style/js/custom.js') }}"></script>
        <script>
            function inputAngka(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
            }
        </script>

</body>

</html>