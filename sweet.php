<script src="/js/jquery-1.9.1.min.js"></script>
<script src="/js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
<script>
    Swal.fire({
        title: '<strong>HTML <u>example</u></strong>',
        type: 'info',
        html:
        'You can use <b>bold text</b>, ' +
        '<a href="//github.com">links</a> ' +
        'and other HTML tags',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
            '<i class="fa fa-thumbs-down"></i>',
        cancelButtonAriaLabel: 'Thumbs down',
    })
</script>