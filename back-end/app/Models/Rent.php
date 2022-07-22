<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property integer $price
 * @property integer $bedrooms
 * @property integer $bathrooms
 * @property integer $storeys
 * @property integer $garages
 *
 * Class Rent
 * @package App\Models
 */
class Rent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'bedrooms',
        'bathrooms',
        'storeys',
        'garages'
    ];
}
