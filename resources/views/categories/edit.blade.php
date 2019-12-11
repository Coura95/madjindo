@extends("layouts.design")
@section("content")
<p><a href="{{route('editer_category',['id'=>$categories->id])}}">Editer</a></p>
            <form action="{{route('update_category',['id'=>$categories->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="name" class="form-control" placeholder="le nom de la categorie" value="{{$categories->name}}"></div>
  <!-- <div><input type="text" name="price" class="form-control" placeholder="Le prix de la categorie" value="{{$categories->price}}"> </div>
   <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$categories->description}}</textarea> </div>-->
   <div>

    <button class="btn btn-primary">Enregistrer</button>
   </div>

</form>
@endsection
