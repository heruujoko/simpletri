<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>STNK {{ $stnk->nama_pemilik }} - {{ $stnk->nomor_polisi }}</title>
    <style>
      #maintable{
        font-size: 12px;
        margin-top: -35px;
        margin-left: -20px;
      }
      .center {
        text-align: center;
      }
      td.bordered {
          border-bottom: 2px solid #000;
      }
      .bigger {
        font-size: 16px;
      }
      .block{
        background-color: #000;
        color: #fff;
      }
      .ttdblock {
        width: 160px;
        border: 1px solid;
      }
    </style>
  </head>
  <body>
    <table id="maintable">
      <tr>
        <td></td>
        <td colspan="3" class="center">KEPOLISIAN NEGARA REPUBLIK INDONESIA</td>
        <td rowspan="3" class="bigger">NO : {{ $stnk->nomor_surat }}</td>
        <td></td>
        <td>Tarakan,</td>
      </tr>
      <tr>
        <td></td>
        <td colspan="3" class="center">DAERAH</td>
        <td></td>
        <td>a/n Polda Metro Jaya</td>
      </tr>
      <tr>
        <td></td>
        <td colspan="3" class="center">KALIMANTAN UTARA</td>
        <td></td>
        <td>direktur lalu lintas</td>
      </tr>
      <tr>
        <td></td>
        <td colspan="3" class="bordered"></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="3" class="center">SURAT TANDA NOMOR KENDARAAN BERMOTOR</td>
        <td></td>
      </tr>
      <tr>
        <td>NOMOR REGISTRASI </td>
        <td>: {{ $stnk->nomor_polisi }} </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>NAMA PEMILIK </td>
        <td>: {{ $stnk->nama_pemilik }} </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>ALAMAT </td>
        <td>: {{ $stnk->alamat }} </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>MERK </td>
        <td>: MERK </td>
        <td></td>
        <td>WARNA </td>
        <td>: {{ $stnk->warna_tnkb }}</td>
        <td></td>
        <td colspan="3" class="center block">PENGESAHAN</td>
      </tr>
      <tr>
        <td>TYPE </td>
        <td>: {{ $stnk->type }} </td>
        <td></td>
        <td>BAHAN BAKAR </td>
        <td>: {{ $stnk->bahan_bakar }}</td>
        <td></td>
        <td class="ttdblock" rowspan="3">&nbsp;</td>
        <td class="ttdblock" rowspan="3">&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td>JENIS </td>
        <td>: {{ $stnk->jenis }} </td>
        <td></td>
        <td>WARNA TNKB </td>
        <td>: {{ $stnk->warna_tnkb }}</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>MODEL </td>
        <td>: MODEL </td>
        <td></td>
        <td>TAHUN REGISTRASI </td>
        <td>: {{ $stnk->tahun_registrasi }}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>TAHUN PEMBUATAN </td>
        <td>: {{ $stnk->tahun_pembuatan }} </td>
        <td></td>
        <td>NOMOR BPKB </td>
        <td>: SADFGASFDHJSAFD</td>
        <td></td>
        <td class="ttdblock" rowspan="3">&nbsp;</td>
        <td class="ttdblock" rowspan="3">&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td>ISI SILINDER </td>
        <td>: {{ $stnk->isi_silinder }} </td>
        <td></td>
        <td>IDENT </td>
        <td>: {{ $stnk->ident }}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>NOMOR RANGKA </td>
        <td>: {{ $stnk->no_rangka }} </td>
        <td></td>
        <td rowspan="2">BERLAKU SAMPAI </td>
        <td rowspan="2">: {{ $stnk->berlaku_sampai }}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>NOMOR MESIN </td>
        <td>: {{ $stnk->no_mesin }} </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </body>
</html>
