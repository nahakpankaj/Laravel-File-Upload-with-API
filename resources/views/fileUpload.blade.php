<!doctype html>
<html lang="en">

<head>
    <title>File Upload</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>FileUpload here</h1>
            </div>
            <div class="panel-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">*</button>
                        {{ $message }}
                    </div>
                    <img src="uploads/{{ Session::get('file') }}">
                @endif
                @if (is_countable($errors) && count($errors) > 1)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Some Problem Occurs.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" name="file" class="form-control">
                        </div><bR><br>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
