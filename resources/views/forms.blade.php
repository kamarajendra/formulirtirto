<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="relative min-h-screen bg-center sm:flex sm:justify-center bg-dots-darker selection:bg-red-500">
        <div class="w-full max-w-3xl mx-auto">
            <form class="p-4 space-y-8" method="post" action="/submit">
                @csrf
                <h1 class="text-4xl font-bold text-center text-gray-800">Forms</h1>

                <div class="space-y-4">
                    @foreach ($labels as $label => $value)
                        @php
                        $key = $label;
                        $isInput = strlen($key) > 1;
                        @endphp
                    <div @class(['border-t border-gray-600'=> !$isInput,]) data-key="{{ substr($key, 0, 1); }}">
                        @if ($isInput)
                            @php
                            $input = $inputs[$key];
                            @endphp
                        @if ($input['type'] === "Text")
                            {{ Form::label($key, $labels[$key]) }}
                            {{ Form::text($key, old($key), ['class' => 'w-full disabled:bg-gray-200', 'placeholder' => $labels[$key]]) }}
                        @elseif ($input['type'] === "TextInput")
                            {{ Form::label($key, $labels[$key]) }}
                            {{ Form::text($key, old($key), ['class' => 'w-full disabled:bg-gray-200', 'placeholder' => $labels[$key]]) }}
                        @elseif ($input['type'] === "DateInput" || $input['type'] === "DayInput")
                            {{ Form::label($key, $labels[$key]) }}
                            {{ Form::date($key, old($key), ['class' => 'w-full disabled:bg-gray-200', 'placeholder' => $labels[$key]]) }}
                        @elseif ($input['type'] === "ClockInput")
                            {{ Form::label($key, $labels[$key]) }}
                            {{ Form::time($key, old($key), ['class' => 'w-full disabled:bg-gray-200', 'placeholder' => $labels[$key]]) }}
                        @elseif ($input['type'] === "SelectInput")
                            @php
                            $options = $input['input']->options;
                            @endphp
                            {{ Form::label($key, $labels[$key]) }}
                            {{ Form::select($key, array_map(fn ($option, $key) => $option['id'], $options, array_keys($options)), old($key), ['class' => 'w-full disabled:bg-gray-200', 'placeholder' => $labels[$key]]) }}
                        @endif
                        @else
                        <h2 class="pt-4 text-xl font-bold">{{ $value }}</h2>
                        @endif
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="w-full px-4 py-2 text-xl font-semibold text-white bg-blue-500 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Submit</button>
            </form>
        </div>

    </div>
</body>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const sections = [{
                label: 'Kelahiran',
                inputs: ['C', 'D']
            },
            {
                label: 'Lahir Mati',
                inputs: ['D', 'E', 'F', 'G']
            },
            {
                label: 'Perkawinan',
                inputs: ['H']
            },
            {
                label: 'Pembatalan Perkawinan',
                inputs: ['I']
            },
            {
                label: 'Perceraian',
                inputs: ['J']
            },
            {
                label: 'Pembatalan Perceraian',
                inputs: ['K']
            },
            {
                label: 'Kematian',
                inputs: ['L']
            },
            {
                label: 'Pengankatan Anak',
                inputs: ['M']
            },
            {
                label: 'Pengakuan Anak',
                inputs: ['N']
            },
            {
                label: 'Pengesahan Anak',
                inputs: ['O']
            },
            {
                label: 'Perubahan Nama',
                inputs: ['P']
            },
            {
                label: 'Perubahan Status Kewarganegaraan',
                inputs: ['Q']
            },
            {
                label: 'Pencatatan Peristiwa Penting Lainnya',
                inputs: ['R']
            },
            {
                label: 'Pembetulan Akta',
                inputs: ['S']
            },
            {
                label: 'Pembatalan Akta',
                inputs: ['T']
            },
            {
                label: 'Pelaporan Pencatatan Sipil dari Luar Wilayah',
                inputs: ['U', 'V', 'W', 'X']
            },
        ]
        const staticKeys = ['A', 'B']

        // Add data-section attribute to inputs
        for (let sectionIndex in sections) {
            const section = sections[sectionIndex]
            const label = section.label
            const inputs = section.inputs

            for (let inputIndex in inputs) {
                const input = inputs[inputIndex] // ex: C
                // Check for elements with id starting with C
                const allowedInputs = document.querySelectorAll(`[id^='${input}']`);

                for (let el of allowedInputs) {
                    el.dataset.section = sectionIndex
                    el.disabled = true
                }
            }
        }
        // Hide all sections at first
        const dataKeys = staticKeys.map(input => `[data-key='${input}']`)
        document.querySelectorAll(`[data-key]:not(${dataKeys.join(",")})`).forEach((el) => {
            el.classList.add('hidden')
        })


        const formType = document.getElementById('B1')

        // Change allowed inputs based on form type
        formType.addEventListener('change', (e) => {
            const index = parseInt(e.target.value) // ex: 0
            const section = sections[index] // ex: {label: 'Kelahiran', inputs: ['C']}
            const inputs = section.inputs // ex: ['C']

            for (let input of inputs) {
                // Disable/Enable Inputs
                const disallowedInputs = document.querySelectorAll(`[id^='${input}']`);

                for (let el of disallowedInputs) {
                    el.disabled = true
                }

                const allowedInputs = document.querySelectorAll(`[id^='${input}']`); // ex: 0

                for (let el of allowedInputs) {
                    el.disabled = false
                }
            }  

            // Disable/Enable Sections based on [data-key] attributes
            const sectionKeys = inputs.map(input => input[0]) // ex: ['C']
            const dataKeys = inputs.map(input => `[data-key='${input}']`) // ex: ['C1']
            const allowedSections = document.querySelectorAll(dataKeys.join(',')); // ex: 0
            const disallowedSections = document.querySelectorAll(`[data-key]:not(${dataKeys.join(',')})`);

            for (let el of allowedSections) {
                if (staticKeys.includes(el.dataset.key)) continue
                el.classList.remove('hidden')
            }
            
            for (let el of disallowedSections) {
                if (staticKeys.includes(el.dataset.key)) continue
                el.classList.add('hidden')
            }
        })
    });
</script>

</html>