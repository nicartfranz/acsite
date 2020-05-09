<?php

/* 
 * Contributor: Franz
 * Date Modified: May 9, 2020
 * 
 * Description: User Controller.
 */
class UserController extends Controller{

    public function index(){
        
        $user = $this->initModel('User');

        $data = [
            'title' => 'User Page',
        ];

        $this->renderView('pages/index', $data);
    }
    
}
