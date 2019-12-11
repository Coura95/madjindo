@extends("layouts.design")
@section("content")
    @if(session("success"))
        <div class="alert alert-success" >{{session('success')}}</div>
        @endif
<table class="table table-striped">
<div class="container">

    <form>
    <tr>
                <th>Nom Categorie</th>  <br><br >
    </tr>
    @foreach($categories as $category)
        <tr>

            <th>{{$category->name}}</th>

            <th>

           <p><a href="{{route('editer_category',['id'=>$category->id])}}">Editer</a>


</p></th>
           <th> <form action="category/{{$category->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
            </form></th>
        </tr>
    @endforeach
    </form>
    </div>
</table>
@endsection

