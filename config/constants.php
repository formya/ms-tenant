<?php

return [
   'admins' => explode(',', env('ADMIN_LIST')),

   'seq' => [
      'project' => 'project',
      'survey' => 'survey',
      'revision' => 'rev_%s',
   ],
   'project' => [
      'modes' => [
         \App\Models\Project::MODE_DEV,
         \App\Models\Project::MODE_ONLINE,
         \App\Models\Project::MODE_STOP,
         \App\Models\Project::MODE_END,
         \App\Models\Project::MODE_MAINTAIN,
      ]
   ]
];