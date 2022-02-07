"use strict";
var KTDatatablesSearchOptionsColumnSearch = function() {

    $.fn.dataTable.Api.register('column().title()', function() {
        return $(this.header()).text().trim();
    });

    var initTable1 = function() {

        // begin first table
        var base_url = $('#base_url').val();
        var table = $('#kt_datatable').DataTable({
            responsive: true,

            // Pagination settings
            dom: `<'row'<'col-sm-12'tr>>
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
            // read more: https://datatables.net/examples/basic_init/dom.html

            lengthMenu: [5, 10, 25, 50],

            pageLength: 10,

            language: {
                'lengthMenu': 'Display _MENU_',
            },

            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                // url: HOST_URL + '/api/datatables/demos/server.php',
                url: base_url +'index.php/PairDev/get_Data',
                type: 'POST',
                data: {
                    // parameters for custom backend script demo
                    columnsDef: [
                        'Id', 'Ticker', 'Date', 'Ratio_Name', 'Ratio_Value','RSI9','Z20D','Z50D','Actions'
                    ],
                },
            },
            columns: [{
                    data: 'Id'
                },
                {
                    data: 'Ticker'
                },
                {
                    data: 'Date'
                },
                {
                    data: 'Ratio_Name'
                },
                {
                    data:  'Ratio_Value'
                },
                {
                    data:  'RSI9'
                },
                {
                    data:  'Z20D'
                },
                {
                    data:  'Z50D'
                },
                {
                    data: 'Actions',
                    responsivePriority: -1
                },
            ],
            initComplete: function() {
                var thisTable = this;
                var rowFilter = $('<tr class="filter"></tr>').appendTo($(table.table().header()));

                this.api().columns().every(function() {
                    var column = this;
                    var input;

                    switch (column.title()) {
                        case 'Id':
                        case 'Ticker':
                        case 'Ratio_Name':
                        case 'Ratio_Value':
                        case 'RSI9':
                        case 'Z20D':
                        case 'Z50D':
                            
                            input = $(`<input type="text" class="form-control form-control-sm form-filter datatable-input" data-col-index="` + column.index() + `"/>`);
                            break;

                        case 'Date':
                            input = $(`
    							<div class="input-group date">
    								<input type="text" class="form-control form-control-sm datatable-input" readonly placeholder="From" id="kt_datepicker_1"
    								 data-col-index="` + column.index() + `"/>
    								<div class="input-group-append">
    									<span class="input-group-text"><i class="la la-calendar-o glyphicon-th"></i></span>
    								</div>
    							</div>
    							<div class="input-group date d-flex align-content-center">
    								<input type="text" class="form-control form-control-sm datatable-input" readonly placeholder="To" id="kt_datepicker_2"
    								 data-col-index="` + column.index() + `"/>
    								<div class="input-group-append">
    									<span class="input-group-text"><i class="la la-calendar-o glyphicon-th"></i></span>
    								</div>
    							</div>`);
                            break;

                        case 'Actions':
                            var search = $(`
                                <button class="btn btn-primary kt-btn btn-sm kt-btn--icon d-block">
							        <span>
							            <i class="la la-search"></i>
							            <span>Search</span>
							        </span>
							    </button>`);

                            var reset = $(`
                                <button class="btn btn-secondary kt-btn btn-sm kt-btn--icon">
							        <span>
							           <i class="la la-close"></i>
							           <span>Reset</span>
							        </span>
							    </button>`);

                            $('<th>').append(search).append(reset).appendTo(rowFilter);

                            $(search).on('click', function(e) {
                                e.preventDefault();
                                var params = {};
                                $(rowFilter).find('.datatable-input').each(function() {
                                    var i = $(this).data('col-index');
                                    if (params[i]) {
                                        params[i] += '|' + $(this).val();
                                    } else {
                                        params[i] = $(this).val();
                                    }
                                });
                                $.each(params, function(i, val) {
                                    // apply search params to datatable
                                    table.column(i).search(val ? val : '', false, false);
                                });
                                table.table().draw();
                            });

                            $(reset).on('click', function(e) {
                                e.preventDefault();
                                $(rowFilter).find('.datatable-input').each(function(i) {
                                    $(this).val('');
                                    table.column($(this).data('col-index')).search('', false, false);
                                });
                                table.table().draw();
                            });
                            break;
                    }

                    if (column.title() !== 'Actions') {
                        $(input).appendTo($('<th>').appendTo(rowFilter));
                    }
                });

                // hide search column for responsive table
                var hideSearchColumnResponsive = function() {
                    thisTable.api().columns().every(function() {
                        var column = this
                        if (column.responsiveHidden()) {
                            $(rowFilter).find('th').eq(column.index()).show();
                        } else {
                            $(rowFilter).find('th').eq(column.index()).hide();
                        }
                    })
                };

                // init on datatable load
                hideSearchColumnResponsive();
                // recheck on window resize
                window.onresize = hideSearchColumnResponsive;

                $('#kt_datepicker_1,#kt_datepicker_2').datepicker();
            },
            columnDefs: [{
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return '\
							<div class="dropdown dropdown-inline">\
								<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown">\
	                                <i class="la la-cog"></i>\
	                            </a>\
							  	<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">\
									<ul class="nav nav-hoverable flex-column">\
							    		<li class="nav-item"><a class="nav-link" href="#"><i class="nav-icon la la-edit"></i><span class="nav-text">Edit Details</span></a></li>\
							    		<li class="nav-item"><a class="nav-link" href="#"><i class="nav-icon la la-leaf"></i><span class="nav-text">Update Status</span></a></li>\
							    		<li class="nav-item"><a class="nav-link" href="#"><i class="nav-icon la la-print"></i><span class="nav-text">Print</span></a></li>\
									</ul>\
							  	</div>\
							</div>\
							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details">\
								<i class="la la-edit"></i>\
							</a>\
							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">\
								<i class="la la-trash"></i>\
							</a>\
						';
                    },
                },
               
            ],
        });

    };

    return {

        //main function to initiate the module
        init: function() {
            initTable1();
        },

    };

}();

jQuery(document).ready(function() {
    KTDatatablesSearchOptionsColumnSearch.init();
});
