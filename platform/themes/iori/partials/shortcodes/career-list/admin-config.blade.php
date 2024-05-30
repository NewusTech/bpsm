<section>
    <div class="form-group mb-3">
        <label class="control-label">{{ __('Title') }}</label>
        <input name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" />
    </div>

    <div class="form-group mb-3">
        <label class="control-label">{{ __('Subtitle') }}</label>
        <input name="subtitle" value="{{ Arr::get($attributes, 'subtitle') }}" class="form-control" />
    </div>

    <div class="form-group mb-3">
        <label class="control-label">{{ __('Button primary label') }}</label>
        <input name="button_primary_label" value="{{ Arr::get($attributes, 'button_primary_label') }}" class="form-control" />
    </div>

    <div class="form-group mb-3">
        <label class="control-label">{{ __('Button primary URL') }}</label>
        <input name="button_primary_url" value="{{ Arr::get($attributes, 'button_primary_url') }}" class="form-control" />
    </div>

    <div class="form-group mb-3">
        <label class="control-label">{{ __('Button secondary label') }}</label>
        <input name="button_secondary_label" value="{{ Arr::get($attributes, 'button_secondary_label') }}" class="form-control" />
    </div>

    <div class="form-group mb-3">
        <label class="control-label">{{ __('Button secondary URL') }}</label>
        <input name="button_secondary_url" value="{{ Arr::get($attributes, 'button_secondary_url') }}" class="form-control" />
    </div>

    <div class="form-group">
        <label class="control-label">{{ __('Choose careers') }}</label>
        {!! Shortcode::fields()->ids('career_ids', $attributes, $careers) !!}
    </div>
</section>
