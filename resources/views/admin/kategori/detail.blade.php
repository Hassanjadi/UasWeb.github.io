
<section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="{{ asset('admin/kategori') }}" class="btn btn-sm 
                  btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left">
                 </i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
             
<div class="row">
  <div class="col-md-3">
    <!-- Profile Image -->
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
              <div class="card-body">
    	<table class="table table-bordered">
    		<thead>
    			<tr>
    				<th width="25%">Nama lengkap</th>
    				<th>{{ $staff->nama_staff }}</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td>Jabatan</td>
    				<td>{{ $staff->jabatan }}</td>
    			</tr>
    			<tr>
    				<td>Jenis/Kategori</td>
    				<td>{{ $staff->nama_kategori_staff }}</td>
    			</tr>
    			<tr>
    				<td>Pendidikan</td>
    				<td>{{ $staff->pendidikan }}</td>
    			</tr>
    			<tr>
    				<td>Expertise</td>
    				<td>{{ $staff->expertise }}</td>
    			</tr>
    			<tr>
    				<td>Email</td>
    				<td>{{ $staff->email }}</td>
    			</tr>
    			<tr>
    				<td>Telepon</td>
    				<td>{{ $staff->telepon }}</td>
    			</tr>
    			<tr>
    				<td>Tampil di website?</td>
    				<td>{{ $staff->status_staff }}</td>
    			</tr>
    			<tr>
    				<td>Keywords di Google</td>
    				<td>{{ $staff->keywords }}</td>
    			</tr>
    			<tr>
    				<td>Deskripsi lengkap</td>
    				<td>{{ $staff->isi }}</td>
    			</tr>
    		</tbody>
    	</table>
</div>
</div>
</div>
    </div>
</div>