@foreach (widgets as widget)
    @if (widget.type == 'widget.menu')

    @provider.render(widget, ['layout' => 'view://system/widgets/menu/style.navbar.razr.php'])

    @else

    <ul class="uk-navbar-nav uk-visible-large">
        <li class="uk-parent" data-uk-dropdown>
            <a href="#">@widget.title</a>
            <div class="uk-dropdown uk-dropdown-navbar">@provider.render(widget)</div>
        </li>
    </ul>
@endif
@endforeach