<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RegisterModel;
class Register extends BaseController
{
    protected $Regist;
    public function __construct() {
        $this->Regist = new RegisterModel ();
    }
    public function index()
    {
        $page_data['states'] = $this->Regist->Statas();
        $page_data['page_name'] = 'reigister';
        return view('index',$page_data);
    }

    public function getCitiesByState() {
        $state_id = $this->request->getPost('state_id');
        $cities = $this->Regist->getCitiesByState($state_id);
        return json_encode($cities);
    }

    public function add_data(){
        $data = $this->request->getPost();

        $this->Regist->insert($data);
        return redirect('/');
    }
    
}
