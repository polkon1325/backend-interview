{{-- @dd(auth()->user()->user_name) --}}

@include('partials.header', ['title' => 'Add New User'])
<header class="max-w-lg mx-auto">
	<a href="#">
		<h1 class="text-4xl font-bold text-white text-center">Add New User</h1>
	</a>
</header>
<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
	<section>
		<h3 class="font-bold text-2xl">Create new account</h3>
	</section>
	<section class="mt-10">
		<form action="/add/user" method="POST" class="flex flex-col">
			@csrf
			@error('user_name')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="user_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Username</label>
				<input type="text" name="user_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off">
			</div>
		
			@error('first_name')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="first_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">First Name</label>
				<input type="text" name="first_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off">
			</div>

			@error('middle_name')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="middle_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Middle Name</label>
				<input type="text" name="middle_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off">
			</div>

			@error('last_name')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="last_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Last Name</label>
				<input type="text" name="last_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off">
			</div>

			@error('email')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
				<input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off">
			</div>

			@error('password')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
				<input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
			</div>

			@error('password_confirmation')
				<p class="text-red-500 text-xs">
					{{ $message }}
				</p>
			@enderror
			<div class="mb-6 pt-3 rounded bg-gray-200">
				<label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Confirm Password</label>
				<input type="password" name="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
			</div>
			<button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Add +</button>
		</form>
	</section>
</main>
@include('partials.footer')