<?php
class model_operator extends CI_Model{


    function login($username,$password)
    {
        $chek = $this->db->get_where('operator',array('username'=>$username,'password'=> md5($password)));
        if($chek->num_rows()>0)
        {
            return 1;
        }else{
            return 0;
        }
    }

    function tampil_data(){
        return $this->db->get('operator');
    }

    function tampilkan_data_paging($halaman,$batas){

        return $this->db->query("select * from operator limit $halaman,$batas");
    }
    function edit()
    {
        $data=array(
           'nama_kategori'=>  $this->input->post('kategori')
                    );
        $this->db->where('kategori_id',$this->input->post('id'));
        $this->db->update('kategori_barang',$data);
    }

    function get_one($id){
        $param = array('operator_id'=>$id);
        return $this->db->get_where('operator',$param);
    }

    function delete($id)
    {
        $this->db->where('operator_id',$id);
        $this->db->delete('operator');
    }
}
?>