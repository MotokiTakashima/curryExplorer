<x-layout>
  <x-slot:title>
      一覧 | 店舗管理
  </x-slot>

  <a href="{{ route('shops.create') }}" class="btn btn-success mt-5">新規登録</a>
  <table class="table table-bordered mt-5">
      <thead>
          <tr>
              <th>ID</th>
              <th>店舗名</th>
              <th>店舗住所</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($shops as $shop)
              <tr>
                  <td>{{ $shop->id }}</td>
                  <td>{{ $shop->name }}</td>
                  <td>{{ $shop->address }}</td>
              </tr>
          @endforeach
      </tbody>
  </table>
</x-layout>