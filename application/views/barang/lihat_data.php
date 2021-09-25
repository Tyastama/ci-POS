<h3>Data barang</h3>
<?php
 echo anchor('barang/post','Tambah Data',array('class'=>'btn btn-danger btn-sm'));
?>
<hr>
<table class="table table-bordered">
    <tr><th>No</th><th>nama Barang</th><th>kategori Barang</th><th>Harga</th><th colspan="2">opersi</th></tr>
    <?php
    $no=1+$this->uri->segment(3);
    foreach ($record->result() as $r){
        echo " <tr>
                <td width='10'>$no</td>
                <td width='10' >$r->nama_barang</td>
                <td width='10'>$r->nama_kategori</td>
                <td width='10'>$r->harga</td>
                <td width='10'>".anchor('barang/edit/'.$r->barang_id,'Edit')."</td>
                <td width='10'>".anchor('barang/delete/'.$r->barang_id,'Delete')."</td>
                </tr>";
            $no++;
    }
    ?>
 </table>
 <?php
 echo $paging;
 ?>