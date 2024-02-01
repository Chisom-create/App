@extends('layouts.account')
@section('content')
  <title>Revenue Report</title>
  <!-- Bootstrap CSS link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    /* Add custom styles here */
    body {
      margin: 20px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2 class="my-4">Revenue Report</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Month</th>
          <th scope="col">Revenue ($)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">January</th>
          <td>10000</td>
        </tr>
        <tr>
          <th scope="row">February</th>
          <td>12000</td>
        </tr>
        <tr>
          <th scope="row">March</th>
          <td>15000</td>
        </tr>
        <!-- Add more rows as needed -->
        <tr>
          <th scope="row">April</th>
          <td>11000</td>
        </tr>
        <tr>
          <th scope="row">May</th>
          <td>13000</td>
        </tr>
        <tr>
          <th scope="row">June</th>
          <td>16000</td>
        </tr>
        <tr>
          <th scope="row">July</th>
          <td>18000</td>
        </tr>
        <tr>
          <th scope="row">August</th>
          <td>20000</td>
        </tr>
        <tr>
          <th scope="row">September</th>
          <td>17000</td>
        </tr>
        <tr>
          <th scope="row">October</th>
          <td>19000</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JS scripts (optional, if needed) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>


@endsection