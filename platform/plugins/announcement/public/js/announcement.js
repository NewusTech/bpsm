(()=>{"use strict";$(document).ready((function(){var n=$("#archi-elite-announcement-forms-announcement-form"),e=function(e){var c=n.find(".has-action");e?c.slideDown():c.slideUp()};n.on("change",'input[name="has_action"]',(function(n){e($(n.currentTarget).is(":checked"))})),e(n.find('input[name="has_action"]').is(":checked"))}))})();