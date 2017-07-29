<?php


Route::get('/rlogger', function (\Illuminate\Http\Request $request) {
    $user = config('rlogger.rlogger_authorized_user_id');

    if (is_array($user)) {
        if (!in_array($request->user()->id, $user))
            abort(403);
    } else {
        if (!$request->user()->id == $user)
            abort(403);
    }

    $logs = \RLogger\Models\RLogger::paginate(15);

    return view('rlogger::index', compact('logs'));
})->middleware('auth.basic');


Route::get('/rlogger/{rlogger_id}', function ($rlogger_id, \Illuminate\Http\Request $request) {
    $user = config('rlogger.rlogger_authorized_user_id');
    $log  = \RLogger\Models\RLogger::find($rlogger_id);

    if (is_array($user)) {
        if (!in_array($request->user()->id, $user))
            abort(403);
    } else {
        if (!$request->user()->id == $user)
            abort(403);
    }

    return view('rlogger::detail', compact('log'));

})->middleware('auth.basic');