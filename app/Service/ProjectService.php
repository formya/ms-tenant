<?php


namespace App\Service;


use App\Models\Project;
use App\Models\Survey;
use Illuminate\Support\Facades\DB;

class ProjectService
{
   /**
    * @param Project $project
    */
   function createProject(Project $project) {
      DB::beginTransaction();
      try {
         $project->save();
         for($i=0; $i<$project->survey_count; $i++)
         {
            $survey = new Survey();
            $survey->user_id = $project->user_id;
            $survey->project_id = $project->id;

            $project->surveys()->save($survey);
         }

         DB::commit();
      } catch (\Throwable $e) {
         DB::rollBack();
      }
   }
}