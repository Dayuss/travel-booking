
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
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Enter Text">
                                    @if ($errors->has('nama'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No hp</label>
                                    <input type="number" class="form-control" name="no_hp" placeholder="Enter Text">
                                    @if ($errors->has('no_hp'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('no_hp') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lokasi</label>
                                    <select name="id_lokasi" class="form-control">
                                        <option value="1">Pilih Lokasi Guide</option>
                                        @foreach($locations as $location)
                                        <option value="{{$location->id}}">{{$location->nama_wisata}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Simpan">
                                    <a href="{{ url('guide') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
