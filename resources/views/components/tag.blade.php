@props([ "size" => "base", "tag" ])

@php
		$classes = "hover:bg-white/25 bg-white/10 rounded-xl font-bold transition-colors duration-300";

	if ($size == "base")
		$classes	.=	" px-5 py-1 text-sm";
	else if($size == "small")
		$classes	.=	" px-3 py-1 text-xxs";
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
