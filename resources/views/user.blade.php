<h1>User Login</h1>

<form method="" action="loginuser">
    @csrf
    <input type="text" name="Username" placeholder ="Enter Username" ><br><br>
    <input type="password" name="Password" placeholder ="Enter Password" ><br><br>
    <button type="submit">Login</button>
</form>