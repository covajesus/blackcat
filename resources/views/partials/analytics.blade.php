{{-- Google Analytics & Tag Manager Configuration --}}

{{-- Google Tag Manager --}}
<script>
    (function(w,d,s,l,i){
        w[l]=w[l]||[];
        w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
        var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
        j.async=true;
        j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
        f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ config('app.gtm_id', 'GTM-KQN8WXBX') }}');
</script>

{{-- Google Analytics 4 (GA4) - Implementación Directa --}}
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('app.ga4_id') }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '{{ config('app.ga4_id') }}');

    // Enhanced tracking para el hostal
    gtag('event', 'page_view', {
        page_title: document.title,
        page_location: window.location.href,
        language: '{{ app()->getLocale() }}',
        hostal_section: '{{ Route::currentRouteName() ?? "unknown" }}'
    });
</script>

{{-- Facebook Pixel --}}
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '{{ config('app.facebook_pixel_id', '1872747216193432') }}');
    fbq('track', 'PageView');
</script>

{{-- No-Script Fallbacks --}}
<noscript>
    {{-- GTM Noscript --}}
    <iframe src="https://www.googletagmanager.com/ns.html?id={{ config('app.gtm_id', 'GTM-KQN8WXBX') }}"
            height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
    
    {{-- Facebook Pixel Noscript --}}
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id={{ config('app.facebook_pixel_id', '1872747216193432') }}&ev=PageView&noscript=1"/>
</noscript>

{{-- Custom Events for Hostal --}}
<script>
    // Track room views
    function trackRoomView(roomType) {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'view_room', {
                'room_type': roomType,
                'currency': 'CLP',
                'value': 1
            });
        }
        
        if (typeof fbq !== 'undefined') {
            fbq('track', 'ViewContent', {
                content_name: roomType + ' Room',
                content_category: 'Accommodation'
            });
        }
    }

    // Track contact form submissions
    function trackContactForm() {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'contact_form_submit', {
                'event_category': 'engagement',
                'event_label': 'contact_form'
            });
        }
        
        if (typeof fbq !== 'undefined') {
            fbq('track', 'Contact');
        }
    }

    // Track language switches
    function trackLanguageChange(newLanguage) {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'language_change', {
                'event_category': 'navigation',
                'event_label': newLanguage
            });
        }
    }

    // Auto-track external links
    document.addEventListener('DOMContentLoaded', function() {
        // Track outbound links
        document.querySelectorAll('a[href^="http"]').forEach(function(link) {
            if (link.hostname !== window.location.hostname) {
                link.addEventListener('click', function() {
                    gtag('event', 'click', {
                        event_category: 'outbound',
                        event_label: link.href
                    });
                });
            }
        });

        // Track booking form interactions
        document.querySelectorAll('form').forEach(function(form) {
            form.addEventListener('submit', function() {
                gtag('event', 'form_submit', {
                    event_category: 'engagement',
                    event_label: form.id || 'contact_form'
                });
            });
        });

        // Track room image clicks
        document.querySelectorAll('a[href*="/room/detail/"]').forEach(function(link) {
            link.addEventListener('click', function() {
                var roomType = link.href.split('/').pop();
                trackRoomView(roomType);
            });
        });
    });
</script>