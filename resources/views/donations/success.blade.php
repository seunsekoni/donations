@extends('main')
@section('content')

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="brown">
        <p>Dear {{ auth()->user()->lastname }} {{ auth()->user()->name }}, your donation is SUCCESSFUL! 
          Please follow the instruction below to generate your receipt. 
        </p>
      </div>
    <div class="white">
      <p>STEP 1</p>
      <p style>
        Log into your email and click on inbox. Click on the mail from act!onaid
      </p><br><br>
      <p>STEP 2</p>
      <p>Click on print receipt</p><br><br>
      <p align="center" class="red">Thank you for donating</p>
    </div>
  </div>

@endsection