    @extends('layouts.main')
    @section('container')
    @include('sweetalert::alert')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="breadcrumb-item"><a href="{{ route('bahan.index') }}"> Katalog Bahan Baku</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Tambah Bahan Baku</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Data Bahan Baku Kaos</h2>
            </div>
        </div>
    </div>
    <!--/.main-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="panel panel-default">
            <div class="panel-heading">Tambah Baru</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" method="post" action="{{ route('bahan.store') }}">
                        @csrf
                        <div class="form-group input-group-sm">
                            <label>Nama Bahan</label>
                            <input type="text" name="bahan" class="form-control" placeholder="Nama Barang" required="">
                        </div>
                        <div class="form-group input-group-sm">
                            <label>Kategori</label>
                            <input type="text" name="#" class="form-control" placeholder="Kategori" required="">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                </br>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form role="form" method="post" action="{{ route('bahan.store') }}">
                        @csrf
                        <div class="form-group input-group-sm">
                            <label>Kode Bahan</label>
                            <input type="text" name="kode" class="form-control" placeholder="Kode Bahan" required="">
                        </div>
                        <div class="form-group input-group-sm">
                            <label>Ketersediaan</label>
                            <input type="text" name="stok" class="form-control" placeholder="Ketersediaan" required="">
                        </div>
                    </form>
                </div>
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
        @endesection