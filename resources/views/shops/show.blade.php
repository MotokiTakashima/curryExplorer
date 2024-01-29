<x-layout>
  <x-slot:title>
      詳細 | メンバー管理
  </x-slot>

  <a href="{{ route('shops.index') }}" class="btn btn-secondary mt-5">戻る</a>
  <p class="mt-5">ID: {{ $shop->id }}</p>
  <p>名前: {{ $shop->name }}</p>
  <p>店舗住所: {{ $shop->address }}</p>
  <p>作成日時: {{ $shop->created_at }}</p>
  <p>更新日時: {{ $shop->updated_at }}</p>
</x-layout>