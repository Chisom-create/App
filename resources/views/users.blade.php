@extends('layouts.account')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Page</title>
    <style>
        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .username {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Username</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><img src="{{ asset('import/assets/img/user/u1.jpg')}}" alt="avatar" class="avatar"></td>
                    <td class="username">John Doe</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><img src="{{ asset('import/assets/img/user/u-xl-10.jpg')}}" alt="avatar" class="avatar"></td>
                    <td class="username">Jane Doe</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><img src="{{ asset('import/assets/img/user/u-xl-12.jpg')}}" alt="avatar" class="avatar"></td>
                    <td class="username">Braton Ramonde</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><img src="{{ asset('import/assets/img/user/u8.jpg')}}" alt="avatar" class="avatar"></td>
                    <td class="username">Mark Doe</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td><img src="{{ asset('import/assets/img/user/u7.jpg')}}" alt="avatar" class="avatar"></td>
                    <td class="username">Cratino Hover</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td><img src="{{ asset('import/assets/img/user/u5.jpg')}}" alt="avatar" class="avatar"></td>
                    <td class="username">Climaxs Clade</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td><img src="{{ asset('import/assets/img/user/u6.jpg')}}" alt="avatar" class="avatar"></td>
                    <td class="username">Cliton Rave</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td><img src="{{ asset('import/assets/img/user/u4.jpg')}}" alt="avatar" class="avatar"></td>
                    <td class="username">Anne Brat</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td><img src="{{ asset('import/assets/img/user/u2.jpg')}}" alt="avatar" class="avatar"></td>
                    <td class="username">James Bond</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td><img src="{{ asset('import/assets/img/user/u3.jpg')}}" alt="avatar" class="avatar"></td>
                    <td class="username">John Doe</td>
                </tr>
                <!-- Add more rows for more users -->
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

@endsection