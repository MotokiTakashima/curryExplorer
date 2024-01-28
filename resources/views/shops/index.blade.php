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
              <th>編集</th>
              <th>削除</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($shops as $shop)
              <tr>
                  <td>{{ $shop->id }}</td>
                  <td>{{ $shop->name }}</td>
                  <td>{{ $shop->address }}</td>
                  <td>
                    <a href="{{ route('shops.edit', $shop) }}" class="btn btn-primary">編集</a>
                  </td>
                  <td>
                    <form action="{{ route('shops.destroy', $shop) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">削除</button>
                    </form>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</x-layout>