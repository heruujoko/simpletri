@extends('consolelayout')
@section('title', 'STNK')

@section('css')
  
@stop

@section('content')
  <h1>Data STNK <small></small></h1>
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading">
          Details STNK
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="pull-right">
              <div class="col-md-4">
                <a class="btn btn-danger" href="{{ url('/') }}/console/stnk/{{ $stnk->id }}/print"><i class="fa fa-print"></i> Print</a>
              </div>
            </div>
          </div>  
          <div class="row">
            <form class="form form-horizontal">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-4">No. Polisi</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->nomor_polisi }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">Nama Pemilik</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->nama_pemilik }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">Alamat</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->alamat }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">Type</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->type }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">Jenis</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->jenis }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">Bahan Bakar</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->bahan_bakar }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">Warna TNKB</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->warna_tnkb }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">No BPKB</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->nomor_bpkb }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">Berlaku Sampai</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->berlaku_sampai }}</label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-4">Tahun Pembuatan</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->tahun_pembuatan }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">Tahun Perakitan</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->tahun_perakitan }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">Isi Silinder</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->isi_silinder }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">No. Rangka</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->no_rangka }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">Tanggal Faktur</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->tgl_faktur }}</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4">Tahun Registrasi</label>
                  <div class="col-md-8">
                    <label class="control-label">{{ $stnk->tahun_registrasi }}</label>
                  </div>
                </div>
              </div>
            </form>
          </div>  
        </div>
      </div>
    </div>
  </div>
@stop

@section('js')
  <script type="text/javascript" src="{{ URL::to('/') }}/bower_components/datatables/media/js/dataTables.bootstrap.min.js"></script>
@stop
