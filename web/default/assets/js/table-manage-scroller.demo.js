/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7 & Bootstrap 4.0.0-Alpha 6
Version: 3.0.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v3.0/admin/html/
*/

var handleDataTableScroller = function() {
	"use strict";
    
    if ($('#data-table').length !== 0) {
        $('#data-table').DataTable({
            ajax:           "assets/plugins/DataTables/json/scroller-demo.json",
            deferRender:    true,
            scrollY:        300,
            scrollCollapse: true,
            scroller:       true,
            responsive: true
        });
    }
};

var TableManageScroller = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleDataTableScroller();
        }
    };
}();