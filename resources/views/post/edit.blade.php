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
        <div class="row mt-5">
            <div class="col-6 m-auto">
                <h3>EDIT</h3>
                <form method="POST" action="{{ route('posts.update', $data->id) }}">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control" name="description">
                            {{ $data->description }}
                        </textarea>
                    </div>

                    <div class="form-group mt-2">
                        @if ($data->isActive == true)
                            <input class="form-check-input" type="checkbox" value="1" name="isActive" checked>
                        @else
                            <input class="form-check-input" type="checkbox" value="0" name="isActive">
                        @endif
                        <label class="form-check-label">
                            Active
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.min.bundle.js') }}"></script>
</body>

</html>
