@props(['key' => ''])
@if (setting($key))
    <a href="{{ setting($key) }}" {{ $attributes }} style="border:0px; font-size: 1.5rem; color:white; padding: 0 10px">

        {{-- <img src="{{ ('/assets/icons/' . $key . '.svg') }}" type="image/svg+xml"
            style="width: 40px; display:inline-block !important; height: 100% !important;" alt=""> --}}
        @switch($key)
            @case('facebook')
                <img width="24" height="24" src="https://img.icons8.com/material/24/FFFFFF/facebook-new.png"
                    alt="facebook-new" />
            @break

            @case('instagram')
                <img width="24" height="24" src="https://img.icons8.com/material/24/FFFFFF/facebook-new.png"
                    alt="facebook-new" />
            @break

            @case('linkedin')
                <img width="24" height="24" src="https://img.icons8.com/material/24/FFFFFF/facebook-new.png"
                    alt="facebook-new" />
            @break

            @case('snapchat')
            @break

            @case('telegram')
                <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    style="width: 40px; display:inline-block !important; height: 100% !important;">
                    <path
                        d="M12 4C10.4178 4 8.87103 4.46919 7.55544 5.34824C6.23985 6.22729 5.21447 7.47672 4.60897 8.93853C4.00347 10.4003 3.84504 12.0089 4.15372 13.5607C4.4624 15.1126 5.22433 16.538 6.34315 17.6569C7.46197 18.7757 8.88743 19.5376 10.4393 19.8463C11.9911 20.155 13.5997 19.9965 15.0615 19.391C16.5233 18.7855 17.7727 17.7602 18.6518 16.4446C19.5308 15.129 20 13.5823 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM15.93 9.48L14.62 15.67C14.52 16.11 14.26 16.21 13.89 16.01L11.89 14.53L10.89 15.46C10.8429 15.5215 10.7824 15.5715 10.7131 15.6062C10.6438 15.6408 10.5675 15.6592 10.49 15.66L10.63 13.66L14.33 10.31C14.5 10.17 14.33 10.09 14.09 10.23L9.55 13.08L7.55 12.46C7.12 12.33 7.11 12.03 7.64 11.83L15.35 8.83C15.73 8.72 16.05 8.94 15.93 9.48Z"
                        fill="#fff" />
                </svg>
            @break

            @case('tiktok')
            @break

            @case('twitter')
            @break

            @case('whatsapp')
                <img width="24" height="24" src="https://img.icons8.com/material/24/000000/whatsapp--v1.png"
                    alt="whatsapp--v1" />
            @break

            @case('youtube')
            @break

            @default
        @endswitch
    </a>
@endif
