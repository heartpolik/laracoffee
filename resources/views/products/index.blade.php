<table class="table table-responsive">
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Actions</th>
    @foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>
            {{link_to_route ('products.show','Show',$product->id)}}
            {{link_to_route ('products.edit','Edit',$product->id)}}

            {{--{{link_to_route ('products.destroy','Delete',$product->id)}}--}}
            {{-- TODO : find how to destroy this stuff --}}
    </tr>

    @endforeach
</table>