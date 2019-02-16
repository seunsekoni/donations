@extends('main')
@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <table class="table table-striped">
        <thead>
          <th>SN</th>
          <th>DONATION CATEGORY</th>
          <th>DATE</th>
          <th>AMOUNT</th>
        </thead>
          <tbody>
            @foreach($user->donations as $donation)
            <tr>
              <td>{{ $donation->id }}</td>
              <td>{{ $donation->category_name }}</td>
              <td>{{ date("d-M-Y ", strtotime($donation->created_at)) }}</td>
              <td>NGN {{ $donation->showPrice() }}</td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>

@endsection