<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>RLogger</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<h1>
    RLOGGER
    <small>{{\Carbon\Carbon::now()}}</small>
</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>HTTP_CODE</th>
        <th>EXCEPTION_TYPE</th>
        <th>MESSAGE</th>
        <th>USER_ID</th>
        <th>CREATED_AT</th>
        <th></th>
        </thead>
        <tbody>
        @foreach ($logs as $log)
            <tr>
                <td>{{$log->id}}</td>
                <td>{{$log->http_code??''}}</td>
                <td>{{$log->exception_type}}</td>
                <td>{{$log->message}}</td>
                <td>{{$log->user_id??''}}</td>
                <td>{{$log->created_at}}</td>
                <td>
                    <a href="/rlogger/{{$log->id}}">details</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

{{ $logs->links() }}
</body>
</html>