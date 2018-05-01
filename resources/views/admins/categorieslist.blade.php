
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">name</th>
	      <th scope="col">description</th>
	      <th scope="col">created_ad</th>
	      <th scope="col">操作</th>
	    </tr>
	  </thead>
	  @foreach($categories as $category)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $category->id }}</th>
	      <td><a href="#">{{ $category->name }}</a></td>
	      <td>{{ $category->description }}</td>
	      <td>{{ $category->created_at }}</td>
	      <td><input type="button" value="edit"></td>
	    </tr>

	  </tbody>
	  @endforeach
	</table>
	{{ $categories->links() }}
