@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($menus as $menu)
    
    @if (!$menu->parent_id)
    <a class="nav-link {{ request()->is($menu->url) ? 'active' : '' }}" aria-current="page" href="{{ $menu->url }}">{{ $menu->name }}</a>
    @endif
    @if ($menu->parent_id)
        @php
            $parentID = $menu->parent_id;
        @endphp
        @foreach ($menus as $menu)
            @if ($menu->parent_id ==$parentID)
                <div class="container">
                    <a class="nav-link {{ request()->is($menu->url) ? 'active' : '' }}" aria-current="page" href="{{ $menu->url }}">{{ $menu->name }}</a>
                </div>
            @endif
        @endforeach
    
    @endif
    @endforeach
</div>
@endsection