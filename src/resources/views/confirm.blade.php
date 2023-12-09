@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')

<div class="confirm__content">
  <div class="confirm__heading">
    <h2>Confirm</h2>
  </div>
  
  <form class="form" action="/contacts/confirm" method="post">
    @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お名前</th>
          <td class="confirm-table__text">
            <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
            <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">性別</th>
          <td class="confirm-table__text">
          <label>
            <input type="radio" name="gender" value="0" {{ $contact['gender'] === 0 ? 'checked' : '' }} readonly />
            <input type="radio" name="gender" value="1" {{ $contact['gender'] === 1 ? 'checked' : '' }} readonly />
          </label>
          <label>
            <input type="radio" name="gender" value="2" {{ $contact['gender'] === 2 ? 'checked' : '' }} readonly /> 
          </label>
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">メールアドレス</th>
          <td class="confirm-table__text">
            <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">電話番号</th>
          <td class="confirm-table__text">
             @if(isset($contact['first_tel']))
            <input type="tel" name="first_tel" value="{{ $contact['first_tel'] }}" readonly />
            @endif
            @if(isset($contact['second_name']))
            <input type="tel" name="second_tel" value="{{ $contact['second_tel'] }}" readonly />
            @endif
            @if(isset($contact['third_name']))
            <input type="tel" name="third_tel" value="{{ $contact['third_tel'] }}" readonly />
            @endif
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">住所</th>
          <td class="confirm-table__text">
            <input type="tel" name="address" value="{{ $contact['address'] }}" readonly />
          </td>
        </tr>
         <tr class="confirm-table__row">
          <th class="confirm-table__header">建物名</th>
          <td class="confirm-table__text">
            <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
          </td>
        </tr>
         <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせの種類</th>
          <td class="confirm-table__text">
            <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせ内容</th>
          <td class="confirm-table__text">
            <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
          </td>
        </tr>
        
       
      </table>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
      <a class="link" href="#">修正</a>
    </div>
  </form>
</div>
@endsection