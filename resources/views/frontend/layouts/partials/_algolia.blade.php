<script src="{{ asset('js/algolia/autocomplete.min.js') }}"></script>
<script>
    function search(query, callback) {

        $.get('/search/'+query,
            function (results) {
                callback(results.data);
            }
        );
    }

    $(document).ready(function() {
        autocomplete('#main-search', {minLength: 2}, [
            {
                source: search,
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

    });

</script>
