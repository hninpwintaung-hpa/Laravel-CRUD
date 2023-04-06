<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="mt-5">

            <table class="table mt-3">
                <thead>
                    <tr class="table-primary">
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->description }}</td>
                        @if ($data->isActive == true)
                            <td>Active</td>
                        @else
                            <td>Not Active</td>
                        @endif
                        <td>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.min.bundle.js') }}"></script>
</body>

</html>
