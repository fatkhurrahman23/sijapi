@extends('mahasiswa.page.header')
@section('content')
    @vite('resources\css\scanner.css')
    @vite('resources\js\scanner.js')

    <div id="scanner" class="container flex flex-col h-screen">
        <div class="flex justify-center items-center border w-screen py-8 px-8">
            <video id="preview" width="100%"></video>
        </div>
        <div class="flex flex-col justify-center items-center border w-screen text-center">
            <p class="border font-poppins text-lg px-12">Arahkan ke Barcode yang diberikan dosen mata kuliah yang sedang dijalankan</p>
            <input type="text" name="text" id="text" readonly placeholder="Scan QR code" class="form-control">
        </div>
    </div>

    <link rel="" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.5.3/adapter.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

    <script>
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') }); 
        Instascan.Camera.getCameras().then(function(cameras){
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            }else{
                alert("No cameras found");
            }
        }).catch(function(e) {
            console.error(e);
        });
        
        scanner.addListener('scan', function(content){
            document.getElementById('text').value = content;
        });
    </script>
@endsection
