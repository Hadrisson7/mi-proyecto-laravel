@if ($sort == $field)
    @if ($direction == 'asc')
        <i class="bi bi-arrow-up px-2"></i>
    @else
        <i class="bi bi-arrow-down px-2"></i>
    @endif
@else
    <i class="bi bi-arrow-down-up px-2"></i>
@endif
