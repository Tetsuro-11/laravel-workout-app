@extends('../layouts/memo')

@section('content')

  <form method="POST" action="{{ route('memos.update', ['id'=>$memo->id])}}">
    <div class='form-group'>
    @csrf
    <textarea class="form-control" name="content" rows="4">{{$memo->content}}</textarea>

    @if($errors->any())
      @foreach($errors->all() as $error)
        <p>{{$error}}</p>
      @endforeach
    @endif
    <button type="submit" class="btn btn-primary">記録</button>
    <a class="btn btn-outline-primary" href="{{ route('memos.index')}}">キャンセル</a>
    </div>
  </form>

@endsection