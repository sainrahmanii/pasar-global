<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard - Admin</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../assets/img/ikbal.jpeg" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['../assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/atlantis.min.css">

</head>

<body>
    <div class="wrapper">

        @include('navbar')
        @include('sidebar')

        <div class="main-panel">
            <div class="content">
                @yield('content')

            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <!-- <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="../assets/js/atlantis.min.js"></script>

    <!-- ck editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('.ckeditor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function(){
                $('#prov').on('change', function(){
                    let id_prov = $('#prov').val();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getkota') }}",
                        data: {id_prov: id_prov},
                        cache: false,

                        success: function(msg){
                            $('#kota_kabupaten').html(msg);
                            $('#kecamatan').html('');
                            $('#kelurahan_desa').html('');
                        },
                        error: function(){
                            alert('Something Error');
                        }
                    });
                });

                $('#kota_kabupaten').on('change', function(){
                    let id_kota = $('#kota_kabupaten').val();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getkec') }}",
                        data: {id_kota: id_kota},
                        cache: false,

                        success: function(msg){
                            $('#kecamatan').html(msg);
                            $('#kelurahan_desa').html('');
                        },
                        error: function(){
                            alert('Something Error');
                        }
                    });
                });

                $('#kecamatan').on('change', function(){
                    let id_kec = $('#kecamatan').val();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getkel') }}",
                        data: {id_kecamatan: id_kec},
                        cache: false,

                        success: function(msg){
                            $('#kelurahan_desa').html(msg);
                        },
                        error: function(){
                            alert('Something Error');
                        }
                    });
                });

            })
        })
    </script>
</body>

</html>