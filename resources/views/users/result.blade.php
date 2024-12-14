@extends('layout.user-skeleton')

@section('title', 'Kelas')

@section('title-header', 'Kelas')

@section('content')
    <article class="w-full flex flex-col gap-28 justify-center items-center">
        <!-- Header Section -->
        <article class="w-full h-20 py-16 bg-primary-0 rounded-lg justify-between items-center inline-flex">
            <section class="w-full px-7 flex-col justify-start items-start gap-[15px] inline-flex">
                <h1 class="self-stretch text-[#fffffe] text-4xl font-medium font-fredoka">Pre Test</h1>
                <section class="self-stretch justify-start items-start gap-2.5 inline-flex">
                    <p class="grow shrink basis-0 text-[#fffffe] text-base font-normal font-fredoka leading-normal">
                        Ready to start your day with us?
                    </p>
                </section>
            </section>
        </article>

        <!-- Tabel Result -->
        <section class="w-1/2 h-full flex flex-col gap-16">
            <table class="w-full">
                <thead class="w-full border-t-2 border-b-2 border-black">
                    <tr>
                        <th class="w-3/4 flex justify-start px-5 py-2 font-nunito text-xl font-normal">Status</th>
                        <th class="w-1/4 py-2 font-nunito text-xl font-normal">Nilai / 100</th>
                    </tr>
                </thead>
                <tbody class="w-full border-b-2 border-black bg-secondary-0">
                    <tr class="w-full h-full">
                        <td class="w-3/4 h-16 px-5 py-2 font-nunito text-base font-normal">
                            <p>Selesai</p>
                            <p>Diserahkan Selasa, 8 Oktober 2024, 09:00</p>
                        </td>
                        <td class="w-full h-16 flex justify-center items-center font-nunito text-xl ">
                            90
                        </td>
                    </tr>
                </tbody>
            </table>

            <section class="w-full h-full flex justify-center">
                <a href="{{route('users.course')}}" class="w-40 py-2 bg-secondary-0 flex justify-center rounded-md hover:bg-[#A1A1C2] duration-75">Kembali Ke kelas</a>
            </section>
        </section>
    </article>
@endsection
