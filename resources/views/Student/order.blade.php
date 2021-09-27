<nav>
  <a href="/Dashboard">Home</a><br>
</nav>

<form action="/MakeOrder" method="post">
  @csrf
  <fieldset>
<legend>Make Order</legend>
Date:
<input type="date" name="Date">
Food
<select class="" name="Starch">
  <option>Select Food</option>
  @foreach ($starch as $star)
    <option value="{{ $star->mealtype }}">{{ $star->mealtype }}</option>
  @endforeach
</select>
Meat
<select class="" name="Meat">
  <option>Select Meat</option>
  @foreach ($meat as $m)
    <option value="{{ $m->mealtype }}">{{ $m->mealtype }}</option>
  @endforeach
</select>
Vegetable
<select class="" name="Veg">
  <option>Select Vegetable</option>
  @foreach ($veg as $v)
    <option value="{{ $v->mealtype }}">{{ $v->mealtype }}</option>
  @endforeach
</select>
Beverage
<select class="" name="Bev">
  <option>Select Beverage</option>
  @foreach ($bev as $b)
    <option value="{{ $b->mealtype }}">{{ $b->mealtype}}</option>
  @endforeach
</select>
<input type="submit" value="Submit">
</fieldset>
</form>
