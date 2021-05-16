<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sequence
 * @package Modules\Core\Models
 * @mixin Builder
 * @property string $name
 * @property int $value
 */
class Sequence extends Model
{
    use HasFactory;
}
