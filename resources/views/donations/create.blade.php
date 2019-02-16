@extends('main')
@section('content')

  <div class="row">
    <div class="col-md-4 col-md-offset-4 brown">
      <p>
      Note: Give Monthly sets up for you ‘Regular Giving’: a recurring Monthly debit on your payment-card as sign-on to Action Aids’s Social Justice support to the Rights of : Women & safe city, child & Girl’s to Education. Psychosocial support to displaced victims of insurgences Relief in emergencies and Building resilience of rural communities
<br><br>  While: Give Once is a ‘One-off’ Donation
      </p>
      <div class="donate">
        <form action="{{ url('/pay') }}" method="post">
        @csrf
          <label for="monthly" id="monthly">Give Monthly</label>
          <input type="radio" name="category" id="monthly" value="Give Monthly" required>

          <input type="radio" name="category" id="once" style="margin-left: 130px;" value="Give Once">
          <label for="once" id="once" ">Give Once</label>

          <p class="red" align="center">Pick an amount below</p>
            <div class="form-group">
              <label for="twok" id="twok" style="margin-left: 50px;">NGN2,000</label>
              <input type="radio" name="amount" id="twok" value="200000" required>
  
              <input type="radio" name="amount" id="threek" style="margin-left: 50px;" value="300000">
              <label for="threek" id="threek">NGN3,000</label>
  
              <label for="fivek" id="fivek" style="margin-left: 50px;">NGN5,000</label>
              <input type="radio" name="amount" id="fivek" value="500000">
  
              <input type="radio" name="amount" value="1000000" id="tenk" style="margin-left: 50px;">
              <label for="tenk" id="tenk">NGN10,000</label>
            </div>

          <input type="hidden" name="metadata" value="{{ request()->category }}" >
          <div class="form-group">
            <input type="submit" value="Donate" class="btn btn-danger" style="margin-left: 40%">
          
          </div>
        
        </form>

      </div>
    </div>
  </div>

@endsection