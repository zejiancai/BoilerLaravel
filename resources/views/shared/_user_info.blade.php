<a href="{{ route('users.show', $user->id) }}">
  <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h1>{{ $user->name }}</h1>
<h1>
<a class="btn btn-lg btn-success" href="{{ route('index') }}" role="button">进入后台</a>
</h1>