@props(['active' => false])
{{-- attributes should be considered data variables using the @props  --}}
<li>
    <a {{ $attributes }} @class([
        'block py-2 px-3 rounded md:p-0',
        'text-white bg-blue-700  md:bg-transparent md:text-blue-700 md:dark:text-blue-500' => $active,
        'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700' =>! $active,
    ]) aria-current="page"> {{ $slot }}
    </a>
</li>
