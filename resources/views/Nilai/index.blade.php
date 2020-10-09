<!DOCTYPE html>
<html>
<head>
	<title>Data Nilai Mahasiswa</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="card mt-5">
			<button type="button" onclick="location.href='/';" class="btn btn-primary"><i class="fa fa-home"></i> Home</button>
			<div class="card-header text-center">
                    <strong>Data Nilai Mahasiswa</strong>
                </div>
			<div class="card-body">
				<h5 class="text-center my-2">List Nilai Mahasiswa Universitas Bogor</h5>
				<a class="btn btn-sm btn-success col-md-2 mt-3 mb-2" href="{{ url('nilai/create') }}">Tambah Data Nilai Mahasiswa</a>
				<table id="table-datatables" class="table table-bordered table-hover table-sm text-center mt-3">
					<thead>
						<tr>
							<th>ID Nilai</th>
							<th>ID Mahasiswa</th>
							<th>ID Matkul</th>
							<th>Nilai</th>
						</tr>
					</thead>
					<tbody>
						@foreach($nilai as $a)
						<tr>
							<td>{{ $a->id_nilai }}</td>
							<td>{{ $a->id_mhs }}</td>
							<td>{{ $a->id_matkul }}</td>
							<td>{{ $a->nilai }}</td>
							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table-datatables').DataTable();
    } );
</script>
</body>
</html>