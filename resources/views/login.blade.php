<nav>
<a href="/">Home</a>

</nav>
<form action="/Dashboard" method="post">
  @csrf
  <fieldset>
<legend>login</legend>
<input type="email" name="email" placeholder="JohnBrown@gmail.com">
<input type="password" name="password" placeholder="123amber">
<input type="submit" value="Submit">
</fieldset>
</form>
