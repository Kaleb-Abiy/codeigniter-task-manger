<?php 

namespace App\Helpers;

class conn
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
}

?>