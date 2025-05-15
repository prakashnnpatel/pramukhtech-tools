import jQuery from 'jquery';
window.$ = jQuery;
window.jQuery = jQuery;

import 'bootstrap';

import 'jquery-validation';

import select2 from 'select2';
select2($);

import Swal from 'sweetalert2';
window.Swal = Swal;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});