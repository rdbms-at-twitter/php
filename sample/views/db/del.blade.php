<!-- レイアウトの呼び出し -->
@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menubar')
   @parent
   データ削除ページ
@endsection

@section('content')

 <table>
 <form action="/db/del" method="post">
     @csrf
  <input type="hidden" name="id" value="{{$form->id}}">
  <tr><th>名前: </th><td>{{$form->name}}</td></tr>
  <tr><th>メールアドレス: </th><td>{{$form->mail}}</td></tr>
  <tr><th>年齢: </th><td>{{$form->age}}</td></tr>
  <tr><th></th><td><input type="submit" value="削除"></td></tr>
 
 </form>
 </table>

@endsection

@section('footer')
copyright 2018 Shinya
@endsection
