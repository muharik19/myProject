<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    // property dengan hak akses protected
    protected $table_name;
    protected $order_by;
    protected $order_by_type = 'ASC';
    protected $primary_filter = 'intval';
    protected $primary_key;
    protected $type;
    public $rules;

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data, $batch = false)
    {
        if ($batch == true) {
            $this->db->insert_batch('{PRE}' . $this->table_name, $data);
        } else {
            $this->db->set($data);
            $this->db->insert('{PRE}' . $this->table_name);
            return $this->db->insert_id();
        }
    }

    public function update($data, $where = [])
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('{PRE}' . $this->table_name);
    }

    public function get($id = null, $single = false)
    {
        if ($id != null) {
            $filter = $this->primary_filter;
            $id = $filter($id);
            $this->db->where($this->primary_key, $id);
            $method = 'row';
        } elseif ($single == true) {
            $method = 'row';
        } else {
            $method = 'result';
        }

        if ($this->order_by_type) {
            $this->db->order_by($this->order_by, $this->order_by_type);
        } else {
            $this->db->order_by($this->order_by);
        }

        return $this->db->get('{PRE}' . $this->table_name)->$method;
    }

    public function get_by($where = null, $limit = null, $offset = null, $single = false, $select = null)
    {
        if ($select != null) {
            $this->db->select($select);
        }

        if ($where) {
            $this->db->where($where);
        }

        if (($limit) && ($offset)) {
            $this->db->limit($limit, $offset);
        } elseif ($limit) {
            $this->db->limit($limit);
        }

        return $this->db->get(null, $single);
    }

    public function delete($id)
    {
        $filter = $this->primary_filter;
        $id = $filter($id);

        if (!$id) {
            return false;
        }

        $this->db->where($this->primary_key, $id);
        $this->db->limit(1);
        $this->db->delete('{PRE}' . $this->table_name);
    }

    public function delete_by($where = null)
    {
        if ($where) {
            $this->db->where($where);
        }

        $this->db->delete('{PRE}' . $this->table_name);
    }

    public function count($where = null)
    {
        if (!empty($this->type)) {
            $where['post_type'] = $this->type;
        }

        if ($where) {
            $this->db->where($where);
        }

        $this->db->from('{PRE}' . $this->table_name);
        return $this->db->count_all_results();
    }
}
