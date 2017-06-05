<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipo_producto extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipo_productos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'nombre'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
