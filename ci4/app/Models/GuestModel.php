<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'esarong_myguests';

    public function getGuest()
    {
       return $this->findAll();
    }
}