
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
                                    <label for="exampleInputEmail1">Lokasi</label>
                                    <input type="text" class="form-control" placeholder="Enter Text" value="{{ $location->nama_wisata }}" readonly>
                                    <input type="hidden" class="form-control" name="id_lokasi" placeholder="Enter Text" value="{{ $location->id }}">
                                    <input type="hidden" class="form-control" name="id_user" placeholder="Enter Text" value="{{ $id_user }}">
                                    @if ($errors->has('id_lokasi'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('id_lokasi') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Guide</label>
                                    <select name="id_guide" class="form-control">
                                        <option>Pilih Guide</option>
                                        @foreach($guides as $guide)
                                            <option value="{{ $guide->id }}">{{ $guide->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
  
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Pergi</label>
                                    <input type="date" class="form-control" name="tgl_pergi" placeholder="Enter Text" value="{{ date("Y-m-d", strtotime("+1days")) }}">
                                    @if ($errors->has('tgl_pergi'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tgl_pergi') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Simpan">
                                    <a href="{{ url('booking') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
