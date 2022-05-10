@define $descriptionMaxLength = 420
<div class="post{{ isset($noSeparator)? '_noseparator' : '' }}">
    <div class="row">
        <div class="col">
            <h2 class="{{ isset($centerTitle)? 'text-center' : '' }}">{{ $event->date }} : {{ $event->name }}</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-{{ $leftCol ?? 'sm-4' }}">
            <img src="{{ $event->cover }}" style="width: 100%;" />
        </div>
        <div class="col-{{ $rightCol ?? 'sm-8' }}">
            <span>
                @if (strlen($event->description) > $descriptionMaxLength)
                    {!! nl2br(substr($event->description, 0, $descriptionMaxLength)) !!}<span class="dots">...</span>
                    <span class="more">{!! nl2br(substr($event->description, $descriptionMaxLength)) !!}</span>
                    <a class="readMoreOrLess" data-more-txt="Voir plus" data-less-txt="&lt;&lt; Voir moins"></a>
                @else
                    {!! nl2br($event->description) !!}
                @endif
            </span>
        </div>
    </div>
</div>
