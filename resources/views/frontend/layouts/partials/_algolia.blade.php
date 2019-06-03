@if(app()->environment('production'))
    <script src="{{ asset('js/algolia/algoliasearch.min.js') }}"></script>
    <script src="{{ asset('js/algolia/autocomplete.min.js') }}"></script>
    <script>
        var client = algoliasearch('{{config('scout.algolia.id')}}', '{{config('scout.algolia.secret')}}');
        var index = client.initIndex('posts');
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
@endif