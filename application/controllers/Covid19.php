<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid19 extends CI_Controller 
{ 
    private $url = "https://api.kawalcorona.com/indonesia";

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {      
        // $result['RESULT_DATA'] = array();

		$dataindo = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'), true);
        $result['TOTAL_POSITIF']= $dataindo[0]['positif'];
        $result['TOTAL_SEMBUH']= $dataindo[0]['sembuh'];
        $result['TOTAL_MENINGGAL']= $dataindo[0]['meninggal'];

        // $dataprov = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'), true);

        // foreach ($dataprov as $match) {
        //     $match = $match;
        // }

        // // $categories = array();
        // // foreach ( $dataprov as $term ) {
        // //     $categories[] = $term->dataprov['Provinsi'];
        // // }

        // $result['RESULT_DATA'] = $match;

		$this->load->view('vw_Covid19', $result);
    }

}