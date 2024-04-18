<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Users page</title>
    </head>
    <body>
        <h2 style="text-align: center;margin-top: 30px">Users management page</h2>
        <div style="display: grid;place-items: center;margin-top: 25px">
            <form action="/users" method="post"  style="width: 50%">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value={{ old('name') }}>
                </div>
                @if($errors->has('name'))
                    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                @endif

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value={{ old('email') }}>
                </div>
                @if($errors->has('email'))
                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                @endif

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message">{{ old('message') }}</textarea>
                </div>
                @if($errors->has('message'))
                    <div class="alert alert-danger">{{ $errors->first('message') }}</div>
                @endif

                <button type="submit" class="btn btn-primary">Save</button>
            </form>

            @if(count($users) > 0)
                <table style="margin-top: 25px;width: 50%" class="table table-bordered table-hover table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Create date</th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->message }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </body>
</html>
