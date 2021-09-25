<h3>Tambah Data barang</h3>
<?php
echo form_open('barang/post');
?>

<table class ="table table-bordered">
    <tr><td width="130">Nama barang</td>
    <td><div class="col-sm-4"><input type="text" name="nama_barang" class="form-control" placeholder="nama_barang"></div></td></tr>
    <tr><td width="130">kategori</td><td>
            <div class="col-sm-4"><select name="kategori" class="form-control">
             <?php
             foreach ($kategori as $k)
             {
                echo "<option value='$k->kategori_id'>$k->nama_kategori</option>";
             }
             ?>
             </select></div></td></tr>
    <tr><td width="130">Harga</td>
    <td><div class="col-sm-4"><input type="text" name="harga" class="form-control" placeholder="harga"></div></td></tr>
    <tr><td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
    <?php echo anchor('kategori','kembali',array('class'=>'btn btn-primary btn-sm'));?>
    </td></tr>
</table>
</form>