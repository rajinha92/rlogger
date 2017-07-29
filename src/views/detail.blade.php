<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>RLogger</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div>
        <h2>{{$log->id}}</h2>
        <h3>{{$log->message}} on file {{$log->file??''}} on line {{$log->line??''}}</h3>
        <p>{!! str_replace('#', '<br>', $log->stacktrace)!!}</p>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <th>COLUMN</th>
            <th>VALUE</th>
            </thead>
            <tbody>
            <tr>
                <td>USER_ID</td>
                <td>{{$log->user_id??''}}</td>
            </tr>
            <tr>
                <td>HTTP_CODE</td>
                <td>{{$log->http_code??''}}</td>
            </tr>
            <tr>
                <td>USER_AGENT</td>
                <td>{{$log->user_agent??''}}</td>
            </tr>
            <tr>
                <td>URL</td>
                <td>{{$log->url}}</td>
            </tr>
            <tr>
                <td>EXCEPTION_TYPE</td>
                <td>{{$log->exception_type}}</td>
            </tr>
            <tr>
                <td>TRACE_JSON</td>
                <td>
                    <code>
                        {{$log->trace_json}}
                    </code>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>