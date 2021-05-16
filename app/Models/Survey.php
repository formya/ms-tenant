<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Survey
 * @package Modules\Core\Models
 * @mixin Builder
 * @property integer user_id
 * @property integer project_id
 */
class Survey extends Model
{
   use HasFactory;

   const STATUS_ACTIVE = 'active';
   const STATUS_INACTIVE = 'inactive';

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function project()
   {
      return $this->belongsTo(Project::class);
   }

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function user()
   {
      return $this->belongsTo(User::class);
   }
}
