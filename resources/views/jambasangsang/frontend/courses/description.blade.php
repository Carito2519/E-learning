<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
    <div class="overview-description">
        <div class="singel-description pt-40">
            <h6>@lang('Resumen del curso')</h6>
            <p>{{ $course->summary }}</p>
        </div>
        <div class="singel-description pt-40">
            <h6>@lang('Requisitos')</h6>
            <p>{{ $course->requrement }}</p>
        </div>
    </div> <!-- overview description -->
</div>
