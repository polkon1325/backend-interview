{{-- @dd(auth()->user()->user_name) --}}


@include('partials.header', ['title' => 'Edit User'])
<header class="max-w-lg mx-auto">
	<a href="#">
		<h1 class="text-4xl font-bold text-white text-center">Edit {{ $users->first_name }} {{ $users->last_name }}'s Account</h1>
	</a>
</header>
<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
	<section class="mt-10">
		<form action="/user/{{$users->id}}" method="POST" class="flex flex-col">
			{{-- @method('PUT') --}}
			@csrf
			@error('user_name')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="user_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Username</label>
				<input type="text" name="user_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value="{{ $users->user_name }}">
			</div>
		
			@error('first_name')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="first_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">First Name</label>
				<input type="text" name="first_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value="{{ $users->first_name }}">
			</div>

			@error('middle_name')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="middle_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Middle Name</label>
				<input type="text" name="middle_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value="{{ $users->middle_name }}">
			</div>

			@error('last_name')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="last_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Last Name</label>
				<input type="text" name="last_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value="{{ $users->last_name }}">
			</div>

			@error('email')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
				<input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value="{{ $users->email }}">
			</div>
			<button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Update</button>
		</form>
	</section>
</main>
@include('partials.footer')