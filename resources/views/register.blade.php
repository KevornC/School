<nav>
<a href="/">Home</a>

</nav>
<form action="/Register" method="post">
  @csrf
  <fieldset>
<legend>Register</legend>
<input type="text" name="name" placeholder="John Brown">
<input type="email" name="email" placeholder="JohnBrown@gmail.com">
<input type="password" name="password" placeholder="123amber">
<input type="submit" value="Submit">
</fieldset>
</form>
