
@extends('main')

@section('content')
<div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    @if(Session::has('alert-success'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                        </div>
                    @endif
                    <div class="content-block">
                        <div class="block-title">
                        <a href="{{ url('guide/create') }}" class="btn btn-primary">Tambah</a>

                        </div>
                        <div class="block-content">
                            <table id="example" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No. HP</th>
                                        <th>Lokasi</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $id = 1; @endphp
                                @foreach($guides as $guide)
                                    <tr>
                                        <td>{{ $id }}</td>
                                        <td>{{ $guide->nama }}</td>
                                        <td>{{ $guide->no_hp }}</td>
                                        <td>{{ $guide->alamat }}</td>
                                        <td>
                                            <a href="{{ url('guide')."/".$guide->id."/edit" }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ url('guide')."/".$guide->id."/del" }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus guide ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                @php $id++ @endphp
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('script')
    <script type="text/javascript">
    $(function() {
        $('#example').DataTable();
    });
    </script>
@endsection