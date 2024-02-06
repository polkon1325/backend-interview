<ul class="flex flex-col md:flex-row p-4">
	<li>
		<a href="/add/user" class="py-2 pr-4 pl-3">Add New</a>
	</li>
	{{-- <li>
		<form action="/logout" method="POST">
			@csrf
			<button type="submit" class="py-2 pr-4 pl-3 font-semibold uppercase">Switch Account</button>
		</form>
	</li>
	<li>
		<form action="/register" method="GET">
			<button type="submit" class="py-2 pr-4 pl-3 font-semibold uppercase">Add New User</button>
		</form>
	</li> --}}
	<li>
		<form action="/logout" method="POST">
			@csrf
			<button type="submit" class="py-2 pr-4 pl-3 font-semibold uppercase">Logout</button>
		</form>
	</li>
	
</ul>