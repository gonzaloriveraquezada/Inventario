<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cotizacione extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cotizaciones';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_producto_aw', 'cod_producto_proveedor', 'desc_cotizacion', 'part_number', 'valor', 'cantidad', 'modelo', 'imagen_ref'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
