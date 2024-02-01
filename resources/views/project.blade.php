@extends('layouts.account')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Information</title>
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
    <h2 class="my-4">Project Information</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Project ID</th>
          <th scope="col">Project Name</th>
          <th scope="col">Client</th>
          <th scope="col">Start Date</th>
          <th scope="col">End Date</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>Website Redesign</td>
          <td>ABC Corporation</td>
          <td>2023-01-15</td>
          <td>2023-04-15</td>
          <td>In Progress</td>
        </tr>
        <tr>
          <td>002</td>
          <td>Marketing Campaign</td>
          <td>XYZ Ltd.</td>
          <td>2023-02-10</td>
          <td>2023-05-10</td>
          <td>Completed</td>
        </tr>
        <tr>
          <td>003</td>
          <td>Mobile App Development</td>
          <td>123 Industries</td>
          <td>2023-03-05</td>
          <td>2023-06-05</td>
          <td>Not Started</td>
        </tr>
        <!-- Add more rows as needed -->
        <tr>
          <td>004</td>
          <td>Product Launch</td>
          <td>Tech Solutions Inc.</td>
          <td>2023-04-20</td>
          <td>2023-07-20</td>
          <td>On Hold</td>
        </tr>
        <tr>
          <td>005</td>
          <td>UI/UX Improvement</td>
          <td>Design Studio Co.</td>
          <td>2023-05-15</td>
          <td>2023-08-15</td>
          <td>In Progress</td>
        </tr>
        <tr>
          <td>006</td>
          <td>Global Expansion</td>
          <td>Global Services Ltd.</td>
          <td>2023-06-10</td>
          <td>2023-09-10</td>
          <td>Not Started</td>
        </tr>
        <tr>
          <td>007</td>
          <td>Quality Assurance</td>
          <td>Quality Products LLC</td>
          <td>2023-07-05</td>
          <td>2023-10-05</td>
          <td>Completed</td>
        </tr>
        <tr>
          <td>008</td>
          <td>Innovate Solutions Platform</td>
          <td>Innovate Solutions</td>
          <td>2023-08-20</td>
          <td>2023-11-20</td>
          <td>In Progress</td>
        </tr>
        <tr>
          <td>009</td>
          <td>Creative Minds Website</td>
          <td>Creative Minds Co.</td>
          <td>2023-09-15</td>
          <td>2023-12-15</td>
          <td>Not Started</td>
        </tr>
        <tr>
          <td>010</td>
          <td>Global Ventures CRM</td>
          <td>Global Ventures Inc.</td>
          <td>2023-10-10</td>
          <td>2024-01-10</td>
          <td>On Hold</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JS scripts (optional, if needed) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

@endsection