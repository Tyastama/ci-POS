<h3>Edit Data barang</h3>
<?php
echo form_open('barang/edit');
?>
<input type="hidden" name="id" value="<?php echo $record['barang_id'];?>" >
<table class ="table table-bordered">
    <tr><td width="130">Nama barang</td>
    <td><div class="col-sm-4"><input type="text" name="nama_barang" class="form-control" value="<?php echo $record['nama_barang'];?>" placeholder="nama_barang"></div></td></tr>
    <tr><td width="130">kategori</td><td>
            <div class="col-sm-4"><select name="kategori" class="form-control">
             <?php
             foreach ($kategori as $k)
             {
                echo "<option value='$k->kategori_id'";
                echo $record['kategori_id']==$k->kategori_id?'selected': '';
                echo ">$k->nama_kategori</option>";
             }
             ?>
             </select></div></td></tr>
    <tr><td width="130">Harga</td>
    <td><div class="col-sm-4"><input type="text" name="harga" class="form-control" value="<?php echo $record['harga'];?>" placeholder="harga"></div></td></tr>
    <tr><td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
    <?php echo anchor('kategori','kembali',array('class'=>'btn btn-primary btn-sm'));?>
</table>
</form>