<h3>{{$product -> name}}</h3> <p>Date of adding: {{$product -> created_at}}</p>
<p>Price: {{$product -> price}} Uah</p>


{{$product -> updated_at}}
</tr>
<br>
{{link_to_route ('products.index','Back')}}