<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    @vite('resources/css/app.css')
</head>

<body>
    <main class="flex">
        <!-- Left Section -->
        <section class="h-screen w-1/2 flex justify-center items-center">
            <form action="{{ route('reset') }}" method="GET" class="w-[331px] h-[323px] flex-col justify-start items-center gap-[25px] inline-flex">
                <p class="self-stretch text-center text-[#2b2c34] text-4xl font-bold font-poppins leading-normal">Lupa Password</p>
                <section class="self-stretch h-12 flex-col justify-start items-start gap-1 flex">
                    <input type="email" placeholder="Email" class="self-stretch border border-gray-600 rounded px-4 py-3 justify-start items-start gap-3 inline-flex grow shrink basis-0 text-base font-normal font-poppins leading-normal"></input>
                </section>
                <button class="w-full py-3 rounded justify-center items-center gap-2 inline-flex bg-primary-0 text-white text-sm font-normal font-poppins uppercase leading-none">Reset Password</button>
                <section class="justify-center items-start gap-2.5 inline-flex">
                    <a href="{{ route('login') }}" class="text-primary-0 underline text-xs font-medium font-poppins">Kembali ke login</a>
                </section>
            </article>
        </section>

        <!-- Right Section -->
        <section class="h-screen w-1/2 bg-primary-0 justify-center items-center gap-2.5 inline-flex">
            <img class="w-[578.28px] h-[578.28px]" src="{{asset('img/Forgot Password.png')}}" />
        </section>
    </main>

</body>

</html>