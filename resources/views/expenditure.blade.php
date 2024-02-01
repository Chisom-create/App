@extends('layouts.account')
@section('content')
  <title>Expenditure Report</title>
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
    <h2 class="my-4">Expenditure Report</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Category</th>
          <th scope="col">Description</th>
          <th scope="col">Amount ($)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2023-01-01</td>
          <td>Office Supplies</td>
          <td>Purchase of pens, notebooks, etc.</td>
          <td>150</td>
        </tr>
        <tr>
          <td>2023-02-05</td>
          <td>Utilities</td>
          <td>Electricity bill</td>
          <td>200</td>
        </tr>
        <tr>
          <td>2023-03-10</td>
          <td>Marketing</td>
          <td>Advertisement campaign</td>
          <td>500</td>
        </tr>
        <!-- Add more rows as needed -->
        <tr>
          <td>2023-04-15</td>
          <td>Travel</td>
          <td>Business trip expenses</td>
          <td>800</td>
        </tr>
        <tr>
          <td>2023-05-20</td>
          <td>Software</td>
          <td>License renewal</td>
          <td>300</td>
        </tr>
        <tr>
          <td>2023-06-25</td>
          <td>Rent</td>
          <td>Office space rent</td>
          <td>1000</td>
        </tr>
        <tr>
          <td>2023-07-30</td>
          <td>Insurance</td>
          <td>Health insurance premium</td>
          <td>250</td>
        </tr>
        <tr>
          <td>2023-08-05</td>
          <td>Maintenance</td>
          <td>Equipment maintenance</td>
          <td>180</td>
        </tr>
        <tr>
          <td>2023-09-10</td>
          <td>Training</td>
          <td>Employee training program</td>
          <td>600</td>
        </tr>
        <tr>
          <td>2023-10-15</td>
          <td>Consulting</td>
          <td>Consultant fees</td>
          <td>700</td>
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
