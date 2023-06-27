<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/output.css">
    <title>Dashboard</title>
</head>

<body class="bg-zinc-500 dark:bg-zinc-400" >
    <nav class="bg-slate-100 py-2 dark:bg-gray-800 shadow-md">
        <ul class="flex justify-end">

            <!-- logo -->
            <li><a href="#" class="mr-[700px] py-2 px-4 text-xl hover:font-semibold dark:text-white">Logo</a></li>

            <li><a href="dashboard.html"
                    class="block py-2 px-4 text-gray-800 font-medium dark:text-gray-100 text-xl hover:font-semibold">Beranda</a>
            </li>

            <li class="relative">
                <a href="#"
                    class="block py-2 px-4 text-gray-700 dark:text-gray-100 text-xl hover:font-semibold">Siswa</a>
                <!-- Fungsi dropdown -->
                <div class="absolute left-0 mt-1 py-2 w-48 bg-white shadow-lg rounded hidden">
                    <a href="dataSiswa.html" class="block px-4 py-2 text-gray-800 rounded mx-2  hover:bg-gray-200">Data Siswa</a>
                    <a href="dataBukuInduk.html" class="block px-4 py-2 text-gray-800 rounded mx-2  hover:bg-gray-200">Buku Induk</a>
                    <a href="dataKelas.html" class="block px-4 py-2 text-gray-800 rounded mx-2  hover:bg-gray-200">Kelas & Jurusan</a>
                </div>
            </li>

            <li class="relative">
                <a href="#"
                    class="block py-2 px-4 text-gray-700 dark:text-gray-100 text-xl hover:font-semibold">Guru</a>
                <!-- Fungsi dropdown -->
                <div class="absolute left-0 mt-1 py-2 w-48 bg-white shadow-lg rounded hidden">
                    <a href="dataGuru.html" class="block px-4 py-2 text-gray-800 rounded mx-2  hover:bg-gray-200">Data Guru</a>
                    <a href="dataMapel.html" class="block px-4 py-2 text-gray-800 rounded mx-2  hover:bg-gray-200">Mata Pelajaran</a>
                </div>
            </li>

            <!-- tema -->
            <li id="theme-toggle"
                class="ml-16 mr-44 text-gray-500 dark:text-gray-400 bg-gray-300 dark:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </li>
        </ul>
    </nav>
    <br>

    <!-- container -->
    <!-- Jadwal pelajaran -->
    <div class="grid grid-cols-6 gap-4 h-96 mx-40 my-2">
        <div class="bg-slate-100 dark:bg-gray-800 dark:text-white p-2 rounded text-center mx-2 col-start-1 col-span-2 row-span-2">
            <h2 class="font-medium text-lg text-slate-800 p-2 rounded bg-slate-300 dark:bg-gray-900 dark:text-stone-200">Jadwal Pelajaran</h2>
            <br>
            <div class="grid grid-cols-2 gap-4">
                <div class="py-2">Jadwal RPL GENAP 22/23</div>
                <div>
                    <button class="bg-zinc-300 rounded px-8 py-2 font-medium text-gray-800 dark:text-gray-300 dark:bg-zinc-500">
                        Cek
                    </button>
                </div>
                <div class="py-2">Jadwal KIMIA GENAP 22/23</div>
                <div>
                    <button class="bg-zinc-300 rounded px-8 py-2 font-medium text-gray-800 dark:text-gray-300 dark:bg-zinc-500">
                        Cek
                    </button>
                </div>
            </div>
        </div>
        <div
            class="bg-slate-100 dark:bg-gray-700 dark:text-white p-2 rounded flex justify-center mx-2 col-end-7 col-span-4 row-span-1">
            <div class="display">
                <div id="time" class="text-lg font-medium">
                    <!-- jam -->
                </div>
            </div>
        </div>

        <!-- Agenda -->
        <div class="bg-slate-100 dark:bg-gray-800 dark:text-white p-2 rounded text-center mx-2 col-start-1 col-span-2 row-span-2">
            <h2 class="font-medium text-lg text-slate-800 p-2 rounded bg-slate-300 dark:bg-gray-900 dark:text-stone-200">Agenda Kelas</h2>
            <br>
            <div class="grid grid-cols-3 gap-4">
                <div class="py-2">Kelas X</div>
                <div>
                    <p class="py-2">15/23/2023 10:08</p>
                </div>
                <div>
                    <button class="bg-slate-300 dark:bg-gray-500 rounded px-8 py-2 font-medium text-gray-800 dark:text-gray-300">
                        Cek
                    </button>
                </div>
                <div class="py-2">Kelas XI</div>
                <div>
                    <p class="py-2">15/23/2023 10:08</p>
                </div>
                <div>
                    <button class="bg-slate-300 dark:bg-gray-500 rounded px-8 py-2 font-medium text-gray-800 dark:text-gray-300">
                        Cek
                    </button>
                </div>
                <div class="py-2">Kelas XII</div>
                <div>
                    <p class="py-2">15/23/2023 10:08</p>
                </div>
                <div>
                    <button class="bg-slate-300 dark:bg-gray-500 rounded px-8 py-2 font-medium text-gray-800 dark:text-gray-300">
                        Cek
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-slate-200 dark:bg-gray-800 dark:text-white p-2 rounded mx-2 col-end-7 col-span-4 row-start-2 row-span-3">
            <h2 class="font-medium text-lg text-slate-800 p-2 rounded bg-slate-300 dark:bg-gray-900 text-center dark:text-stone-200">Menu Utama</h2>
            <br>
            <a href="#" class="flex flex-col items-center bg-stone-50 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-stone-200 my-2 mx-auto dark:border-gray-700 dark:bg-slate-700 dark:hover:bg-gray-700">
                <img class="p-4 object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="asset/Jadwal.svg" alt="Jadwal">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-800 dark:text-white">
                        Jadwal Pelajaran
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Membuat jadwal pelajaran sekolah secara langsung sekaligus cetak pdf online jadwal yang telah dibuat
                    </p>
                </div>
            </a>
            <br>
            <a href="agenda.html" class="flex flex-col items-center bg-stone-50 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-stone-300 my-2 mx-auto dark:border-gray-700 dark:bg-slate-700 dark:hover:bg-gray-700">
                <img class="p-4 object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="asset/Agenda.svg" alt="Agenda">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-800 dark:text-white">
                        Agenda Kelas
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Lihat secara keseluruhan agenda dari setiap kelasnya yang dikirimkan setiap kali jam mengajar berakhir
                    </p>
                </div>
            </a>
        </div>
    </div>





</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var dropdowns = document.querySelectorAll('.relative');

        dropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('mouseenter', function () {
                this.querySelector('.absolute').classList.remove('hidden');
            });

            dropdown.addEventListener('mouseleave', function () {
                this.querySelector('.absolute').classList.add('hidden');
            });
        });
    });


    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }

    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function () {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });


    setInterval(()=>{
           const time = document.querySelector(".display #time");
           let date = new Date();
           let dates = date.getDate();
           let month = date.getMonth();
           let hours = date.getHours();
           let minutes = date.getMinutes();
           let seconds = date.getSeconds();
           let day_night = "AM";
           if(hours > 12){
             day_night = "PM";
             hours = hours - 12;
           }
           if(seconds < 10){
             seconds = "0" + seconds;
           }
           if(minutes < 10){
             minutes = "0" + minutes;
           }
           if(hours < 10){
             hours = "0" + hours;
           }
           if(month > 0){
            month++;
           }
           time.textContent = dates + "/" + month + " " + " " + hours + ":" + minutes + ":" + seconds + " " +  day_night;
         });

</script>

</html>
