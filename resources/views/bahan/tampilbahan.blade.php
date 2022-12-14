@extends('layout.main')
@section('container')
@include('sweetalert::alert')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Katalog Bahan Baku</li>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <form class="form-inline">
                        <fieldset disabled>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Pencarian. . ." name="#" value="">
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <a type="button" class="btn btn-danger" href="{{route('bahan.create')}}"><i class="fa fa-plus"></i> Tambah</a>
                        </div>
                        <div class="form-group">
                            <a type="button" class="btn btn-info" href="{{route('bahan')}}"><i class="fa fa-print"></i> Cetak</a>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Bahan</th>
                                <th>Bahan</th>
                                <th>Ketersediaan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bahans as $bahan)
                            <tr>
                                <td>{{ $bahan->id }} </td>
                                <td>{{ $bahan->kode }} </td>
                                <td>{{ $bahan->bahan }} </td>
                                <td>{{ $bahan->stok }} </td>
                                <td>
                                    <div class="action">
                                        <a type="button" class=" action btn btn-warning" href="{{ route('bahan.edit', $bahan->id) }}"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('bahan.destroy', $bahan->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class=" action btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">
                                    Data Kosong
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {!! $bahans->withQueryString()->links() !!}
        </div>
        <div class="col-sm-12">
            <p class="back-link">ERP Produksi Kaos Polos 2022</a></p>
        </div>
    </div>
</div>
@endsection