<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use const http\Client\Curl\PROXY_HTTP;

/**
 * Class ProductSpecification.
 *
 * @package namespace App\Models;
 */
class ProductSpecification extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value',
    ];


    public function specification()
    {
        return $this->belongsTo(Specification::class, 'specification_id', 'id');
    }

}
