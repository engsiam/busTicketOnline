@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#f48fb1]']) }}>
    {{ $value ?? $slot }}
</label>
