<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class producto extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'tipo_producto', 'valor_adq', 'stock', 'estado', 'empresa', 'descripcion', 'color', 'ubicacion', 'imagen_ref'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
