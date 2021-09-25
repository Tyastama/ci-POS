<h3>Tambah Data operator</h3>
<?php
echo form_open('operator/post');
?>

<table class="table table-bordered">
    <tr><td width="130">Nama Lengkap</td>
    <td><div class="col-sm-4"><input type="text" name="nama" class="form-control" placeholder="nama_lengkap"></div></td></tr>
    <tr><td width="130">Username</td>
    <td><div class="col-sm-4"><input type="text" name="username" class="form-control" placeholder="username"></div></td></tr>
    <tr><td width="130">Password</td>
    <td><div class="col-sm-3"><input type="password" name="password" class="form-control" placeholder="password"></div></td></tr>
    <tr><td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
    <?php echo anchor('kategori','kembali',array('class'=>'btn btn-primary btn-sm'));?>
</table>
</form>