<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>

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

<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script>
    var client = algoliasearch('CK8SRN7RCW', '95610d69fd2d5afe6158bc7e426548ea');
    var index = client.initIndex('wink_posts');
    autocomplete('#main-search', { hint: false }, [
        {
            source: autocomplete.sources.hits(index, { hitsPerPage: 5 }),
            displayKey: 'wink_posts',
            templates: {
                suggestion: function(suggestion) {
                    return suggestion.title;
                }
            }
        }
    ]).on('autocomplete:selected', function(event, suggestion, dataset, context) {
        window.location.href = '/post/'+suggestion.slug;
    });

    $('#main-search').after('<span class="icon is-medium is-left"><i class="fas fa-search"></i></span>')

</script>


<style>
.algolia-autocomplete .aa-dropdown-menu {
    width: 100%;
    background-color: #fff;
    border: 1px solid #999;
    border-top: none;
}
.algolia-autocomplete .aa-dropdown-menu .aa-suggestion {
    cursor: pointer;
    padding: 5px 4px;
    border-bottom: 0.5px solid #F5F5F5;
}
.algolia-autocomplete .aa-dropdown-menu .aa-suggestion.aa-cursor {
    background-color: #F5F5F5;
    color: #3EAF7C;
}
</style>

@include('bulma::notifications')

@yield('scripts')