window.$ = window.jQuery = require('jquery');

import hljs from 'highlight.js/lib/highlight';
import javascript from 'highlight.js/lib/languages/javascript';
import php from 'highlight.js/lib/languages/php';
import python from 'highlight.js/lib/languages/python';
import sql from 'highlight.js/lib/languages/sql';
import bash from 'highlight.js/lib/languages/bash';
hljs.registerLanguage('javascript', javascript);
hljs.registerLanguage('php', php);
hljs.registerLanguage('python', python);
hljs.registerLanguage('sql', sql);
hljs.registerLanguage('bash', bash);
hljs.initHighlightingOnLoad();

function toggleModalClasses(event) {
    var modalId = event.currentTarget.dataset.modalId;
    var modal = $(modalId);
    modal.toggleClass('is-active');
    $('html').toggleClass('is-clipped');
};

$('.open-modal').click(toggleModalClasses);

$('.close-modal').click(toggleModalClasses);

$(document).keyup(function(e) {
    if (e.keyCode === 27) {
        $('.modal').removeClass('is-active');
    }
});