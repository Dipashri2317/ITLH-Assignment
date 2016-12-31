<?php
class Uploadfile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    //index function
    public function index()
    {
        //load file upload form
        $this->load->view('Upload_img');
    }

    //file upload function
    public function upload()
    {
         //var_dump($_POST);die();
        //set preferences
        $config['upload_path'] = './public/Images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']    = '100';

        //load upload class library
        $this->load->library('upload', $config);


        if(!$this->upload->do_upload('file_name'))
        { 
            $data['imageError'] =  $this->upload->display_errors();
             $this->load->view('upload_success');

        }
        else
        {
            $this->load->view('upload_success');
            $imageDetailArray = $this->upload->data();
            $image =  $imageDetailArray['file_name'];
        }
    }
}
