{{-- components.link

Renders a simple link
You can customize all the html and css classes but YOU MUST KEEP THE BLADE AND LIVEWIRE DIRECTIVES,

--}}
@props(['max_width' => '', 'string' => ''])
<div class="whitespace-nowrap {{$class??''}}" title="{{$string}}" style="max-width: {{$max_width??100}}px;text-overflow: ellipsis;overflow: hidden;">
    {!! $string !!}
</div>