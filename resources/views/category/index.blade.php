@include('partials.header', ['title' => 'Category Manager'])
	<ul>
		@foreach ($categories as $category)

			<li class="font-extrabold text-blue-600">{{ $category->category_id }} {{ $category->category_name }} {{ $category->category_description }} {{ $category->product_manager }}</li>
		@endforeach
	</ul>
@include('partials.footer')