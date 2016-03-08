
@if(Session::has('message') && $message = Session::get('message') )
    <div class="alert alert-{{$message['type']}}">
        {{ $message['message'] }}
    </div>
@endif

@if (count($errors) > 0)

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }} </div>
            @endforeach

@endif