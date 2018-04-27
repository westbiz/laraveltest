
<div class="list-group side-bar" id="myList">
  <div class="card-header">Manage List</div>
  @foreach($categories as $category)
  <li><a target="fname" class="list-group-item list-group-item-action active" href="{{ route('categories.index') }}">{{$category->name}}</a></li>
  @endforeach

</div>
