<?php
namespace Core;
class Bootstrap{
    public function boot(){
       
        define ('CONFIG',ROOT.'/config');
        require CONFIG.'/database.php';


    }
}