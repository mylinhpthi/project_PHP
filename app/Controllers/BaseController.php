<?php
namespace App\Controllers;

use Illuminate\Support\Facades\Config;
use League\Plates\Engine;
class BaseController{
    public $redirect = '/home';
    /**
     * @var \League\Plates\Engine;
     */
    
    public $view;
    public function __construct(){
        $this->init();
        if(!$this->authorize()){
            redirect($this->redirect);
        }
    }
    public function init(){
        $this->view = new Engine($GLOBALS['config']->get('view.path'));
    }
    
    /**
     * @return void
     */
    public function authorize(){
        return true;
    }
    /**
     * @return void
     */
    
    public function render($view, $data = []){
        echo $this->view->render($view, $data);

    }

}
?>