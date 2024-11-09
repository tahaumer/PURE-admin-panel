@props(['content', 'bgColor', 'buttonAttr'])

@push('style')
    <style>
        span.ripple {
            position: absolute;
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 600ms linear;
            background-color: rgba(255, 255, 255, 0.7);
        }

        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    </style>
@endpush

<button class="ripple-btn relative overflow-hidden align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:bg-opacity-90 focus:shadow-none active:shadow-none w-full {{ $bgColor }}" {!! $buttonAttr !!}>
    {{ $content }}
</button>

@push('script')
    <script>
        function rippleEffect(event) {
            const btn = event.currentTarget;

            const circle = document.createElement("span");
            const diameter = Math.max(btn.clientWidth, btn.clientHeight);
            const radius = diameter / 2;

            circle.style.width = circle.style.height = `${diameter}px`;
            circle.style.left = `${event.clientX - (btn.offsetLeft + radius)}px`;
            circle.style.top = `${event.clientY - (btn.offsetTop + radius)}px`;
            circle.classList.add("ripple");

            const ripple = btn.getElementsByClassName("ripple")[0];

            if (ripple) {
                ripple.remove();
            }

            btn.appendChild(circle);
        }

        document.querySelectorAll(".ripple-btn").forEach(btn => {
            btn.addEventListener("click", rippleEffect);
        });
    </script>
@endpush
