<x-app-layout>
   <div class="row">
      <ul class="nav">
         <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/mng/projects/{{$project->id}}">Info</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="/mng/projects/{{$project->id}}/collection">Collection</a>
         </li>
      </ul>
   </div>

   <div class="row">
      <div class="col-2 fw-bold">
         Name
      </div>
      <div class="col">
         {{$project->name}}
      </div>
   </div>
   <div class="row">
      <div class="col-2 fw-bold">
         Description
      </div>
      <div class="col">
         {{$project->description}}
      </div>
   </div>
   <form method="PUT" action="/mng/projects/{{$project->id}}" class="needs-validation mt-4" novalidate>
      <table class="table">
         <thead>
         <tr>
            <th scope="col" style="width: 150px">ID</th>
            <th scope="col" style="width: 150px">Locked User</th>
            <th scope="col" style="width: 150px">Active</th>
         </tr>
         </thead>
         <tbody>
         @foreach ($surveys as $survey)
            <tr>
               <td>{{$survey->id}}</td>
               <td>{{$survey->user->profile->last_name}} {{$survey->user->profile->first_name}}</td>
               <td>
                  <div class="form-check">
                     @if (App\Models\Survey::STATUS_ACTIVE === $survey->status)
                        <input class="form-check-input" type="checkbox" checked/>
                     @else
                        <input class="form-check-input" type="checkbox"/>
                     @endif
                  </div>
               </td>
            </tr>
         @endforeach
         </tbody>
      </table>

      <div class="mt-3 flex-row d-flex align-items-end">
         <div class="d-flex flex-column border-1 border " style="width: 600px">
            <div class="w-100 bg-light p-3">
               <h3>Mode</h3>
            </div>
            <div class="d-flex p-3">
               @foreach ($modes as $mode)
                  <div class="col">
                     <div class="form-check d-flex flex-column align-items-center">
                        <label class="form-check-label" for="mode-{{$mode}}">
                           <h4>{{$mode}}</h4>
                        </label>
                        <input class="form-check-input" type="radio" name="mode" id="mode-{{$mode}}" value="{{$mode}}">
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
      </div>
      <div class="mt-5 d-grid">
         <button class="btn btn-success">Update</button>
      </div>
   </form>

</x-app-layout>
