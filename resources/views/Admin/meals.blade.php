<nav>
<a href="/Dashboard">Home</a>

</nav>
<table border="1" cellspacing="0" cellpadding="5">
  <thead>
    <tr>
      <th>Category</th>
      <th>Meal Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($meals as $meal)
                <tr>
                    <td>{{ $meal->mealcategories->Category_Name }}</td>
                    <td>{{ $meal->mealtype }}</td>
                </tr>
            @endforeach
  </tbody>
</table>
