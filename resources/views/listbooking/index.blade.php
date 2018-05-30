
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

                        </div>
                        <div class="block-content">
                            <table id="example" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Wisata</th>
                                        <th>Guide</th>
                                        <th>Tanggal Pergi</th>
                                        @if(auth()->user()->isAdmin == 1)
                                        <th>#</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                @php $id = 1; @endphp
                                @foreach($datas as $data)
                                    <tr>
                                        <td>{{ $id }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->nama_wisata }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->tgl_pergi }}</td>
                                        @if(auth()->user()->isAdmin == 1)
                                        <td>
                                            <a href="{{ url('listbooking')."/".$data->id."/del" }}" class="btn btn-danger btn-sm">Hapus!</a>
                                        </td>
                                @endif
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