@extends('consolelayout')
@section('title', 'STNK')

@section('css')
  <link rel="stylesheet" href="{{ URL::to('/') }}/bower_components/datatables/media/css/dataTables.bootstrap.min.css">
@stop

@section('content')
  <h1>Data STNK <small></small></h1>
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading">
        </div>
        <div class="panel-body">
          <table class="table table-bordered datatables">
            <thead>
              <th>NO Polisi</th>
              <th>Nama Pemilik</th>
              <th>Tanggal Berlaku</th>
              <th>Type</th>
              <th>Jenis</th>
              <th>Action</th>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@stop

@section('js')
  <script type="text/javascript" src="{{ URL::to('/') }}/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="{{ URL::to('/') }}/bower_components/datatables/media/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.datatables').DataTable({
        lengthMenu : [[10, 25, 50, 100, -1],[10, 25, 50, 100, "All"]],
        processing: true,
        serverSide: true,
        ajax: '{{ url("/console/stnk/data") }}',
        columns: [
          {data: 'nomor_polisi', name:'nomor_polisi'},
          {data: 'nama_pemilik', name:'nama_pemilik'},
          {data: 'berlaku_sampai', name:'berlaku_sampai'},
          {data: 'type', name:'type'},
          {data: 'jenis', name:'jenis'},
          {data: 'action', name:'action', searchable: false, orderable: false}
        ]
      });
    });

    function popupdelete(id){
      var choice = confirm('Yakin hapus ?');
      if(choice){
        window.location = "{{ url('/') }}/console/stnk/"+id+"/delete";
      }
    }
  </script>
@stop
