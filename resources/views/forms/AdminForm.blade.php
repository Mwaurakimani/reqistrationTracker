@extends('layouts.mylayouts.app',[
    'cssName'=>'css/compiled/Entries.css'
])



@section('content')
    <x-my-nav :heading="$heading">
    </x-my-nav>

    <x-sub-nav>
    </x-sub-nav>
    <div class="action_bar">
        <button type="submit" form="birthEntry" value="submit" style="background-color: rgb(235, 151, 41);">Update</button>
        <button type="submit" form="birthEntry" value="submit" style="background-color: rgb(248, 78, 78);">Delete</button>
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
                <div class="alert alert-info"

                >{{ session('success') }}</div>
            @endif

        @empty($user)

            <form action="#" id="birthEntry" method="POST">
                @csrf
                @method('PUT')
                <div class="sub_form_1">
                    <h4>Record Details</h4>
                    <div class="input_elem_holder grid-elem-2">
                        <div class="form-group">
                            <label for="formGroupExampleInput">First Name</label>
                            <input type="text" class="form-control" name="firstName" value="{{old('firstName')}}">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Last Name</label>
                            <input type="text" class="form-control" name="childMiddleName">
                        </div>
                    </div>
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input type="text" class="form-control" name="childFirstName">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Password</label>
                            <input type="text" class="form-control" name="childFirstName">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Role</label>
                            <input type="text" class="form-control" name="childFirstName">
                        </div>
                    </div>
                </div>
                <div class="sub_form_2">
                    <h4>Sub Details</h4>
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Date Created</label>
                            <input type="text" class="form-control" name="childFirstName">
                        </div>
                    </div>
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Date Modified</label>
                            <input type="text" class="form-control" name="childFirstName">
                        </div>
                    </div>
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Created By</label>
                            <input type="text" class="form-control" name="childFirstName">
                        </div>
                    </div>
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Modified By</label>
                            <input type="text" class="form-control" name="childFirstName">
                        </div>
                    </div>
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Registered hospital</label>
                            <input type="text" class="form-control" name="childFirstName">
                        </div>
                    </div>
                </div>
            </form>
        @else
            <form action="#" id="birthEntry" method="POST">
                @csrf
                @method('PUT')
                <div class="sub_form_1">
                    <h4>Record Details</h4>
                    <div class="input_elem_holder grid-elem-2">
                        <div class="form-group">
                            <label for="formGroupExampleInput">First Name</label>
                            <input type="text" class="form-control" name="firstName" value="{{$user->firstName}}">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Last Name</label>
                            <input type="text" class="form-control" name="lastName" value=" {{$user->lastName}}">
                        </div>
                    </div>
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input type="text" class="form-control" name="email" value=" {{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Role</label>
                            <input type="text" class="form-control" name="Role" value="{{$user->Role}}">
                        </div>
                    </div>
                </div>
                <div class="sub_form_2">
                    <h4>Sub Details</h4>
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Date Created</label>
                            <input type="text" class="form-control" name="created_at" value="{{$user->created_at}}">
                        </div>
                    </div>
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Date Modified</label>
                            <input type="text" class="form-control" name="updated_at" value="{{$user->updated_at}}">
                        </div>
                    </div>
                    <div class="input_elem_holder">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Registered hospital</label>
                            <input type="text" class="form-control" name="hospital">
                        </div>
                    </div>
                </div>
            </form>
        @endempty
    </div>
@endsection
