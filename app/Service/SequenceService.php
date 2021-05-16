<?php


namespace App\Service;


interface SequenceService
{
   function currentValue(string $name): int;
   function nextValue(string $name, int $step, int $from): int;
}