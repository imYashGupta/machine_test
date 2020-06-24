<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Item extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($st_dt="")
	{
        $st_date = ($st_dt !="") ? $st_dt : '';
		if($st_date==""){
			
			$data = $this->db->query("SELECT `partner_name`,count(`partner_name`) as `pcount` from api_data group by partner_name");
			 
		}
		else{
			$data = $this->db->query("SELECT `partner_name`,count(`partner_name`) as `pcount` from api_data WHERE DATE(`call_date`)=DATE('".$st_date."') group by partner_name");	
		}
		
		if($data->num_rows()>0)
            $result= $data->result_array();
		
		
     
        $this->response($result, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    { 
        $input = $this->input->post();
		
		$input = array_merge($input,array("ip_address"=>$_SERVER['REMOTE_ADDR']));
		
        $this->db->insert('api_data',$input);
		redirect('home');
        //$this->response(['data stored successfully.'], REST_Controller::HTTP_OK);
    } 
     
    
    	
}