@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
	@parent
	インデックスページ(From index.blade)
@endsection


@section('content')

       <table>
       <tr><th>名前</th><th>メールアドレス</th><th>年齢</th></tr>
       @foreach($pitems as $item)
       <tr>
          <td>{{$item->name}}</td>
          <td>{{$item->mail}}</td>
          <td>{{$item->age}}</td>
       </tr>
       @endforeach
       </table>

@endsection

@section('footer')
copyright 2017 Shinya. (On index.blade)
@endsection
