<x-app-layout>
   <a href="/projects/create" class="btn btn-primary" role="button">New</a>

   <table class="table">
      <thead>
      <tr>
         <th scope="col" style="width: 150px">ID</th>
         <th scope="col">Name</th>
         <th scope="col" style="width: 150px">Status</th>
         <th scope="col" style="width: 150px">Survey Count</th>
         <th scope="col" style="width: 250px"></th>
      </tr>
      </thead>
      <tbody>
      @foreach ($data as $project)
         <tr>
            <th scope="row">{{$project['id']}}</th>
            <th>{{$project['name']}}</th>
            <th>{{$project['mode']}}</th>
            <th>{{$project['survey_count']}}</th>
            <td>
               <a type="button" class="btn btn-success" href="/mng/projects/{{$project['id']}}">Editor</a>
            </td>
         </tr>
      @endforeach

      </tbody>
   </table>
   {{ $data->links() }}

</x-app-layout>
