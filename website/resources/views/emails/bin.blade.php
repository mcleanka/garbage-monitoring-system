@component('mail::message')
Hie,

The bin at {{ $data['bin']->location }} is {{ $data['status'] }} ({{ $data['level'] }}%).

@component('mail::button', ['url' => $url])
View Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
