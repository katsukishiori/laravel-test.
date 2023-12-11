@extends('layouts.app')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'admin.blade.php')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Admin</h2>
  </div>
  <form class="form" action="admin" method="post">
  @csrf


<form action="#" class="admin-search">
  <label>
    <input type="text" placeholder="名前やメールアドレスを入力してください">
  </label>
  <button type="submit" aria-label="検索"></button>
</form>


<label class="select-box__gender">
  <select>
    <option value="全て">全て</option>
    <option value="男性">男性</option>
    <option value="女性">女性</option>
    <option value="その他">その他</option>
  </select>
</label>


<label class="select-box__type">
  <select>
    <option value="お問い合わせの種類">お問い合わせの種類</option>
    <option value="商品のお届けについて">商品のお届けについて</option>
    <option value="商品の交換について">商品の交換について</option>
    <option value="商品トラブル">商品トラブル</option>
    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
     <option value="その他">その他</option>
  </select>
</label>


<label class="select-box__calendar">
    <input type="date" />
</label>

<div class="export__button">
  <button class="export__button-submit" type="submit">エクスポート</button>
</div>




<table>
  <tr>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th>お問い合わせの種類</th>
  </tr>


<div class="reset__button">
  <button class="reset__button-submit" type="reset">リセット</button>
</div>


</div>
@endsection
