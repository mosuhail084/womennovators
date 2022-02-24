{{-- @foreach ($faqdata as $item)
  <div class="panel" id="panel{{ $item->id }}">
    <h4> <a data-toggle="collapse" data-parent="#faq-accordion" href="#faq-collapse{{ $item->id }}"
        class="collapsed">
        {{ $item->faqques ?? '' }}
      </a> </h4>
    <div id="faq-collapse{{ $item->id }}" class="panel-collapse collapse">
      <div class="panel-content">{{ $item->faqans ?? '' }}</div>
    </div>
  </div>
@endforeach --}}


@foreach ($faqshow as $faq)
<div class="panel">
  <h4>
    <a data-toggle="collapse" data-parent="#faq-accordion" href="#faq-collapse{{ $faq->id }}"
      class="collapsed">
      {{ $faq->faqques ?? '' }}
    </a>
  </h4>
  <div id="faq-collapse{{ $faq->id }}" class="panel-collapse collapse">
    <div class="panel-content"> {!! $faq->faqans ?? '' !!}</div>
  </div>
</div>
@endforeach