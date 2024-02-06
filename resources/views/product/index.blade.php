@include('partials.header', ['title' => 'Product Manager'])
	<ul>
		@foreach ($products as $product)

			<li class="font-extrabold text-blue-600">{{ $product->product_id }} {{ $product->product_name }} {{ $product->product_sku}} {{ $product->product_category_id}} {{ $product->product_category}} {{ $product->product_description}} {{ $product->product_image}} {{ $product->author_id}} {{ $product->created_at}} {{ $product->updated_at}}</li>

		@endforeach
	</ul>
@include('partials.footer')