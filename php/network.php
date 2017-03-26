<?php
namespace SiteTemplate\Network{
    public interface Network{
        public $connection;
        public $security;
        
        public function createConnection(){
            
        }
        
        public function chooseSecurity(){
            
        }
        
        public function setStatements(){
            
        }
        
    }
}


?>