@extends("layouts.design")
@section("content")
@foreach($products as $prod)
<tr>
    <th>Nom</th>
    <th>Prix</th>
</tr>
    <tr>
        <td></td>
        <td>{{$prod->name}}</td>
        <td>{{$prod->prix}} - {{$prod->category->name ?? "n' existe pas"}}</td>
        <td></td>
    </tr>
    <h1>{{$prod->name}}</h1>
@endforeach

@endsection
