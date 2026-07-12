<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Admin | Web IHI</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo-ihi.png')}}" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/daterangepicker.min.css')}}" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme.min.css')}}" />
    <!-- <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">
    <!-- <link rel="stylesheet" href="{{ asset('plugins/ckeditor5.css') }}">
    <script src="{{ asset('plugins/ckeditor.js') }}"></script>

    <script>
        ClassicEditor.create(document.querySelector('#editor'), {
                licenseKey: 'GPL'
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script> -->
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jodit@4.6.11/es2021/jodit.min.css">
    <!-- Jodit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jodit@3.24.7/build/jodit.min.css">
    <!-- Jodit JS -->
    <script src="https://cdn.jsdelivr.net/npm/jodit@3.24.7/build/jodit.min.js"></script>

</head>

<body>
    @include('admin.layout.sidebar')

    @include('admin.layout.header')

    @yield('content')

    @include('admin.layout.customize')

    <!--! BEGIN: Vendors JS !-->
    <script src="{{asset('vendors/js/vendors.min.js')}}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{asset('vendors/js/daterangepicker.min.js')}}"></script>
    <script src="{{asset('vendors/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('vendors/js/circle-progress.min.js')}}"></script>

    <!-- <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script> -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{asset('js/common-init.min.js')}}"></script>
    <script src="{{asset('js/dashboard-init.min.js')}}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{asset('js/theme-customizer-init.min.js')}}"></script>
    <!--! END: Theme Customizer !-->
    <script src="{{asset('plugins/ckeditor5.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/jodit@4.6.11/es2021/jodit.min.js"></script> -->

    <!-- <script>
        const editor = new Jodit('#editor', {
            height: 400,
            theme: 'default',
            toolbarAdaptive: false,
            buttons: [
                'source',
                '|',
                'bold',
                'italic',
                'underline',
                'strikethrough',
                '|',
                'ul',
                'ol',
                '|',
                'outdent',
                'indent',
                '|',
                'font',
                'fontsize',
                'brush',
                'paragraph',
                '|',
                'image',
                'table',
                'link',
                '|',
                'align',
                '|',
                'undo',
                'redo',
                '|',
                'hr',
                'eraser',
                'fullsize'
            ]
        });
    </script> -->

    <script>
        const editor = new Jodit('#editor', {

            height: 500,

            toolbarAdaptive: false,
            buttons: [
                'source',
                '|',
                'bold',
                'italic',
                'underline',
                '|',
                'ul',
                'ol',
                '|',
                'fontsize',
                'brush',
                'paragraph',
                '|',
                'image',
                'table',
                'link',
                '|',
                'align',
                '|',
                'undo',
                'redo',
                '|',
                'fullsize'
            ],

            askBeforePasteHTML: false,
            askBeforePasteFromWord: false,
            beautifyHTML: true,
            showCharsCounter: true,
            showWordsCounter: true,
            showXPathInStatusbar: false,

            uploader: {

                url: "{{ route('jodit.upload') }}",

                method: "POST",

                format: "json",

                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },

                filesVariableName() {
                    return "files";
                },

                process(resp) {

                    return {

                        files: resp.files,

                        path: '',

                        baseurl: ''

                    };

                },

                isSuccess(resp) {

                    return resp.success;

                },

                defaultHandlerSuccess(data) {

                    if (data.files.length) {

                        this.s.insertImage(data.files[0]);

                    }

                }

            }

        });
    </script>
</body>

</html>