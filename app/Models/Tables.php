<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table='tables';
    public function getDescribe(){
        if(app()->getLocale() == 'ar')
            return $this->describe_ar;
        else
            return $this->describe;
    }
    public function orders()
    {
        return $this->hasMany('\App\Models\Order');
    }

}
