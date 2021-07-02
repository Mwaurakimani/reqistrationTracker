@extends('layouts.guest')

@section('content')
    <nav>
        <p>Sign In</p>
    </nav>

    <h3>Online Birth Notification System</h3>

    <div class="form_holder">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" :value="old('email')" required autofocus >
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div
                        style="
                        color: red;
                        font-size: 0.8em;
"
                    >{{$error}}</div>
                @endforeach
            @endif
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input id="password" type="password" class="form-control" placeholder="Password" name="password"
                       required autocomplete="current-password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
