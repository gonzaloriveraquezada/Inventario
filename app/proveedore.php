<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class proveedore extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proveedores';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'razon_social', 'rut', 'giro', 'contacto', 'aplica_descuento', 'ubicacion', 'descripcion'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
