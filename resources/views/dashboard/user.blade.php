<h2>User Dashboard</h2>
<p>Welcome, {{ Auth::user()->name }}</p>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
