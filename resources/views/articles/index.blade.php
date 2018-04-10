@extends('app')

@section('title', '文章列表')

@section('sidebar')

@endsection



@section('content')
	<h1>Article</h1>
	<hr>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">title</th>
	      <th scope="col">content</th>
	      <th scope="col">published</th>
	    </tr>
	  </thead>
	  @foreach($articles as $article)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $article->id }}</th>
	      <td><a href="{{ url('articles', $article->id) }}">{{ $article->title }}</a></td>
	      <td>{{ $article->content }}</td>
	      <td>{{ $article->published_at }}</td>
	    </tr>

	  </tbody>
	  @endforeach
	</table>
	{{ $articles->links() }}





@stop