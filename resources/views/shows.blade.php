@extends('layout')

@section('title')
SMOKE - Shows
@endsection

@section('meta-description')
<meta name="description" content="Concerts de SMOKE" />
@endsection

@section('content')
@foreach($events as $event)
    @include('partials.event', ['event' => $event])
@endforeach
@endsection

@section('localJS')
<script type="text/javascript">
$(document).ready(function() {
    let $readMoreLessLinks = $('a.readMoreOrLess');

    $readMoreLessLinks.on('switchText', function() {
        let $this       = $(this);
        let currentText = $this.text();
        let moreText    = $this.attr('data-more-txt');
        let lessText    = $this.attr('data-less-txt');

        if (currentText == lessText || currentText == '') {
            $this.text(moreText);
        } else {
            $this.text(lessText);
        }
    });

    $readMoreLessLinks.on('click', function() {
        var $this = $(this);

        $this.attr('disabled', 'disabled');

        var $dots = $this.prevAll('span.dots');
        var $more = $this.prevAll('span.more');

        if (!$dots.is(':visible')) {
            $more.fadeOut(function () {
                $dots.fadeIn(function() {
                    $this.trigger('switchText');
                    $this.attr('disabled', '');
                });
            });

            return;
        }

        $dots.fadeOut(function() {
            $more.fadeIn(function () {
                $this.trigger('switchText');
                $this.attr('disabled', '');
            });
        });
    });

    $readMoreLessLinks.trigger('switchText');
});
</script>
@endsection
