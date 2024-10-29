@extends('Layout')
@section('content')
      <div class="row"style="margin-top:5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des Etudiants</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="create">Create New Student</a>  
            </div>
        </div>
       </div>
       <table class="table table-bordered table-hover">
         <tr>
            <th>Numero</th>
            
            <th>Nom</th>
            <th>Prenom</th>
            <th width="280px">Action</th>
         </tr>
         @foreach ($liste as $value)
         <tr>
            <td>{{$loop->index}}</td>
            <td>{{$value->nom}}</td>
            <td>{{$value->prenom}}</td>
            <td>
            <form >
                <a class="btn btn-info" href="{{ route('etudiant.show',$value->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('etudiant.edit',$value->id) }}">Edit</a>
                <form action="{{ route('etudiant.delete', $value->id) }}" method="POST" style="display:inline;">
            @method('DELETE')
            @csrf 
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?');">Delete</button>
        </form>

         </tr>
         @endforeach 
         
</table>
@endsection
