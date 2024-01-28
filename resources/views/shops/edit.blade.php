<x-layout>
  <x-slot:title>
      編集 | メンバー管理
  </x-slot>

  <a href="{{ route('shops.index') }}" class="btn btn-secondary mt-5">戻る</a>
  <form action="{{ route('shops.update', $shop) }}" method="POST" class="mt-5 @if($errors->isNotEmpty()) was-validated @endif" novalidate>
      @csrf
      @method('PATCH')
      <div class="mb-3">
          <label for="name" class="form-label">名前</label>
          <input type="text" id="name" class="form-control" name="name" maxlength="50" value="{{ old('name', $shop->name) }}" required>
          @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="address" class="form-label">メールアドレス</label>
          <input type="text" id="name" class="form-control" name="address" maxlength="100" value="{{ old('address', $shop->address) }}" required>
          @error('address')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">更新</button>
  </form>
  <form action="{{ route('shops.destroy', $shop) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">削除</button>
  </form>
</x-layout>