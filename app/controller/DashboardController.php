<?php 

class DashboardController extends Controller{
    public function index(){
        $data = [
            'title' => 'Contact APP',
        ];

        $this->view('pages/admin/dashboard', $data);
    }
}