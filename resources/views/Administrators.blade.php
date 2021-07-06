@extends('layouts.mylayouts.app',[
    'cssName'=>'css/compiled/Admin.css'
])

@section('content')
    <x-my-nav :heading="$heading">
    </x-my-nav>

    <x-sub-nav>
    </x-sub-nav>

    <form class="filter_bar">
        <h5>Administrators Records</h5>
        <div class="button_field">
            <button type="submit" form="Search_Item" value="submit">Filters By:</button>
        </div>
        <div class="button_field">
            <a href="/Administrators/create" >Add New</a>
        </div>
    </form>


    @empty($user)
        <div class="body_layout">
            <div class="section1 hospital_table">
                <div class="table_filters">
                    <form id="Search_Item" action="#">
                        <table class="table table-striped table-hover">
                            <thead class="table">
                            <tr>
                                <th scope="col">

                                </th>
                                <th scope="col">
                                    <input class="form-control form-control-sm" type="text" placeholder="ID">
                                </th>
                                <th scope="col">
                                    <input class="form-control form-control-sm" type="text" placeholder="Name">
                                </th>
                                <th scope="col">
                                    <input class="form-control form-control-sm" type="text" placeholder="Role">
                                </th>
                                <th scope="col">
                                    <input class="form-control form-control-sm" type="date" placeholder="Date registered">
                                </th>
                                <th scope="col">
                                </th>
                            </tr>
                            </thead>
                        </table>
                    </form>
                </div>

                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Region</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                    $count = 1;
                    @endphp
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$count}}</th>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->Role}}</td>
                            <td>Nairobi</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                <div class="icon_holder">
                                    <a href="/Administrators/{{$user->id}}" ><img src="{{asset('storage/view.png')}}" alt="view image"></a>
                                </div>
                                <div class="icon_holder">
                                    <img src="{{asset('storage/delete.png')}}" alt="delete image">
                                </div>
                            </td>
                        </tr>
                        @php
                        $count++
                        @endphp
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- <div class="section2">

            </div> -->
        </div>
    @else
    <p
        style="
        text-align: center;
        font-size: 2em;
    "
    >No records were found</p>
    @endempty
@endsection
