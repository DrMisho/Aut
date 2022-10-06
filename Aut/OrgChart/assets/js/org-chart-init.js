(function ($) {
    var org = {
        url: 'api/org-chart/',
        init: function (options) {
            var defaults = {

            };
            options = $.extend({}, defaults, options);

            var code = this.data('orgChartCode');
            var searchPlaceholder = this.data('orgChartSearchPlaceholder');
            var id = code + '_id';

            org.fetch(code).done(function (res) {
                $('#' + id)
                    .find('div')
                    .remove();

                let response = JSON.parse(res);
                OrgChart.SEARCH_PLACEHOLDER = searchPlaceholder || OrgChart.SEARCH_PLACEHOLDER;
                var chart = new OrgChart(document.getElementById(id), {
                    editUI: {init: function (){}, show: function (){}, hide: function (){}},
                    //enableSearch: false,
                    //searchFields: ["name", 'title', 'image'],
                    template: response.template,
                    nodeBinding: {
                        img_0: "image",
                        field_0: "name",
                        field_1: 'title'
                    },
                    nodes: response.tree
                });
            });
        },
        fetch(code) {
            return $.ajax({
                url: [document.querySelector('base').href, org.url, code].join(''),
                type: 'GET',
                dataType: 'html'
            });
        }
    };

    $.fn.orgChart = function (options) {
        $(this).each(function () {
            org.init.apply($(this), options);
        });
    };
})(jQuery);

