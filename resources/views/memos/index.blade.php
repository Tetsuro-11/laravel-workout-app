@extends('../layouts/memo')

@section('content')
  @if(Request::is('mypage'))
  <h2>{{ Auth::user()->name}}さんの ワークアウトログ</h2>
  @else
  <h2>みんなの ワークアウトログ</h2>
  @endif

  <a href="{{ route('memos.create') }} "> ワークアウトを記録 </a>


  @foreach($memos as $memo)
    <div class="card">
      <div class="card-body">
      <p>{{$memo->user->name}}さん</p>
      <span>{{$memo->updated_at}}</span>
      <span>{{$memo->content}}</span>
      @can('edit', $memo)
      <a href="{{route('memos.edit', ['id'=>$memo->id])}}">編集</a>
      <a href="{{route('memos.delete', ['id'=>$memo->id])}}">削除</a>
      @endcan

      </div>
    </div>
  @endforeach
  <p>
  {{ $memos->links() }}
  </p>
  
@endsection