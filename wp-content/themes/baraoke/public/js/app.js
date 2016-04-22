(function () {
    if (location.hash)
    {
        window.scrollTo(0,0);
        setTimeout(function(){window.scrollTo(0,0)},1);
    }
    var yourFunctionName = function(event) {
    $('.onload').fadeIn(300);

        var hash = location.hash;
        if (hash) {
            $('html, body').animate({ scrollTop: $(hash).offset().top-100 }, 600, function () {
                setTimeout(function(){$(hash).trigger('click')},300);
            });
        }
    };

    if(window.attachEvent) {
        window.attachEvent('onload', yourFunctionName);
    } else {
        if(window.onload) {
            var curronload = window.onload;
            var newonload = function(evt) {
                curronload(evt);
                yourFunctionName(evt);
            };
            window.onload = newonload;
        } else {
            window.onload = yourFunctionName;
        }
    }
})();