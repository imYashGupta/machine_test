<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class App_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function insert($table, $data){
		if ($this->db->insert($table, $data)) { 
            $insert_id = $this->db->insert_id();
			return $insert_id; 
		}else{
			return false; 
		}
	}

	function update($table, $data, $where){
		$this->db->set($data);
        $this->db->where($where);
		if($this->db->update($table, $data)){
		//echo $this->db->last_query();  die;	
			return true;
		}else{
			return false;
		}
	}

	function delete($table, $where) {
		if ($this->db->delete($table, $where)) {
			
			return true; 
		}else{
			return false;
		}
	}

	public function select($select, $from, $where=""){
		$this->db->select($select);
		$this->db->from($from);
		if($where){
			$this->db->where($where);
		}
		$query = $this->db->get();
		if ( $query->num_rows() >= 0 ){
			return $query->result();
		}else{
			return false;
		}
	}

	public function app_select($select, $from, $join, $join_on, $where, $order_by, $order, $return){
		$this->db->select($select);
		$this->db->from($from);
		if($join && $join_on){
			$this->db->join($join, $join_on);
		}
		if($where){
			$this->db->where($where);
		}
		if($order_by && $order){
			$this->db->order_by($order_by, $order);
		}
		$query = $this->db->get();
		
		if ( $query->num_rows() >= 0 ){
			if($return == "row"){
				return $query->row();
			}else{
				return $query->result();
			}
		}else{
			return false;
		}
	}
	
	public function select_query($sql){
		if($this->db->query($sql)){
			$query = $this->db->query($sql);
			return $query->result();
		}else{
			return false;
		}
	}

	public function select_edit($select, $from, $where=""){
		$this->db->select($select);
		$this->db->from($from);
		if($where){
			$this->db->where($where);
		}
		$query = $this->db->get();
		
		if ( $query->num_rows() >= 0 ){
			return $query->row();
		}else{
			return false;
		}
	}
	
	
	

}

?>