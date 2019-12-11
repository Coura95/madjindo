@extends("layouts.design")
@section("content")
<table class="table table-striped">
    <tr>
               <th>Nom Produit</th>           <th>Prix Produit</th>           <th>quantite</th> <th>description</th>
    </tr>
    @foreach($products as $product)
        <tr>

            <th>{{$product->name}}</th>
            <th>{{$product->prix}} {{ $product->category->name ?? '' }}</th>
            <th>{{$product->quantite}}</th>
            <th>{{$product->description}}</th>
            <th>
            <th>

                <p><a href="{{route('editer_produit',['id'=>$product->id])}}">Editer</a>

                </p>
            </th>
            <th> <form action="category/{{$product->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                </form></th>

        </tr>
    @endforeach
</table>
@endsection
