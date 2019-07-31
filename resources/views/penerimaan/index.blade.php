@extends('layouts.master')

@section('title')
    <title>Manajemen Penerimaan Barang | Sinar Mutiara Tasikmalaya</title>
@endsection

@section('content')
<div class="content-wrapper">
        <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <h1 class="m-0 text-dark">Manajemen Penerimaan Barang</h1>
                        </div>
                        <div class="col-md-6">
                                <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Barang</li>
                                </ol>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                                @card
                                @slot('title')
                                <a href="{{ route('penerimaan.create') }}" 
                                    class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i> Tambah
                                </a>

                                @endslot
                                
                                @if (session('success'))
                                    @alert(['type' => 'success'])
                                        {!! session('success') !!}
                                    @endalert
                                @endif
                                <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Kode Penerimaan</th>
                                                    <th>Grand Total</th>
                                                    <th>Supplier</th>
                                                    <th>Tgl Penerimaan</th>
                                                    <th colspan="2">Dibuat Pada</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            @php $no = 1; @endphp
                                            @forelse ($penerimaan as $row)
                                            <tbody>
                                                <tr>
                                                    <td>{{$row->kd_penerimaan}}</td>
                                                    <td>{{$row->grand_total}}</td>
                                                    <td>{{$row->kd_penerimaan}}</td>
                                                    <td>{{$row->supplier->nama_supplier}}</td>
                                                    <td>{{$row->tgl_penerimaan}}</td>
                                                    <td>{{$row->created_at->diffForHumans()}}</td>
                                                    <td>
                                                        <form action="#" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <a href="#"
                                                                    class="btn btn-primary btn-sm">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-warning btn-sm">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                        <td colspan="7" class="text-center">Tidak ada data</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    @slot('footer')
        ​                               <div class="justify-content-center pagination">
                                                
                                        </div>
                                    @endslot
                                @endcard
                        </div>
                    </div>
                </div>
            </section>
</div>

                      

                            
                           

                            
@endsection