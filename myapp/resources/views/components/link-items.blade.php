@props(['active' => false])
{{-- <li><a href="/"> Homepage</a></li> --}}
<li><a {{$attributes}} @class(['hover:text-gray-600', 'font-bold' => $active])>  {{$slot}}</a></li>