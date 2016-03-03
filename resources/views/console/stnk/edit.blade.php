@extends('consolelayout')
@section('title', 'Input Data STNK')

@section('css')
  <link rel="stylesheet" href="{{ URL::to('/') }}/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css">
@stop

@section('content')
  <h1>Edit STNK</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel panel-heading">Form Registrasi / Perpanjangan</div>
        <div class="panel-body">
          <form role="form" method="POST" class="form-horizontal parsley-validate" action="{{ URL::to('/') }}/console/stnk/{{ $stnk->id }}/update" data-parsley-validate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label class="control-label col-md-2">No. Surat</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="nomor_surat" data-parsley-required="true" value="{{ $stnk->no_surat }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">No. Polisi</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="nomor_polisi" data-parsley-required="true" value="{{ $stnk->nomor_polisi }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nama Pemilik</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="nama_pemilik" data-parsley-required="true" value="{{ $stnk->nama_pemilik }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="alamat" data-parsley-required="true" value="{{ $stnk->alamat }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tipe Kendaraan</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="type" data-parsley-required="true" value="{{ $stnk->type }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Jenis Kendaraan</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="jenis" data-parsley-required="true" value="{{ $stnk->jenis }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun Pembuatan</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="tahun_pembuatan" data-parsley-type="integer" data-parsley-required="true" value="{{ $stnk->tahun_pembuatan }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun Perakitan</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="tahun_perakitan" data-parsley-type="integer" data-parsley-required="true" value="{{ $stnk->tahun_perakitan }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Isi Silinder</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="isi_silinder" data-parsley-required="true" value="{{ $stnk->isi_silinder }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor Rangka</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="no_rangka" data-parsley-required="true" value="{{ $stnk->no_rangka }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor Mesin</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="no_mesin" data-parsley-required="true" value="{{ $stnk->no_mesin }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">IDENT</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="ident" value="{{ $stnk->ident }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tanggal Faktur</label>
              <div class="col-md-8">
                <input type="text" class="form-control datepicker" name="tgl_faktur" data-parsley-required="true" value="{{ $stnk->tgl_faktur }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Bahan Bakar</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="bahan_bakar" data-parsley-required="true" value="{{ $stnk->bahan_bakar }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Warna TNKB</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="warna_tnkb" data-parsley-required="true" value="{{ $stnk->warna_tnkb }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun Registrasi</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="tahun_registrasi" data-parsley-type="integer" data-parsley-required="true" value="{{ $stnk->tahun_registrasi }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor BPKB</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="nomor_bpkb" data-parsley-required="true" value="{{ $stnk->nomor_bpkb }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Berlaku Sampai</label>
              <div class="col-md-8">
                <input type="text" class="form-control datepicker" name="berlaku_sampai" data-parsley-required="true" value="{{ $stnk->berlaku_sampai }}">
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
  <script type="text/javascript" src="{{ URL::to('/') }}/bower_components/moment/moment.js"></script>
  <script type="text/javascript">
    $('.datepicker').each(function(){
      $(this).val(moment($(this).val()).format('L'));
    }).promise().done(function(){
      $('.datepicker').datepicker();
    });
    $('.parsley-validate').parsley();
  </script>
@stop
