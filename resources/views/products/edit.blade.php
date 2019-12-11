@extends("layouts.design")
@section("content")
<form action="{{route('update_product',['id'=>$product->id])}}" method="post">
    @csrf
    @method('patch')
    <div>
        <input type="text" name="name" class="form-control" placeholder="le nom du produit" value="{{$product->name}}">
    </div>
    <div>
        <input type="text" name="prix" class="form-control" placeholder="Le prix du produit" value="{{$product->prix}}">
    </div>

    <div>
        <input type="text" name="category_id" class="form-control" placeholder="La categorie du produit" value="{{$product->categorie_id}}">
    </div>
    <div>
        <input type="text" name="quantite" class="form-control" placeholder="La quantite du produit" value="{{$product->quantite}}">
    </div>
    <div>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$product->description}}</textarea>
    </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
@endsection
