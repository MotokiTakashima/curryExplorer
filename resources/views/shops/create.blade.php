<x-layout>
  <x-slot:title>
      新規登録 | 店舗管理
  </x-slot>

  <form action="{{ route('shops.store') }}" method="POST" class="mt-5 @if($errors->isNotEmpty()) was-validated @endif" novalidate>
      @csrf
      <div class="mb-3">
          <label for="name" class="form-label">店舗名</label>
          <input type="text" id="name" class="form-control" name="name" maxlength="50" value="{{ old('name') }}" required>
          @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">住所</label>
          <input type="text" id="name" class="form-control" name="address" maxlength="100" value="{{ old('address') }}" required>
          @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">登録</button>
  </form>
</x-layout>