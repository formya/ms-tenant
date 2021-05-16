<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * @package Modules\Core\Models
 * @mixin Builder
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $user_id
 * @property integer $survey_count
 */
class Project extends Model
{
   use HasFactory;
   const MODE_DEV = 'dev';
   const MODE_ONLINE = 'online';
   const MODE_STOP = 'stop';
   const MODE_END = 'end';
   const MODE_MAINTAIN = 'maintain';

   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function surveys()
   {
      return $this->hasMany(Survey::class)->orderByRaw('survey_order asc, id asc');
   }
}
