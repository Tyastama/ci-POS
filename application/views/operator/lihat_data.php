<h3>Data Operator Sistem</h3>
<?php
echo anchor('operator/post','Tambah Data',array('class'=>'btn btn-danger btn-sm'));
?>
<hr>
 <table class="table table-bordered">
    <tr><th>No</th><th>nama lengkap</th><th>username</th><th>last_login</th><th colspan="2">opersi</th></tr>
    <?php
    $no=1+$this->uri->segment(3);
    foreach ($record as $r){
        echo " <tr>
                <td>$no</td>
                <td>$r->nama_lengkap</td>
                <td>$r->username</td>
                <td>$r->last_login</td>
                <td>".anchor('operator/edit/'.$r->operator_id,'Edit')."</td>
                <td>".anchor('operator/delete/'.$r->operator_id,'Delete')."</td>
                </tr>";
            $no++;
    }
    ?>
 </table>

 <?php
 echo $paging;
 ?>