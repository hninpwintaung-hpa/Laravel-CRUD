<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="mt-5">
            <h3>POSTS</h3>
            <a href="{{ route('posts.create') }}" class="btn btn-primary mt-3">Add New</a>
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
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->description }}</td>
                            @if ($row->isActive == true)
                                <td class="text-success">Active</td>
                            @else
                                <td class="text-danger">Not Active</td>
                            @endif
                            <td>
                                <a href="{{ route('posts.show', $row->id) }}" class="btn btn-secondary">View</a>
                                <a href="{{ route('posts.edit', $row->id) }}" class="btn btn-primary">Edit</a>

                                <button class="btn text-danger" onclick="openModal('id{{ $row->id }}')">
                                    Delete
                                </button>

                                <div id="id{{ $row->id }}" class="modal">
                                    <div class="modal_content">
                                        <form method="POST" action="{{ route('posts.destroy', $row->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <div class="closebtn text-danger"
                                                onclick="closeModal('id{{ $row->id }}')">
                                                &times;
                                            </div>
                                            <h2>Are you sure?</h2>
                                            <p>
                                                Do you really want to delete {{ $row->description }}?.
                                                This process cannot be undone.
                                            </p>
                                            <div class="modalfooter">
                                                <div class="btn btn-secondary"
                                                    onclick="closeModal('id{{ $row->id }}')">
                                                    Cancle
                                                </div>
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.min.bundle.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>

</body>

</html>
