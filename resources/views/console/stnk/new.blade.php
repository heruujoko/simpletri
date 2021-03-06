@extends('consolelayout')
@section('title', 'Input Data STNK')

@section('css')
  <link rel="stylesheet" href="{{ URL::to('/') }}/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css">
@stop

@section('content')
  <h1>Buat / Perpanjang STNK</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel panel-heading">Form Registrasi / Perpanjangan</div>
        <div class="panel-body">
          <form role="form" method="POST" class="form-horizontal parsley-validate" action="{{ URL::to('/') }}/console/stnk" data-parsley-validate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label class="control-label col-md-2">No. Surat</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="nomor_surat" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">No. Polisi</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="nomor_polisi" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nama Pemilik</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="nama_pemilik" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="alamat" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tipe Kendaraan</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="type" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Jenis Kendaraan</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="jenis" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun Pembuatan</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="tahun_pembuatan" data-parsley-type="integer" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun Perakitan</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="tahun_perakitan" data-parsley-type="integer" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Isi Silinder</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="isi_silinder" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor Rangka</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="no_rangka" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor Mesin</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="no_mesin" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">IDENT</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="ident">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tanggal Faktur</label>
              <div class="col-md-8">
                <input type="text" class="form-control datepicker" name="tgl_faktur" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Bahan Bakar</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="bahan_bakar" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Warna TNKB</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="warna_tnkb" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun Registrasi</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="tahun_registrasi" data-parsley-type="integer" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor BPKB</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="nomor_bpkb" data-parsley-required="true" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Berlaku Sampai</label>
              <div class="col-md-8">
                <input type="text" class="form-control datepicker" name="berlaku_sampai" data-parsley-required="true" >
              </div>
            </div>
            <button type="submit" class="btn col-md-offset-2 col-md-8 btn-danger validate">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop

@section('js')
  <script type="text/javascript" src="{{ URL::to('/') }}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript">
    $('.datepicker').datepicker();
    $('.parsley-validate').parsley();
  </script>
@stop
