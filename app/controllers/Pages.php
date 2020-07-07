<?php
class Pages extends Controller{
  public function __construct(){

  }
  public function index() {
    if(isLoggedIn()){
      redirect('posts');
    }
    
    
    $data = ['title'=> 'SharePosts', 'description'=>'Simple social network build on the Web Bearded Coder MVC PHP framework'];


    $this->view('pages/index', $data);
  }

  public function about(){
    $data = ['title'=> 'About Us', 'description'=>'App to shareposts with other users'];
    $this->view('pages/about', $data);
  }
}