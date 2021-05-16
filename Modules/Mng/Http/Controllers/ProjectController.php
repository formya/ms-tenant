<?php

namespace Modules\Mng\Http\Controllers;

use App\Models\Project;
use App\Service\ProjectService;
use App\Service\SequenceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
   protected $sequenceService;
   protected $projectService;

   public function __construct(
      SequenceService $sequenceService,
      ProjectService $projectService)
   {
      $this->sequenceService = $sequenceService;
      $this->projectService = $projectService;
   }

   public function index(Request $request)
   {
      $page = $request->query('page');
      $data = Project::query()
         ->paginate(3, ['id', 'name', 'mode', 'survey_count'], 'page', $page);
      return view('mng::project.index', ['data' => $data]);
   }

   public function create(Request $request)
   {
      return view('mng::project.show');
   }

   public function store(Request $request)
   {
      $user = Auth::user();
      $project = new Project();
      $project->name = $request->input('name');
      $project->description = $request->input('description');
      $project->user_id = $user->id;
      $project->survey_count = (int)$request->input('count');
      $this->projectService->createProject($project);

      return view('mng::project.show');
   }

   public function show(Request $request, $id)
   {
      $request->route()->getActionMethod();
      $project = Project::query()->find($id);

      $data = [
         'project' => $project,
         'surveys' => $project->surveys,
         'modes' => config('constants.project.modes')
      ];
      return view('mng::project.show', $data);
   }

   public function edit($id)
   {
   }

   public function update(Request $request, $id)
   {
   }

   public function destroy($id)
   {

   }

   public function make(Request $request, $id)
   {
      $project = Project::query()->find($id);

      return view('mng::project.make', ['project' => $project]);
   }
}
