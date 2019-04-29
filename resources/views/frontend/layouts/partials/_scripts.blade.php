<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>

<script>
    (function() {
        var burger = document.querySelector('.navbar-burger');
        var menu = document.querySelector('.navbar-menu');
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });

    })();

</script>

@if(app()->environment('production'))
    <link rel="manifest" href="/manifest.json" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "761db262-dc9b-4165-8e3d-8be8e183e2c3",
            });
        });
    </script>
@endif

<script src="{{ asset('js/algolia/algoliasearch.min.js') }}"></script>
<script src="{{ asset('js/algolia/autocomplete.min.js') }}"></script>
<script>
    var client = algoliasearch('{{config('scout.algolia.id')}}', '{{config('scout.algolia.secret')}}');
    var index = client.initIndex('wink_posts');
    autocomplete('#main-search', { hint: false }, [
        {
            source: autocomplete.sources.hits(index, { hitsPerPage: 5 }),
            autoselect: true,
            templates: {
                suggestion: function(suggestion) {
                    return '<label class="title is-6">'+suggestion.title+'</label><br><p class="short-desc">'+suggestion.excerpt+'</p>';
                },
                @if(config('fullstackworld.show_algolia_logo'))
                footer: '<div class="algolia-branding is-pulled-right">Search by <img src="{{ asset('img/external/logo-algolia.png') }}" /></div>',
                @endif
            }
        }
    ]).on('autocomplete:selected', function(event, suggestion, dataset, context) {
        window.location.href = '/post/'+suggestion.slug;
    });

    $('#main-search').after('<span class="icon is-medium is-left"><i class="fas fa-search"></i></span>')

</script>
@include('bulma::notifications')

@yield('scripts')