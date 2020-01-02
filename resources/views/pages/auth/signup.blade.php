@extends('layouts.app')

@section('content')
    <div class="tcontainer tpy-8">

        <h1 class="tfont-medium tmb-4 tmt-2 ttext-primary ttext-xl">CREATE AN ACCOUNT</h1>

        <div class="tbg-white md:tp-8 tpx-5 tpy-8  tmb-10 tborder-primary tborder-t-4">
            <form class="" action="javascript:void(0)">
                <h2 class="ttext-gray-700 ttext-xl tmb-4 ttext-gray-500">PERSONAL INFORMATION</h2>
                <div class="row tmb-0">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row tmb-0">
                    <div class="input-field col s12 m6">
                        <input id="email" type="text" class="validate">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="contact_number" type="text" class="validate">
                        <label for="contact_number">Contact Number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="password" type="text" class="validate">
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="password_confirmation" type="password" class="validate">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>
                </div>
                <div class="tflex tjustify-between titems-center tpx-2">
                    <div class="hover:tunderline tcursor-pointer ttext-primary ttext-md">«  Back</div>
                    <button class="tbg-primary focus:tbg-primary waves-effect tpx-5 tpt-2 tpb-3 ttext-white">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection