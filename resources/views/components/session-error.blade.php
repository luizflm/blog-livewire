@session('error')
    <div {{ $attributes->merge(['class' => 'text-red-300 font-bold text-base text-center mb-2']) }}>
        {{ $value }}
    </div>
@endsession
