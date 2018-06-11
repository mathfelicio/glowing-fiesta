@foreach (session('flash_notification', collect())->toArray() as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else

        <div class="col s12 m12 container">
            <div class="card blue darken-1">
            <div class="card-content white-text">
                <i class="icon-{{ $message['level'] }} fa
                @switch($message['level'])
                @case('warning')
                        fa-exclamation-circle
                        @break
                @case('success')
                        fa-check-circle
                        @break
                @case('info')
                        fa-info-circle
                        @break
                @case('danger')
                        fa-times-circle
                        @break
                @endswitch
                        margin-right-10"></i>
                <p>{!! $message['message'] !!}</p>
            </div>
            </div>
        </div>

    @endif
@endforeach

{{ session()->forget('flash_notification') }}
