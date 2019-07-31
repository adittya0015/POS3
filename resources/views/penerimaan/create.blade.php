@extends('layouts.master')

@section('title')
    <title>Penerimaan Barang| Sinar Mutiara Tasikmalaya</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                    <div class="row mb-2">
                            <div class="col-md-6">
                                <h1 class="m-0 text-dark">Penerimaan Barang</h1>
                            </div>
                            <div class="col-md-6">
                                    <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('penerimaan.index')}}">Penerimaan</a></li>
                                            <li class="breadcrumb-item active">Tambah</li>
                                    </ol>
                            </div>
                    </div>
            </div>
        </div>

        <section class="content">
            <div class=" container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @card

                        @slot('title')
                        <a href="{{ route('penerimaan.index') }}" 
                                    class="btn btn-primary btn-sm">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>
                        @endslot
                        
                        @if (session('success'))
                            @alert(['type' => 'success'])
                                {!! session('success') !!}
                            @endalert
                        @endif
                        <form action="{{ route('penerimaan.store') }}" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Kode Penerimaan</label>
                                            <input type="text" name="kd_penerimaan" required 
                                                class="form-control {{ $errors->has('kd_penerimaan') ? 'is-invalid':'' }}">
                                            <p class="text-danger">{{ $errors->first('kd_penerimaan') }}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Supplier</label>
                                            <input type="text" name="id_supplier" required 
                                                class="form-control {{ $errors->has('id_supplier') ? 'is-invalid':'' }}">
                                            <p class="text-danger">{{ $errors->first('id_supplier') }}</p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Keterangan</label>
                                            <textarea  name="kd_penerimaan" required 
                                                class="form-control {{ $errors->has('kd_penerimaan') ? 'is-invalid':'' }}"></textarea>
                                            <p class="text-danger">{{ $errors->first('kd_penerimaan') }}</p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                        <div class="form-group">
                                                <label for="">Diinput Oleh</label>
                                                    <input type="text" name="id_user" required
                                                        value="{{ Auth::user()->name }}" disabled 
                                                        class="form-control">
                                            </div>
                                    <div class="form-group">
                                        <label for="">Tgl Penerimaan</label>
                                            <input type="date" name="kd_penerimaan" required 
                                                class="form-control {{ $errors->has('kd_penerimaan') ? 'is-invalid':'' }}">
                                            <p class="text-danger">{{ $errors->first('kd_penerimaan') }}</p>
                                    </div>
                                </div>

                                <table class=" table table-bordered table-form">
                                    <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-total">
                                                <span class="table-text"></span>
                                            </td>
                                            <td class=" table-remove">
                                                    <span class="btn btn-sm-danger">Hapus</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="table-empty" colspan="2"></td>
                                            <td class="table-label">Sub Total</td>
                                            <td class="table-label">Rp.</td>
                                        </tr>
                                        <tr>
                                                <td class="table-empty" colspan="2"></td>
                                                <td class="table-label">Potongan</td>
                                                <td class="table-label">
                                                    Rp.<input type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                    <td class="table-empty" colspan="2"></td>
                                                    <td class="table-label">Grand Total</td>
                                                    <td class="table-label">Rp.</td>
                                                </tr>
                                    </tfoot>
                                </table>
                            </div>

                            
                        </form>
                        @slot('footer')
​                           <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group float-right">
                                    <a href="{{route('penerimaan.index')}}" class="btn btn-danger">Cancel</a>
                                    <button class="btn btn-success">Buat</button>
                                </div>
                            </div>
                        </div>
                        @endslot
                        @endcard
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection