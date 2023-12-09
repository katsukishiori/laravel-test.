@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="contacts/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <label class="name-box">
            <input class="name" type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}" />
            <input class="name" type="text" name="second_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
          </label>
        </div>
        <div class="form__error">
        @error('password')
          {{ $message }}
        @enderror
        </div>
      </div>
    </div>

    
    
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <fieldset class="radio-email">
            <label>
              <input type="radio" name="gender" value="woman" checked/>
                男性
            </label>
            <label>
              <input type="radio" name="gender" value="man"/>
                女性
            </label>
            <label>
              <input type="radio" name="gender" value="others"/>
                その他
              </label>
          </fieldset>
        </div>
        <div class="form__error">
        @error('password')
        {{ $message }}
        @enderror
        </div>
      </div>
    </div>

    
    
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
        @error('password')
          {{ $message }}
        @enderror
        </div>
      </div>
    </div>



    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <label class="tel-box">
              <input class="tel" name="first-tel" placeholder="090" value="{{ old('first-tel') }}" /> -
              <input class="tel" name="second-tel" placeholder="1234" value="{{ old('second-tel') }}" /> -
              <input class="tel" name="third-tel" placeholder="5678" value="{{ old('third-tel') }}" />
          </label>
        </div>
        <div class="form__error">
        @error('password')
          {{ $message }}
        @enderror
        </div>
      </div>
    </div>

    
    
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
        </div>
        <div class="form__error">
        @error('password')
          {{ $message }}
        @enderror
        </div>
      </div>
    </div>

    
    
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building-name" placeholder="例:千駄ヶ谷マンション101" value="{{ old('text') }}" />
        </div>
        <div class="form__error">
        @error('password')
          {{ $message }}
        @enderror
        </div>
      </div>
    </div>

    
    
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせの種類</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--select">
          <label class="select-box">
          <select>
            <option value="">選択してください</option>
            <option value="商品のお届けについて">商品のお届けについて</option>
            <option value="商品の交換について">商品の国間について</option>
            <option value="商品トラブル">商品トラブル</option>
            <option value="ショッピへのお問い合わせ">ショップへのお問い合わせ</option>
            <option value="その他">その他</option>
          </select>
          </label>
        </div>
        <div class="form__error">
@if ($errors->has('name'))
    <tr>
        <th style="background-color: red">ERROR</th>
        <td>
            {{$errors->first('name')}}
        </td>
    </tr>
@endif
        </div>
      </div>
    </div>

    
    
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="content" placeholder="お問い合わせ内容をご記録ください">{{ old('content') }}</textarea>
        </div>
      </div>
    </div>
    
    
    
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>

    </div>
  </form>
</div>
@endsection