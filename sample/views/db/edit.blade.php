<!-- レイアウトの呼び出し -->
@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
   @parent
   データ更新ページ
@endsection

@section('content')

<!-- データ更新用フォームでは更新するレコード値をVALUEで表示しています -->

 <table>
 <form action="/db/edit" method="post">
     @csrf
  <input type="hidden" name="id" value="{{$form->id}}">
  <tr><th>名前: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
  <tr><th>メールアドレス: </th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
  <tr><th>年齢: </th><td><input type="text" name="age" value="{{$form->age}}"></td></tr>
  <tr><th></th><td><input type="submit" value="send"></td></tr>
 
 </form>
 </table>

@endsection

@section('footer')
copyright 2018 Shinya
@endsection
