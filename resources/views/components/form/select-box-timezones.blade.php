<select name="timezone" aria-label="Select a Timezone"
        data-control="select2" data-placeholder="Select a timezone.."
        class="form-select form-select-solid form-select-lg">
    <option value="">Select a Timezone..</option>
    @foreach($timezones as $t)
        <option value="{{$t->id}}" @selected(old('timezone', $timezone) == $t->id)>
            {{$t->name}}
        </option>
    @endforeach
</select>
