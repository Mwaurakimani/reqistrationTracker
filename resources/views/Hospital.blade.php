@extends('layouts.mylayouts.app',[
    'cssName'=>'css/compiled/Hospital.css'
])


@section('content')
    <x-my-nav :heading="$heading">
    </x-my-nav>

    <x-sub-nav>
    </x-sub-nav>

    <form class="filter_bar">
        <h5>Hospital Records</h5>
        <div class="button_field">
            <button type="submit" form="Search_Item" value="submit">Filters By:</button>
        </div>
    </form>



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
                    <th scope="col">Date Registered</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>03-03-1990</td>
                    <td>Nairobi</td>
                    <td>
                        <div class="icon_holder">
                            <img src="favicon.ico" alt="">
                        </div>
                        <div class="icon_holder">
                            <img src="favicon.ico" alt="">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>03-03-1990</td>
                    <td>Nairobi</td>
                    <td>
                        <div class="icon_holder">
                            <img src="favicon.ico" alt="">
                        </div>
                        <div class="icon_holder">
                            <img src="favicon.ico" alt="">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>03-03-1990</td>
                    <td>Nairobi</td>
                    <td>
                        <div class="icon_holder">
                            <img src="favicon.ico" alt="">
                        </div>
                        <div class="icon_holder">
                            <img src="favicon.ico" alt="">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>03-03-1990</td>
                    <td>Nairobi</td>
                    <td>
                        <div class="icon_holder">
                            <img src="favicon.ico" alt="">
                        </div>
                        <div class="icon_holder">
                            <img src="favicon.ico" alt="">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- <div class="section2">

        </div> -->
    </div>
@endsection
