<h2>Admin Dashboard</h2>
<p>Welcome, {{ Auth::user()->name }}</p>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
