<?php


namespace App\Service;


use App\Models\Sequence;

class SequenceServiceImpl implements SequenceService
{
   function currentValue(string $name): int
   {
      return Sequence::query()->where('name', $name)->first()->value;
   }

   function nextValue(string $name, int $step, int $from): int
   {
      $exist = Sequence::query()->where('name', $name)->first();
      if (!$exist) {
         $exist = new Sequence;
         $exist->name = $name;
         $exist->value = $from;
         $exist->save();
         return $from;
      }
      $exist->value = $exist->value + $step;
      $exist->save();
      return $exist->value;
   }
}