
@extends('main')

@section('content')
<div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="content-block">
                        <div class="block-title">
                        </div>
                        <div class="block-content">
                            <form method="POST">
                                @csrf  
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Wisata</label>
                                    <input type="text" class="form-control" name="nama_wisata" placeholder="Enter Text">
                                    @if ($errors->has('nama_wisata'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nama_wisata') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Enter Text">
                                    @if ($errors->has('alamat'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jenis Wisata</label>
                                    <select name="jenis_wisata" class="form-control">
                                        <option>Pilih Jenis Wisata</option>
                                        <option value="Air">Air</option>
                                        <option value="Darat">Darat</option>
                                    </select>
                                    @if ($errors->has('jenis_wisata'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('jenis_wisata') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Simpan">
                                <a href="{{ url('lokasi') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
