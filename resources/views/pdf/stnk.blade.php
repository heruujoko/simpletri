<<!DOCTYPE html>
<html>
<head>
	<title>STNK </title>
	<style type="text/css">
		body {
			font-size: 12px;
			margin-top: -40px;
		}
		.wrapper-left {
			
		}
		.center {
			text-align: center;
		}
		h4 {
			line-height: 1px;
		}
		.wrapper-right {
			width: 500px;
		}
		.bordered
		{
		    border-color: #000;
		    border-width: 0 0 1px 1px;
		    border-style: solid;
		    border-spacing: 0;
		}

		.bordered td
		{
		    border-color: #000;
		    border-width: 1px 1px 0 0;
		    border-style: solid;
		    margin: 0;
		    padding: 4px;
		    /*background-color: #FFC;*/
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>
				<div class="wrapper-left">
					<h4 class="center">KEPOLISIAN NEGARA REPUBLIK INDONESIA</h4>
					<h4 class="center">DAERAH</h4>
					<h4 class="center">KALIMANTAN UTARA</h4>
					<hr>
					<h4 class="center">UNDANG UNDANG NO.14/1997 TENTANG LALU LINTAS DAN ANGKUTAN JALAN</h4>
					<table>
						<tr>
							<td><strong>NO POLISI</strong></td>
							<td width="150px;">{{ $stnk->nomor_polisi }}</td>
						</tr>
						<tr>
							<td><strong>ALAMAT</strong></td>
							<td>{{ $stnk->alamat }}</td>
						</tr>
						<tr>
							<td><strong>MEREK/TIPE</strong></td>
							<td>{{ $stnk->type }}</td>
						</tr>
						<tr>
							<td><strong>JENIS/MODEL</strong></td>
							<td>{{ $stnk->jenis }}</td>
							<td></td>
							<td><strong>WARNA TNKB</strong></td>
							<td>{{ $stnk->warna_tnkb}}</td>
						</tr>
						<tr>
							<td><strong>TAHUN PEMBUATAN</strong></td>
							<td>{{ $stnk->tahun_pembuatan }}</td>
							<td></td>
							<td><strong>BAHAN BAKAR</strong></td>
							<td>{{ $stnk->bahan_bakar}}</td>
						</tr>
						<tr>
							<td><strong>TAHUN PERAKITAN</strong></td>
							<td>{{ $stnk->tahun_perakitan }}</td>
							<td></td>
							<td><strong>KODE LOKASI</strong></td>
						</tr>
						<tr>
							<td><strong>ISI SILINDER</strong></td>
							<td>{{ $stnk->isi_silinder }}</td>
							<td></td>
							<td><strong>JML BERAT YANG</strong></td>
						</tr>
						<tr>
							<td><strong>WARNA</strong></td>
							<td>{{ $stnk->warna_tnkb }}</td>
						</tr>
						<tr>
							<td><strong>NOMOR RANGKA</strong></td>
							<td>{{ $stnk->no_rangka }}</td>
						</tr>
						<tr>
							<td><strong>NOMOR MESIN</strong></td>
							<td></td>
							<td></td>
							<td><strong>BERLAKU SAMPAI</strong></td>
							<td>{{ $stnk->berlaku_sampai }}</td>
						</tr>
					</table>
				</div>	
			</td>
			<td>
				<div class="wrapper-right">
					<table>
						<tr>
							<td>NO SKUM</td>
							<td>0908820120180</td>
							<td></td>
						</tr>
						<tr>
							<td>NO KOHIR</td>
							<td>0908820120180</td>
							<td></td>
						</tr>
						<tr>
							<td>NO KTP</td>
							<td>0908820120180</td>
							<td></td>
						</tr>
					</table>
					<table class="bordered">
						<tr>
							<td colspan="3">JUMLAH YANG HARUS DI BAYAR DALAM RUPIAH</td>
						</tr>
						<tr>
							<td>POKOK</td>
							<td>SANGSI ADM</td>
							<td>JUMLAH</td>
						</tr>
						<tr>
							<td>1000</td>
							<td>1000</td>
							<td>1000</td>
						</tr>
						<tr>
							<td>1000</td>
							<td>1000</td>
							<td>1000</td>
						</tr>
						<tr>
							<td>1000</td>
							<td>1000</td>
							<td>1000</td>
						</tr>
						<tr>
							<td>1000</td>
							<td>1000</td>
							<td>1000</td>
						</tr>
						<tr>
							<td>1000</td>
							<td>1000</td>
							<td>1000</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>
</body>
</html>