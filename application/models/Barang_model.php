<?php defined('BASEPATH') OR exit('No direct script acces allowed');

class Barang_model extends CI_Model
{
    // mendefinisikan variabel tabel secara private
    private $_table = "Barang";

    // membuat fungsi rules untuk validasi inputan data
    public $KodeBarang;
    public $NamaBarang;
    public $DeskripsiBarang;
    public $HargaBarang;
    public $StokBarang;

    public function rules () {
        return [
            ['field' => 'NamaBarang',
            'label' => 'Nama Barang',
            'rules' => 'required'],

            ['field' => 'DeskripsiBarang',
            'label' => 'Deskripsi Barang',
            'rules' => 'required'],

            ['field' => 'HargaBarang',
            'label' => 'Harga Barang',
            'rules' => 'numeric'],

            ['field' => 'StokBarang',
            'label' => 'Stok Barang',
            'rules' => 'required'],
        ];
    }

    // mengambil data dari semua database
    // msql_query($con, "select * from barang");
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    //mengambil data dari database perbaris
    //msql_query($son, "select * from barang where" + $KodeBarang +);
    public function getById($id)
    {
        return $this->db->get_where($this->_table,["kodeBarang"=> $id])->row();
    }

    //msql_query($son, "insert into barang values('a','b','c')");
    public function save()
    {
        $post = $this->input->post();
        $this->KodeBarang = uniqid();
        $this->NamaBarang = $post["namaBarang"];
        $this->deskripsiBarang = $post["deskripsiBarang"];
        $this->HargaBarang = $post["hargaBarang"];
        $this->StokBarang = $post["stokBarang"];
        $this->db->insert($this->_table,$this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KodeBarang = $post ["id"];
        $this->NamaBarang = $post["NamaBarang"];
        $this->DeskripsiBarang = $post["deskripsiBarang"];
        $this->HargaBarang = $post["hargaBarang"];
        $this->StokBarang = $post["stokBarang"];
        $this->db->update($this->_table, $this, array('kodeBarang'=> $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kodeBarang" => $id));
    }
}