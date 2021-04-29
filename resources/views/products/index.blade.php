<h1>Product List</h1>

<ul>
@foreach($products as $product)
    <li>{{ $product->title }}</li>
@endforeach
</ul>
