<form style="display:inline" action="{{ url($table.'/'.$id) }}" method="post">
    @csrf
    @method('DELETE')
    <!-- <button type="submit" class="btn btn-danger">
        {{ ('Delete') }}
    </button> -->
    @component('components.btn-del')
             @slot('table', 'users')
             @slot('id', $user->id)
    @endcomponent
</form>