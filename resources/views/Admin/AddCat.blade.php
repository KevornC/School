<nav>
  <a href="/Dashboard">Home</a><br>
</nav>

<form action="/AddCategory" method="post">
  @csrf
  <fieldset>
<legend>Add Category</legend>
Category Name:
<input type="text" name="name" placeholder="Meat">
Category Description:
<input type="text" name="desc" placeholder="Chicken is nice">
<input type="submit" value="Submit">
</fieldset>
</form>
