<p>
@include('admin/kategori/tambah')
</p>

<div class="clearfix"><hr></div>
<form action="{{ asset('admin/kategori/proses') }}" method="post" accept-charset="utf-8">
{{ csrf_field() }}
<div class="row">
<div class="col-md-4">
  <div class="input-group">
    
  </div>
</div>

<div class="col-md-8">
  <div class="btn-group">
    

       <?php if(isset($pagin)) { echo $pagin; } ?>

      </div>
    </div>
  </div>
  <div class="clearfix"><hr></div>
  <div class="table-responsive mailbox-messages">
    <table id="example1" class="display table table-bordered table-sm" cellspacing="0" width="100%">
      <thead>
        
<tr>
    <th width="5%">NO</th>
    <th width="25%">NAMA KATEGORI</th>
    <th width="25%">SLUG</th>
    <th width="10%">NO URUT</th>
    <th>AKSI</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($kategori as $kategori) { ?>

<tr>
    <td class="text-center"><?php echo $i ?></td>
    <td><?php echo $kategori->nama_kategori ?></td>
    <td><?php echo $kategori->slug_kategori ?></td>
    <td><?php echo $kategori->urutan ?></td>
    <td>
    <div class="btn-group">
                  <a href="{{ asset('admin/kategori/detail/'.$kategori->id_kategori) }}" 
                    class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Detail</a>
                  <a href="{{ asset('admin/kategori/edit/'.$kategori->id_kategori) }}" 
                    class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ asset('admin/kategori/delete/'.$kategori->id_kategori) }}" class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i></a>
                  </div>
                </td>
              </tr>
<?php $i++; } ?>

</tbody>
</table>