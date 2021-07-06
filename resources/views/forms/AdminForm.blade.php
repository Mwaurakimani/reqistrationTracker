@extends('layouts.mylayouts.app',[
    'cssName'=>'css/compiled/Entries.css'
])



@section('content')
    <x-my-nav :heading="$heading">
    </x-my-nav>

    <x-sub-nav>
    </x-sub-nav>
    <div class="action_bar">
        @empty($user)
            <button type="submit" form="birthEntry" value="submit" style="background-color: rgb(41,235,51);">Create
            </button>

        @else
            <button type="submit" form="birthEntry" value="submit" style="background-color: rgb(235, 151, 41);">Update
            </button>
            <button type="submit" form="birthEntry" value="submit" style="background-color: rgb(248, 78, 78);">Delete
            </button>
        @endempty

    </div>

    <div class="entries_form">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div
                    style="
                    background-color: #e98888;
                    color: #eeebeb;
                    font-size: 0.8em;
                    height: 20px;
                    color: white;
                    padding-left: 20px;
                    margin: 10px 0px;
                    border-radius: 5px;
"
                >{{$error}}</div>
            @endforeach
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success"

            >{{ session('success') }}</div>
        @endif

        @empty($user)

            <form action="/Administrators/create" id="birthEntry" method="POST">
                @csrf
        @else
            <form action="#" id="birthEntry" method="POST">
                @csrf
                @method('PUT')
        @endempty
                <div class="sub_form_1">
                    <h4>Record Details</h4>
                    <div class="input_elem_holder grid-elem-2">
                        <div class="form-group">
                            <label for="formGroupExampleInput">First Name</label>
                            <input type="text" class="form-control" name="firstName"
                                   value="{{ $user ? $user->firstName : "" }}">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Last Name</label>
                            <input type="text" class="form-control" name="lastName"
                                   value=" {{$user ?  $user->lastName : "" }}">
                        </div>
                    </div>
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input type="text" class="form-control" name="email"
                                   value=" {{$user ?  $user->email : "" }}">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Role</label>
                            <input type="text" class="form-control" name="Role"
                                   value="{{$user ? $user->Role : "" }}">
                        </div>
                    </div>
                </div>
                <div class="sub_form_2">
                    <h4>Sub Details</h4>

                    @unless(!$user)
                        <div class="input_elem_holder">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Date Created</label>
                                <input type="text" class="form-control" name="created_at"
                                       value="{{$user ?  $user->created_at : "" }}">
                            </div>
                        </div>
                        <div class="input_elem_holder">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Date Modified</label>
                                <input type="text" class="form-control" name="updated_at"
                                       value="{{$user ?  $user->updated_at : "" }}">
                            </div>
                        </div>
                    @endunless
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Registered hospital</label>
                            <input type="text" class="form-control" name="hospital">
                        </div>
                    </div>
                </div>
            </form>

    </div>
@endsection
