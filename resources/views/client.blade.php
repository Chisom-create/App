@extends('layouts.account')
@section('content')
  <!-- <title>Client Information</title>
  <! Bootstrap CSS link -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style> -->
    <!-- /* Add custom styles here */
    /* body {
      margin: 20px;
    } -->
  <!-- </style> */ -->
<!-- </head>  -->
<body>

  <div class="container">
    <h2 class="my-4">Client Information</h2>
    <div class="card-body">
      <a href="{{ url('/client/clientt') }}" class="btn btn-primary btn-sm" title="Add New Client">
      Add New
      </a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Client ID</th>
          <th scope="col">Company Name</th>
          <th scope="col">Contact Person</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>ABC Corporation</td>
          <td>John Smith</td>
          <td>john@abc.com</td>
          <td>(555) 123-4567</td>
          <td>
            <a href="" title= "VIew Client"><button class="btn btn-info btn-sm"><i class ="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="" title= "Edit Client"><button class="btn btn-success btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            <a href="" title= "Delete Client"><button class="btn btn-danger btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
          </td>
        </tr>
        <tr>
          <td>002</td>
          <td>XYZ Ltd.</td>
          <td>Jane Doe</td>
          <td>jane@xyz.com</td>
          <td>(555) 987-6543</td>
          <td>
            <a href="" title= "VIew Client"><button class="btn btn-info btn-sm"><i class ="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="" title= "Edit Client"><button class="btn btn-success btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            <a href="" title= "Delete Client"><button class="btn btn-danger btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
          </td>
        </tr>
        <tr>
          <td>003</td>
          <td>123 Industries</td>
          <td>Michael Johnson</td>
          <td>michael@123.com</td>
          <td>(555) 567-8901</td>
          <td>
            <a href="" title= "VIew Client"><button class="btn btn-info btn-sm"><i class ="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="" title= "Edit Client"><button class="btn btn-success btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            <a href="" title= "Delete Client"><button class="btn btn-danger btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
          </td>
        </tr>
        <!-- Add more rows as needed -->
        <tr>
          <td>004</td>
          <td>Tech Solutions Inc.</td>
          <td>Alice Brown</td>
          <td>alice@tech.com</td>
          <td>(555) 234-5678</td>
          <td>
            <a href="" title= "VIew Client"><button class="btn btn-info btn-sm"><i class ="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="" title= "Edit Client"><button class="btn btn-success btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            <a href="" title= "Delete Client"><button class="btn btn-danger btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
          </td>
        </tr>
        <tr>
          <td>005</td>
          <td>Design Studio Co.</td>
          <td>Robert White</td>
          <td>robert@design.com</td>
          <td>(555) 789-0123</td>
          <td>
            <a href="" title= "VIew Client"><button class="btn btn-info btn-sm"><i class ="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="" title= "Edit Client"><button class="btn btn-success btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            <a href="" title= "Delete Client"><button class="btn btn-danger btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
          </td>
        </tr>
        <tr>
          <td>006</td>
          <td>Global Services Ltd.</td>
          <td>Emily Davis</td>
          <td>emily@global.com</td>
          <td>(555) 456-7890</td>
          <td>
            <a href="" title= "VIew Client"><button class="btn btn-info btn-sm"><i class ="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="" title= "Edit Client"><button class="btn btn-success btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            <a href="" title= "Delete Client"><button class="btn btn-danger btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
          </td>
        </tr>
        <tr>
          <td>007</td>
          <td>Quality Products LLC</td>
          <td>David Wilson</td>
          <td>david@quality.com</td>
          <td>(555) 678-9012</td>
          <td>
            <a href="" title= "VIew Client"><button class="btn btn-info btn-sm"><i class ="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="" title= "Edit Client"><button class="btn btn-success btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            <a href="" title= "Delete Client"><button class="btn btn-danger btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
          </td>
        </tr>
        <tr>
          <td>008</td>
          <td>Innovate Solutions</td>
          <td>Sophia Miller</td>
          <td>sophia@innovate.com</td>
          <td>(555) 345-6789</td>
          <td>
            <a href="" title= "VIew Client"><button class="btn btn-info btn-sm"><i class ="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="" title= "Edit Client"><button class="btn btn-success btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            <a href="" title= "Delete Client"><button class="btn btn-danger btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
          </td>
        </tr>
        <tr>
          <td>009</td>
          <td>Creative Minds Co.</td>
          <td>Nathan Turner</td>
          <td>nathan@creative.com</td>
          <td>(555) 901-2345</td>
          <td>
            <a href="" title= "VIew Client"><button class="btn btn-info btn-sm"><i class ="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="" title= "Edit Client"><button class="btn btn-success btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            <a href="" title= "Delete Client"><button class="btn btn-danger btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
          </td>
        </tr>
        <tr>
          <td>010</td>
          <td>Global Ventures Inc.</td>
          <td>Olivia Taylor</td>
          <td>olivia@global.com</td>
          <td>(555) 123-4567</td>
          <td>
            <a href="" title= "VIew Client"><button class="btn btn-info btn-sm"><i class ="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="" title= "Edit Client"><button class="btn btn-success btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            <a href="" title= "Delete Client"><button class="btn btn-danger btn-sm"><i class ="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
          </td>
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
