@extends('layouts.frontapp')
@section('content')
    <div id="form_container">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <div id="left_form">
                    <figure>
                        <img src="frontend/img/info_graphic_1.png" alt="" width="140" height="100">
                    </figure>
                    <h2>MHAD <br><br><span>Patient SignIn</span></h2>
                    <a href="{{config('app.url')}}/" class="btn_1 rounded yellow">Home</a>
                    <a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div id="wizard_container2">
                    {!! Form::open(['url' => '/patientSignIn', 'method'=>'POST']) !!}
                        <h3>Patient SignIn</h3>
                        <div class="step">
                            <h3 class="main_question"><i class="arrow_right"></i>Please SignIn to your account</h3>
                            <div class="form-group">
                                <p>&nbsp;</p>
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Email Address</label>
                                <input type="email" name="emailAddress" id="emailAddress" required class="form-control required" onchange="getVals(this, 'email_field');">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" required class="form-control required" onchange="getVals(this, 'email_field');">
                            </div>
                            <div class="form-group">
                                    <a href="{{config('app.url')}}/patientReset">Reset Password</a>
                                        &nbsp;<p>&nbsp;</p>
                                </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    <div class="form-group">
                                        <input type="submit" name="SignIn" value="SignIn" class="btn_1"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    &nbsp;<p>&nbsp;</p>
                            </div>
                        </div>
                        <!-- /bottom-wizard -->
                    {!! Form::close() !!}
                    <!--/form -->
                </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->
@endsection    