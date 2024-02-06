{{-- @dd(auth()->user()->user_name) --}}

@include('partials.header', ['title' => 'Home'])
	@if(auth()->check())
		<h1 class="m-10 mb-20 text-4xl font-bold text-white text-center">Welcome, {{ auth()->user()->user_name }}</h1>
	@endif

	<div class="flex justify-evenly">
		<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
			<a href="/UserManager">
				<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">User Manager</h5>
			</a>
			<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The User Manager oversees user-related tasks such as authentication, registration, profile management, and password handling, providing interfaces for users and administrators to manage accounts securely.</p>
			<a href="/UserManager" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
				Go Here
				<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
				</svg>
			</a>
		</div>
	
		<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
			<a href="/CategoryManager">
				<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Category Manager</h5>
			</a>
			<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The Category Manager organizes and maintains categories within the system, enabling users to classify items or products efficiently for better organization and navigation.</p>
			<a href="/UserManager" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
				Go Here
				<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
				</svg>
			</a>
		</div>
	
		<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
			<a href="/ProductManager">
				<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Product Manager</h5>
			</a>
			<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The Product Manager facilitates the management of products or items within the application, allowing users to add, update, and remove products, set pricing, manage inventory, and assign attributes for effective product management.</p>
			<a href="/UserManager" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
				Go Here
				<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
				</svg>
			</a>
		</div>
	</div>
	

	

	{{-- <div>
		<a class="text-white" href="/UserManager">User Manager</a>
	</div>
	<div>
		<a class="text-white" href="/CategoryManager">Category Manager</a>
	</div>
	<div>
		<a class="text-white" href="/ProductManager">Product Manager</a>
	</div> --}}
@include('partials.footer')