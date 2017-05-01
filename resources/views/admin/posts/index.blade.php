@extends('layouts.admin')


@section('content')

    <h1>Posts</h1>


    <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>owner</th>
            <th>category</th>
              <th>photo_id</th>
              <th>title</th>
              <th>body</th>
              <th>created_at</th>
              <th>updated_At</th>

          </tr>
        </thead>
        <tbody>

        @if($post)

            @foreach($post as $posts)

          <tr>
            <td>{{$posts->id}}</td>
            <td>{{$posts->user->name}}</td>
            <td>{{$posts->category_id}}</td>
              <td><img height="50" src="{{$posts->photo->file}}"></td>
              <td>{{$posts->title}}</td>
              <td>{{$posts->body}}</td>
              <td>{{$posts->created_at->diffForHumans()}}</td>
              <td>{{$posts->updated_at->diffForHumans()}}</td>
          </tr>

            @endforeach

            @endif

        </tbody>
      </table>


    @stop