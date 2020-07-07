<?php
// Base Controller
// Loads the models and views
class Controller {
  // Load model
  public function model($model) {
    //require model file
    require_once '../app/models/'.$model.'.php';

    //Init Model
    return new $model();
  }

  // Load view
  public function view($view, $data = []) {
    //  check for the view file
    if(file_exists('../app/views/'.$view.'.php')) {
        //require view file
    require_once '../app/views/'.$view.'.php';
    } else {
      // View does not exists
      die('View does not exist');

    }
  }
}