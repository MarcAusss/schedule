@forelse ($date->event as $details)
    <h1 class="text-xl">
    {{$details['event']}}
    </h1>
@empty
    <p class="">
        No Details Found
    </p>
@endforelse 

