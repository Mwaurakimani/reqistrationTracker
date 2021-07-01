@extends('layouts.mylayouts.app',[
    'cssName'=>'css/compiled/Entries.css'
])


@section('content')
    <x-my-nav :heading="$heading">
    </x-my-nav>

    <x-sub-nav>
    </x-sub-nav>
    <div class="action_bar">
        <button type="submit" form="birthEntry" value="submit">Create</button>
        <button type="submit" form="birthEntry" value="submit" style="background-color: rgb(235, 151, 41);">Update</button>
        <button type="submit" form="birthEntry" value="submit" style="background-color: rgb(248, 78, 78);">Delete</button>
    </div>

    <div class="entries_form">
        <form action="#" id="birthEntry">
            <div class="sub_form_1">
                <h4>Record Details</h4>
                <div class="input_elem_holder grid-elem-3">
                    <h6>Child</h6>
                    <div class="form-group">
                        <label for="formGroupExampleInput">First Name</label>
                        <input type="text" class="form-control" name="childFirstName">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Middle Name</label>
                        <input type="text" class="form-control" name="childMiddleName">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Last Name</label>
                        <input type="text" class="form-control" name="childLastName">
                    </div>
                </div>
                <div class="input_elem_holder grid-elem-3">
                    <h6>Mother</h6>
                    <div class="form-group">
                        <label for="formGroupExampleInput">First Name</label>
                        <input type="text" class="form-control" name="childFirstName">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Middle Name</label>
                        <input type="text" class="form-control" name="childMiddleName">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Last Name</label>
                        <input type="text" class="form-control" name="childLastName">
                    </div>
                </div>
                <div class="input_elem_holder grid-elem-3">
                    <h6>Father</h6>
                    <div class="form-group">
                        <label for="formGroupExampleInput">First Name</label>
                        <input type="text" class="form-control" name="childFirstName">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Middle Name</label>
                        <input type="text" class="form-control" name="childMiddleName">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Last Name</label>
                        <input type="text" class="form-control" name="childLastName">
                    </div>
                </div>
                <div class="input_elem_holder grid-elem-2">
                    <div class="form-group">
                        <label for="formGroupExampleInput">D.O.B </label>
                        <input type="text" class="form-control" name="childFirstName">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Sex</label>
                        <input type="text" class="form-control" name="childMiddleName">
                    </div>
                </div>
                <div class="input_elem_holder grid-elem-2">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Type Of Birth </label>
                        <input type="text" class="form-control" name="childFirstName">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Other (Specify)</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="input_elem_holder">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Place of Birth</label>
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
            </div>
        </form>
    </div>
@endsection
