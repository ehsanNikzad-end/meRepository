<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
    <meta http-equiv="pragma" content="no-cache" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/cssformat.css') }}">
    {{-- <link rel="icon" type="image/ico" href="favicon.ico"> --}}
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>Course_name</title>
    <style>
    </style>
</head>
<body>
    <div class="container">
        <ul class="nav mb-5 mt-3 justify-content-center">
            <li class="nav-item">
                <a class="nav-link bg-primary text-white mr-3 rounded" href="/AddStudentPage">Add a New Student</a>
            </li>
            <li class="nav-item">
                <a class="active nav-link bg-primary text-white mr-3 rounded" href="AddClassPage">Add a New Class</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-info text-white mr-3 rounded" href="ShowClass">Classes List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-info text-white mr-3 rounded" href="ShowStudent">Students List</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-danger text-white mr-3 rounded" href="RegisterStudentPage">Register a New Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-success text-white mr-3 rounded" href="ShowRegisteredStudent">show Registered_students</a>
            </li>
        </ul>
    </div>
        <div>
            {{ $slot }}
        </div>
    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap/jQuery 3.7.1 slim build.js') }}"></script>
</body>
</html>
