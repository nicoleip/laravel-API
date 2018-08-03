<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model 
{

    protected $table = 'vehicles';

    protected $primaryKey = 'serie';

    protected $fillable = ['color', 'power', 'capacity', 'speed', 'serie', 'maker_id'];

    protected $hidden = ['serie', 'created_at', 'updated_at'];


    public function maker()
    {
        $this->belongsTo('App\Maker');
    }
}