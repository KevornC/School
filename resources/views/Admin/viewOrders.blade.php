<nav>
<a href="/Dashboard">Home</a>

</nav>
<table border="1" cellspacing="0" cellpadding="5">
  <thead>
    <tr>
      <th>Name</th>
      <th>Starch</th>
      <th>Meat</th>
      <th>Vegetable</th>
      <th>Beverages</th>
      <th>Date Ordered</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($meals as $meal)
                <tr>
                    <td>{{ $meal->Name }}</td>
                    <td>{{ $meal->Starch }}</td>
                    <td>{{ $meal->Meat }}</td>
                    <td>{{ $meal->Vegetable }}</td>
                    <td>{{ $meal->Beverages }}</td>
                    <td>{{ $meal->Date }}</td>
                </tr>
            @endforeach
  </tbody>
</table>
