@props(['field'])

@error($field)
    <div {{ $attributes->merge(['class' => 'text-red-300 font-bold text-sm mt-2']) }}>
        {{ $message }}
    </div>
@enderror
