@props(['active' => false])
{{-- <li><a href="/"> Homepage</a></li> --}}
<li><a {{$attributes}} style="{{$active === true ? 'font-weght: bold;':''}}"> {{$slot}}</a></li>