<ul>
    @foreach($support[$parent_id] as $menu_item)
        <li>
            <a href="{{ $menu_item['link'] }}">{{ $menu_item['name'] }} - {{ $menu_item['id'] }}</a>
            @if(isset($support[$menu_item['id']]) && count($support[$menu_item['id']]) > 0)
                {!!  show_menu($support, $menu_item['id']) !!}
            @endif
        </li>
    @endforeach
</ul>
