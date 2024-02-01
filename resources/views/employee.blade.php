@extends('layouts.account')
@section('content')

  <title>Employee Information</title>
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
    <h2 class="my-4">Employee Information</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Employee ID</th>
          <th scope="col">Name</th>
          <th scope="col">Position</th>
          <th scope="col">Department</th>
          <th scope="col">Salary ($)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>John Doe</td>
          <td>Software Developer</td>
          <td>IT</td>
          <td>80000</td>
        </tr>
        <tr>
          <td>002</td>
          <td>Jane Smith</td>
          <td>Marketing Specialist</td>
          <td>Marketing</td>
          <td>70000</td>
        </tr>
        <tr>
          <td>003</td>
          <td>Michael Johnson</td>
          <td>HR Manager</td>
          <td>Human Resources</td>
          <td>90000</td>
        </tr>
        <!-- Add more rows as needed -->
        <tr>
          <td>004</td>
          <td>Alice Brown</td>
          <td>Financial Analyst</td>
          <td>Finance</td>
          <td>85000</td>
        </tr>
        <tr>
          <td>005</td>
          <td>Robert White</td>
          <td>Project Manager</td>
          <td>Project Management</td>
          <td>95000</td>
        </tr>
        <tr>
          <td>006</td>
          <td>Emily Davis</td>
          <td>Customer Support Representative</td>
          <td>Customer Support</td>
          <td>60000</td>
        </tr>
        <tr>
          <td>007</td>
          <td>David Wilson</td>
          <td>Operations Director</td>
          <td>Operations</td>
          <td>100000</td>
        </tr>
        <tr>
          <td>008</td>
          <td>Sophia Miller</td>
          <td>Quality Assurance Analyst</td>
          <td>QA</td>
          <td>75000</td>
        </tr>
        <tr>
          <td>009</td>
          <td>Nathan Turner</td>
          <td>Graphic Designer</td>
          <td>Design</td>
          <td>68000</td>
        </tr>
        <tr>
          <td>010</td>
          <td>Olivia Taylor</td>
          <td>Sales Representative</td>
          <td>Sales</td>
          <td>80000</td>
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