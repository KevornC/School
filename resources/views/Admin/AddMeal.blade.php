<nav>
  <a href="/Dashboard">Home</a><br>
</nav>

<form action="/AddMeal" method="post">
  @csrf
  <fieldset>
<legend>Add Category</legend>Meal Type:
<input type="text" name="mealname" placeholder="Chicken">
Category:
<select class="" name="Category">
  <option>Select Category</option>
  @foreach ($cat as $category)
    <option value="{{ $category->id }}">{{ $category->Category_Name }}</option>
  @endforeach
</select>
<input type="submit" value="Submit">
</fieldset>
</form>
