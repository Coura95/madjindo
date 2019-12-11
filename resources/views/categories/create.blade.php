@extends("layouts.design")
@section("content")
<div class="container">
    <div><p><a class="btn btn-primary"  href="{{route('categories.create')}}">{{('Enregistrement d\'un categorie')}} </a></p></div>
    <div class="container">
        <form action="{{route('categories.store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="name" class="form-control" placeholder="le nom du produit">
            </div>
         <!--   <div>
                <input type="text" name="price" class="form-control" placeholder="Le prix du produit">
            </div>
            <div>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
            </div>-->
            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
@endsection
