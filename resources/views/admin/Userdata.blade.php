<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        
              Hello  {{ Auth::user()->name }}


        </h2>
        <a href="{{route('all.Data')}}">User Data</a>
    </x-slot>
<div class="container">

<div class="row mt-5 bg-white">

<table class="table">
  <thead>
    <tr>
    <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Income</th>
      <th scope="col">Family Type</th>
      <th scope="col">Manglik</th>
    </tr>
  </thead>
  <tbody>

  @foreach($user as $data)

    <tr>
     
      <td>{{ $data->name}}</td>
      <td>{{ $data->gender}}</td>
      <td>{{ $data->annualincome}}</td>
      <td>{{ $data->familytype}}</td>
      <td>{{ $data->manglik}}</td>
    
    </tr>
    @endforeach
    
  </tbody>
</table>

</div>


</div>
  
</x-app-layout>
