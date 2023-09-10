const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [
        //
    ]
);

//-----------------CSS Mix---------------------
mix.styles(
    [
        "resources/app-assets/vendors/css/vendors.min.css",
        "resources/app-assets/vendors/css/extensions/toastr.css",
        "resources/app-assets/css/bootstrap.css",
        "resources/app-assets/css/bootstrap-extended.css",
        "resources/app-assets/css/colors.css",
        "resources/app-assets/css/components.css",
        "resources/app-assets/css/core/menu/menu-types/vertical-menu.css",
        "resources/app-assets/css/core/colors/palette-gradient.css",
        "resources/app-assets/css/pages/authentication.css",
        "resources/app-assets/css/plugins/extensions/toastr.css",
        "resources/assets/css/style.css",
        "resources/assets/css/custom.css",
    ],
    "public/dashboards/css/main.css"
);

mix.styles(
    [
        "resources/app-assets/vendors/css/tables/datatable/datatables.min.css",
        "resources/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css",
    ],
    "public/dashboards/css/datatables.css"
);

mix.styles(
    [
        "resources/assets/css/t-datepicker.min.css",
        "resources/assets/css/t-datepicker-main.css",
    ],
    "public/dashboards/css/t-datepicker.min.css"
);

mix.copy(
    "resources/app-assets/css/pages/data-list-view.css",
    "public/dashboards/css/data-list-view.css"
);

mix.copy(
    "resources/assets/css/profile.css",
    "public/dashboards/css/profile.css"
);

mix.copy(
    "resources/assets/css/custom-dropdown-menu.css",
    "public/dashboards/css/custom-dropdown-menu.css"
);

mix.copy(
    "resources/app-assets/vendors/css/pickers/pickadate/pickadate.css",
    "public/dashboards/css/pickadate.css"
);

mix.copy(
    "resources/app-assets/vendors/css/forms/select/select2.min.css",
    "public/dashboards/css/select2.min.css"
);

mix.copy(
    "resources/assets/css/organizational.css",
    "public/dashboards/css/organizational.css"
);

mix.copy(
    "resources/assets/css/person-custom.css",
    "public/dashboards/css/person-custom.css"
);

mix.copy(
    "resources/assets/css/custom_checkboxes.css",
    "public/dashboards/css/custom_checkboxes.css"
);

mix.copy(
    "resources/app-assets/css/plugins/forms/validation/form-validation.css",
    "public/dashboards/css/form-validation.css"
);

mix.copy(
    "resources/assets/treeviews/jquery.treegrid.css",
    "public/dashboards/css/jquery.treegrid.css"
);

mix.copy(
    "resources/assets/css/organization-custom-chart.css",
    "public/dashboards/css/organization-custom-chart.css"
);

mix.styles(
    [
        "resources/app-assets/vendors/css/calendars/fullcalendar.min.css",
        "resources/app-assets/vendors/css/calendars/extensions/daygrid.min.css",
        "resources/app-assets/vendors/css/calendars/extensions/timegrid.min.css",
        "resources/app-assets/vendors/css/pickers/pickadate/pickadate.css",
        "resources/app-assets/css/plugins/calendars/fullcalendar.css",
    ],
    "public/dashboards/css/fullcalendar.css"
);

mix.copy(
    "resources/assets/timepicker/timepicki.css",
    "public/dashboards/css/timepicki.css"
);

mix.copy(
    "resources/assets/comments/css/jquery-comments.css",
    "public/dashboards/css/jquery-comments.css"
);

//----------------JS Mix----------------
mix.scripts(
    [
        "resources/app-assets/vendors/js/vendors.min.js",
        "resources/app-assets/vendors/js/extensions/toastr.min.js",
        "resources/app-assets/js/core/app-menu.js",
        "resources/app-assets/js/core/app.js",
        "resources/app-assets/js/scripts/components.js",
        "resources/assets/js/custom.js",
        "resources/assets/js/general_function.js",
        "resources/assets/js/set-permission.js",
    ],
    "public/dashboards/js/main.js"
);

mix.scripts(
    "resources/assets/js/menu-content-active.js",
    "public/dashboards/js/menu-content-active.js"
);

mix.scripts(
    [
        "resources/app-assets/vendors/js/extensions/moment.min.js",
        "resources/app-assets/vendors/js/calendar/fullcalendar.min.js",
        "resources/app-assets/vendors/js/calendar/extensions/daygrid.min.js",
        "resources/app-assets/vendors/js/calendar/extensions/timegrid.min.js",
        "resources/app-assets/vendors/js/calendar/extensions/interactions.min.js",
        "resources/app-assets/vendors/js/pickers/pickadate/picker.js",
        "resources/app-assets/vendors/js/pickers/pickadate/picker.date.js",
    ],

    "public/dashboards/js/fullcalendar.min.js"
);

mix.scripts(
    [
        "resources/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js",
        "resources/app-assets/js/scripts/forms/validation/form-validation.js",
    ],
    "public/dashboards/js/form-validation.js"
);

mix.scripts(
    [
        "resources/app-assets/vendors/js/tables/datatable/datatables.min.js",
        "resources/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js",
        "resources/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js",
        "resources/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js",
        "resources/app-assets/vendors/js/tables/datatable/dataTables.select.min.js",
        "resources/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js",
    ],
    "public/dashboards/js/datatables.min.js"
);

mix.scripts(
    [
        "resources/app-assets/vendors/js/pickers/pickadate/picker.js",
        "resources/app-assets/vendors/js/pickers/pickadate/picker.date.js",
        "resources/app-assets/vendors/js/pickers/pickadate/picker.time.js",
        "resources/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js",
    ],
    "public/dashboards/js/picker.date.js"
);

mix.copy(
    "resources/app-assets/vendors/js/charts/chart.min.js",
    "public/dashboards/js/chart.min.js"
);

mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-profile.js",
    "public/dashboards/js/scripts/ui/data-list-view-profile.js"
);

mix.scripts(
    [
        "resources/app-assets/vendors/js/forms/select/select2.full.min.js",
        "resources/app-assets/js/scripts/forms/select/form-select2.js",
    ],
    "public/dashboards/js/select2.full.min.js"
);

mix.copy(
    "resources/assets/js/t-datepicker.min.js",
    "public/dashboards/js/t-datepicker.min.js"
);

mix.copy(
    "resources/assets/treeviews/jquery.treegrid.min.js",
    "public/dashboards/js/jquery.treegrid.min.js"
);

mix.copy(
    "resources/assets/js/custom/data-table-list.js",
    "public/dashboards/custom_js/data-table-list.js"
);

mix.copy(
    "resources/assets/timepicker/timepicki.js",
    "public/dashboards/custom_js/timepicki.js"
);

mix.copy(
    "resources/assets/multi-file/jquery.multifile.js",
    "public/dashboards/custom_js/jquery.multifile.js"
);

//-------------Custom JS----------------

//-------------Custom Calendar-----------

mix.scripts(
    "resources/app-assets/js/scripts/extensions/fullcalendar.js",
    "public/dashboards/custom_js/calendars/fullcalendar.js"
);

//------------Custom Treeview---------------
mix.copy(
    "resources/assets/treeviews/jquery.treegrid.js",
    "public/dashboards/custom_js/tree-views/jquery.treegrid.js"
);

mix.copy(
    "resources/app-assets/js/scripts/charts/chart-apex.js",
    "public/dashboards/custom_js/charts/chart-apex.js"
);

mix.copy(
    "resources/app-assets/vendors/js/charts/apexcharts.min.js",
    "public/dashboards/vendors/js/charts/apexcharts.min.js"
);
//-----------Custom Chart JS----------------------------
mix.copy(
    "resources/app-assets/js/scripts/charts/chart-chartjs.js",
    "public/dashboards/custom_js/charts/chart-home.js"
);
mix.copy(
    "resources/app-assets/js/scripts/charts/chart-performance-reviews.js",
    "public/dashboards/custom_js/charts/chart-performance-reviews.js"
);
mix.copy(
    "resources/assets/js/organization_chart.js",
    "public/dashboards/custom_js/charts/chart-organization.js"
);

//------------Custom Data List View JS---------------
mix.scripts(
    "resources/app-assets/js/scripts/ui/data-list-view-roles.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-roles.js"
);
mix.scripts(
    "resources/app-assets/js/scripts/ui/data-list-view-user-info.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-user-info.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-contract.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-contract.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-category-achievement.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-category-achievement.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-emp-leave.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-emp-leave.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-achievement.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-achievement.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-payroll-by-cycle.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-payroll-by-cycle.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-social-insurance.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-social-insurance.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-document.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-document.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-form.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-form.js"
);
mix.scripts(
    "resources/app-assets/js/scripts/ui/data-list-view-recruitment.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-recruitment.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-candidate.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-candidate.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-interview.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-interview.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-category-contract.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-category-contract.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-category-document.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-category-document.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-leave.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-leave.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-organizations.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-organizations.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-person.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-person.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-position.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-program.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-program.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-training.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-training.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-working-history.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-working-history.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-category-training.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-category-training.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-category-furlough.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-category-furlough.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-furlough-type.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-furlough-type.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-furlough.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-furlough.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-status-working.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-status-working.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-external-organization.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-external-organization.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-external-employee.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-external-employee.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-annual-leave.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-annual-leave.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-person-timeoffs.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-person-timeoffs.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-period.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-period.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-review-form.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-review-form.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-performance-review.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-performance-review.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-incivility.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-incivility.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-qualification.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-qualification.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-manager-performance-review.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-manager-performance-review.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ag-grid/ag-grid-enterprise.min.js",
    "public/dashboards/js/ag-grid/ag-grid-enterprise.min.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-furlough-histories.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-furlough-histories.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-area.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-area.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-person-review.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-person-review.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-person-contract.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-person-contract.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-person-training.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-person-training.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-person-working-histories.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-person-working-histories.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-pit-policy.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-pit-policy.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-employee-pit.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-employee-pit.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-dependent.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-dependent.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-public-holiday.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-public-holiday.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-payroll-cycle.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-payroll-cycle.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-insurance-pay.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-insurance-pay.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-payroll.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-payroll.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-construction.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-construction.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-contact.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-contact.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-work-request.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-work-request.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-time-sheet.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-time-sheet.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-report-performance-review.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-report-performance-review.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-recruitment-channel.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-recruitment-channel.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-offer-letter.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-offer-letter.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-person-performance-review.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-person-performance-review.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-person-achievements.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-person-achievements.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-roles-list.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-roles-list.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-set-roles.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-set-roles.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-training-file.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-training-file.js"
);
mix.copy(
    "resources/app-assets/js/scripts/ui/data-list-view-category-interview.js",
    "public/dashboards/custom_js/data_list_view/data-list-view-category-interview.js"
);

//----------Custom JS----------------------------
mix.copy(
    "resources/assets/js/admin_script.js",
    "public/dashboards/custom_js/custom/admin_script.js"
);
mix.copy(
    "resources/assets/js/custom_checkboxes.js",
    "public/dashboards/custom_js/custom/custom_checkboxes.js"
);
mix.copy(
    "resources/assets/js/custom-t-datepicker.js",
    "public/dashboards/custom_js/custom/custom-t-datepicker.js"
);
mix.copy("resources/assets/js/scripts.js", "public/dashboards/js/scripts.js");
mix.copy(
    "resources/assets/js/custom_ckeditor/config.js",
    "public/dashboards/js/custom_ckeditor/config.js"
);
mix.copy(
    "resources/assets/js/confirm-furlough.js",
    "public/dashboards/custom_js/custom/confirm-furlough.js"
);
mix.copy(
    "resources/assets/js/confirm-recruitment.js",
    "public/dashboards/custom_js/custom/confirm-recruitment.js"
);
mix.copy(
    "resources/assets/js/change_password.js",
    "public/dashboards/custom_js/custom/change_password.js"
);
mix.copy(
    "resources/assets/js/performance-review-pdf.js",
    "public/dashboards/custom_js/custom/performance-review-pdf.js"
);
mix.copy(
    "resources/assets/js/custom/permission.js",
    "public/dashboards/custom_js/custom/permission.js"
);

mix.copy(
    "resources/assets/js/custom_time_picker/timepicker-bs4.js",
    "public/dashboards/custom_js/custom/timepicker-bs4.js"
);

mix.copy(
    "resources/assets/comments/js/jquery-comments.js",
    "public/dashboards/custom_js/custom/jquery-comments.js"
);

// ----------Proxy-----------------
// mix.browserSync({
//     proxy: "http://127.0.0.1:8000/",
// });

if (mix.inProduction()) {
    mix.version();
}
