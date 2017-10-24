<?php
namespace SiteTemplate\Network
{
  interface Network{
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
