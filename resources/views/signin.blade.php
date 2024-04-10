<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources\css\app.css')

    <style>
        @media (max-width: 768px) {
            .second{
                grid-template-columns: 2fr;
                height: 110vh;
                grid-template-rows: 1fr 1fr;
            }

            .second-left{               
                max-height: 100%;
            }

            .second-right{
                justify-content: center;
                align-items: center;
                
            }

            .second-text-first {
                display: none; 
            }

            .second-text-second{
                display: none;
                background-image: url('resources/Assets/image/background-andorid.png');
            }

            .second-text-third{
                display: none; 

            }

            .logo-cap{
                display: none;
            }

            ul {
                list-style-type: none;
                padding: 0;
            }

            .remember-forget{
                font-size: 0.54rem;
            }

            .kotak{
                width: 3.1vh;
                height: 2.5vh;
                
            }

            .form{
                width: 40vh;
                margin-bottom:13vh;
                margin-top:1vh;
            }

            .sign-in{
                margin-bottom:0vh;
                margin-top: 2rem;
            }

            .password{
                font-size: 2.3vh;
            }

            .username{
                font-size: 2.3vh;
            }
        } 

        @media (min-width: 850px) {
            .glow-text {
                font-size: 36px;
                font-weight: bold;
                color: #fff; 
                animation: glow 1s ease-in-out infinite alternate; 
            }

            @keyframes glow {
                0% {
                    text-shadow: 0 0 5px #c0c0c0;
                }
                100% {
                    text-shadow: 0 0 5px #c0c0c0, 0 0 10px #c0c0c0; 
                }
            }
            .second{
                grid-template-columns: repeat(2, minmax(0, 1fr)); 
                grid-template-rows: auto;
            }

            .second-left{
                order: 0; 
            }
 
            .second-text-first{
                font-size: 2.4rem;
                line-height: 2.0rem;
            }

            .second-text-second{
                font-size: 0.975rem;
                line-height: 0.20rem; 
            }

            .second-text-third{
                font-size: 1.5rem;
                line-height: 0.20rem; 
            }

            .second-right {
                height: 100%; 
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content:start;
            }

            .sign-in{
                display:none;
            }
        }
    </style>
</head>
<body class="m-0 p-0">
<div class="bg-background-login bg-no-repeat bg-cover h-120 flex justify-center items-center">
        <div class="rounded-lg border-custom-birutua bg-custom-putih w-11/12 h-5/6 grid grid-cols-2 shadow-2xl second">
        <div class="rounded-lg bg-login-polines flex-col bg-cover bg-center bg-no-repeat second-left flex justify-end ">
            <p class="font-poppins border-custom-kuning font-semibold text-custom-kuning pl-3 underline underline-offset-8 second-text-first mb-7">SELAMAT DATANG</p>
            <p class="font-poppins font-thin text-white pl-3 mt-2 second-text-second  mb-4">Sistem Penjadwalan dan Presensi</p> 
            <p class="glow-text font-poppins font-bold text-white mt-2 pl-3 pb-9 second-text-third ">Politeknik Negeri Semarang</p> 
        </div>

            <div class="rounded-lg flex-col bg-custom-putih flex justify-center items-center second-right border border-solid border-blue-500">
                <div class="w-36 h-36 mt-5 bg-logo-polines logo-cap bg-no-repeat"></div>
                <p class="mt-2 logo-cap font-poppins text-sm">Welcome Back, Please login to your account</p>
                <p class="font-poppins font-light text-xl  sign-in">SIGN-IN</p>
                @if (session('error'))
                    <div class="alert alert-danger" style="color: red;">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success" style="color: green;">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="w-7/12 mt-16 form" action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-1">
                        <label for="username" class="block font-poppins mb-2 text-sm font-semibold text-gray-900 username">Username</label>
                        <input type="username" id="username" name="username" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-custom-birutua focus:border-custom-birutua block w-11/12 p-2.5 input"  required />
                    </div>
                    <div class="mt-3 ">
                        <label for="password" class="block font-poppins mb-2 text-sm font-semibold text-gray-900 password">Password</label>
                        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-custom-birutua focus:border-custom-birutua block w-11/12 p-2.5 input" required />
                    </div>
                    <div class="flex items-start mt-3 ">
                        <div class="flex items-center h-5 kotak">
                            <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-custom-birutua dark:focus:ring-blue-600" />
                        </div>
                        <label for="remember" class="remember-forget ms-1 text-xs font-poppins font-light text-gray-900">Remember me</label>
                        <a class="remember-forget ml-auto text-xs font-poppins font-light text-custom-birumuda hover:text-custom-birutua" href="">Forgot Password?</a>
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="border-none text-white bg-blue-700 hover:bg-custom-birutua focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-1/2 p-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>