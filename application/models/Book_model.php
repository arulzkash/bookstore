<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('mongo_db'); // Pastikan MongoDB sudah terhubung
    }

    public function getBooks()
    {
        return $this->mongo_db->get('books');
    }

    public function getBookById($id)
    {
        $data = $this->mongo_db->where(['_id' => new MongoDB\BSON\ObjectId($id)])->get('books');
        return $data[0];
    }

    public function searchBooks($field, $keyword)
    {
        // Pastikan keyword dicari secara case-insensitive dengan ekspresi reguler
        $regex = new MongoDB\BSON\Regex($keyword, 'i');
        $this->mongo_db->where([$field => $regex]);
        return $this->mongo_db->get('books');
    }
}
