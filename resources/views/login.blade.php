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
                grid-template-columns: 1fr;
                height: 110vh;
                grid-template-rows: 1fr 1fr;
            }

            .second-left{
                order: -1;
                overflow: auto;
                max-height: 100%;
            }

            .second-text-first {
                font-size: 1.5rem; 
                line-height: 0.5rem;
            }

            .second-text-second{
                font-size: 0.69rem;
                line-height: 0.40rem; 
            }

            .second-text-third{
                font-size: 0.80rem;
                line-height: 0.40rem; 
            }

            .logo-cap{
                display: none;
            }

            ul {
                list-style-type: none;
                padding: 0;
        }
        } 

        @media (min-width: 769px) {
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
            justify-content: flex-start;
         }

         ul {
            list-style-type: none;
            padding: 0;
        }
        
        }
    </style>
</head>
<body class="m-0 p-0">
<div class="bg-custom-birutua h-120 flex justify-center items-center">
        <div class="bg-custom-kuning w-11/12 h-5/6 grid grid-cols-2 second">
            <div class="bg-login-polines bg-cover bg-center bg-no-repeat second-left flex flex-col justify-end">
                <p class="font-poppins border-custom-kuning font-semibold text-custom-kuning pl-3 underline underline-offset-8 second-text-first"">SELAMAT DATANG</p>
                <p class="font-poppins font-thin text-white pl-3 second-text-second">Sistem Penjadwalan dan Presensi</p> 
                <p class="font-poppins font-bold text-white pl-3 pb-9 second-text-third">Politeknik Negeri Semarang</p> 
            </div>
            <div class="bg-white flex justify-center items-start second-right">
                <div class="block w-36 h-36 mt-5 bg-logo-pilines logo-cap bg-no-repeat"></div>
                <p class="mt-2 logo-cap">Welcome Back, Please login to your account</p>

                <form class="max-w-sm mx-auto">
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="email" id="email" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full" placeholder="name@gmail.com" required />
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                        </div>
                        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>