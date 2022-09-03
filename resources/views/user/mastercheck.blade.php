<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo.png" type="image/x-icon" />
    @vite('resources/css/app.css')
    <title>Pasar global</title>
</head>
<body class="bg-gray-50">   
@yield('content')

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