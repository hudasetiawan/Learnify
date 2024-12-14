@extends('layout.user-skeleton')

@section('title', 'Kelas')

@section('title-header', 'Kelas')

@section('content')
    <article class="w-full flex flex-col gap-16">
        <!-- Header Section -->
        <article class="w-full h-20 py-16 bg-primary-0 rounded-lg justify-between items-center inline-flex">
            <section class="w-full px-7 flex-col justify-start items-start gap-[15px] inline-flex">
                <section class="relative w-full flex justify-between">
                    <h1 class="self-stretch text-[#fffffe] text-4xl font-medium font-fredoka">Pemrograman Web</h1>
                    <svg id="setting-menu-toggle" class="dropdown-trigger cursor-pointer" width="26" height="26"
                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.5405 8.25877L21.8662 7.08867C21.2958 6.09859 20.0316 5.75704 19.0401 6.32513V6.32513C18.5682 6.60315 18.0051 6.68202 17.4749 6.54437C16.9448 6.40671 16.4911 6.06383 16.2141 5.59134C16.0358 5.29102 15.94 4.94895 15.9364 4.59973V4.59973C15.9525 4.03985 15.7413 3.49729 15.3508 3.09567C14.9604 2.69404 14.4241 2.46754 13.8639 2.46777H12.5054C11.9567 2.46777 11.4306 2.68643 11.0435 3.07538C10.6564 3.46433 10.4403 3.9915 10.4429 4.54024V4.54024C10.4266 5.67319 9.5035 6.58307 8.37043 6.58295C8.02121 6.57933 7.67914 6.48355 7.37882 6.3053V6.3053C6.38738 5.73721 5.12319 6.07876 4.55273 7.06884L3.82885 8.25877C3.25909 9.24762 3.596 10.511 4.58248 11.0849V11.0849C5.22371 11.4551 5.61872 12.1392 5.61872 12.8797C5.61872 13.6201 5.22371 14.3043 4.58248 14.6745V14.6745C3.59725 15.2445 3.25998 16.5048 3.82885 17.4907V17.4907L4.51307 18.6707C4.78035 19.153 5.2288 19.5088 5.75919 19.6596C6.28958 19.8103 6.85817 19.7435 7.33915 19.4739V19.4739C7.81198 19.198 8.37543 19.1224 8.90426 19.2639C9.43309 19.4054 9.88348 19.7523 10.1553 20.2275C10.3336 20.5278 10.4293 20.8699 10.433 21.2191V21.2191C10.433 22.3637 11.3608 23.2916 12.5054 23.2916H13.8639C15.0047 23.2916 15.9309 22.3697 15.9364 21.229V21.229C15.9338 20.6786 16.1512 20.1499 16.5405 19.7606C16.9297 19.3714 17.4584 19.1539 18.0089 19.1566C18.3573 19.1659 18.6979 19.2613 19.0005 19.4342V19.4342C19.9893 20.004 21.2527 19.6671 21.8266 18.6806V18.6806L22.5405 17.4907C22.8169 17.0163 22.8927 16.4514 22.7513 15.9209C22.6098 15.3905 22.2627 14.9383 21.7869 14.6646V14.6646C21.3111 14.3908 20.964 13.9387 20.8225 13.4082C20.6811 12.8778 20.7569 12.3128 21.0333 11.8385C21.213 11.5247 21.4731 11.2646 21.7869 11.0849V11.0849C22.7675 10.5113 23.1036 9.25531 22.5405 8.26869V8.26869V8.25877Z"
                            stroke="#FFFFFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <ellipse cx="13.1896" cy="12.8798" rx="2.85584" ry="2.85583" stroke="#FFFFFE"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div id="setting-menu-popup"
                        class="hidden absolute top-20 right-0 w-40 z-40 h-full flex justify-center items-center">
                        <div class="bg-white border border-black rounded-lg w-full">
                            <section class="w-full h-full py-2">
                                <a href=""
                                    class="w-full px-3.5 py-3 justify-start items-start gap-3 inline-flex hover:bg-gray-300">
                                    </span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.2599 3.59997L5.04985 12.29C4.73985 12.62 4.43985 13.27 4.37985 13.72L4.00985 16.96C3.87985 18.13 4.71985 18.93 5.87985 18.73L9.09985 18.18C9.54985 18.1 10.1799 17.77 10.4899 17.43L18.6999 8.73997C20.1199 7.23997 20.7599 5.52997 18.5499 3.43997C16.3499 1.36997 14.6799 2.09997 13.2599 3.59997Z"
                                            stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M11.8901 5.04999C12.3201 7.80999 14.5601 9.91999 17.3401 10.2"
                                            stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M3 22H21" stroke="black" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <h1 class="w-full text-gray-800 text-base font-normal font-poppins leading-normal">Edit
                                    </h1>
                                </a>
                            </section>
                            <section class="h-px relative">
                                <span class="w-full h-px left-0 top-0 absolute bg-black/30"></span>
                            </section>
                            <section class="w-full h-full py-2">
                                <a href="{{ route('admin.material') }}"
                                    class="w-full px-3.5 py-3 justify-start items-start gap-3 inline-flex hover:bg-gray-300">
                                    <span class="w-6 h-6 relative">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 5.97998C17.67 5.64998 14.32 5.47998 10.98 5.47998C9 5.47998 7.02 5.57998 5.04 5.77998L3 5.97998"
                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97"
                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M18.8499 9.14001L18.1999 19.21C18.0899 20.78 17.9999 22 15.2099 22H8.7899C5.9999 22 5.9099 20.78 5.7999 19.21L5.1499 9.14001"
                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10.3301 16.5H13.6601" stroke="black" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.5 12.5H14.5" stroke="black" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <h1 class="w-full text-gray-800 text-base font-normal font-poppins leading-normal">
                                        Hapus</h1>
                                </a>
                            </section>
                        </div>
                    </div>
                </section>
                <section class="self-stretch justify-start items-start gap-2.5 inline-flex">
                    <p class="grow shrink basis-0 text-[#fffffe] text-base font-normal font-fredoka leading-normal">
                        Ready to start your day with us?
                    </p>
                </section>
            </section>
        </article>

        <!-- Form Add Material -->
        <form class="w-11/12 h-full flex-col justify-start items-start gap-5 inline-flex">
            <section class="justify-start items-center gap-12 inline-flex">
                <h1 class="text-gray-800 text-base font-medium font-nunito leading-normal">Subject</h1>
                <section class="justify-start items-center gap-2.5 flex">
                    <span class="w-full h-6 relative"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 10.9995V15.9995M12 20.9995C7.02944 20.9995 3 16.9701 3 11.9995C3 7.02895 7.02944 2.99951 12 2.99951C16.9706 2.99951 21 7.02895 21 11.9995C21 16.9701 16.9706 20.9995 12 20.9995ZM12.0498 7.99951V8.09951L11.9502 8.09949V7.99951H12.0498Z"
                                stroke="#E45858" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <section class="w-full flex-col justify-start items-start gap-1 inline-flex">
                        <section
                            class=" h-12 rounded-lg py-2  border border-gray-800 flex-col justify-start items-start flex">
                            <div class=" h-full justify-start items-start inline-flex">
                                <input
                                    class="h-full px-2 grow shrink basis-0 text-gray-800 text-base font-normal font-poppins focus:outline-none leading-normal"
                                    placeholder="Judul Materi" required>
                                </input>
                            </div>
                        </section>
                    </section>
                </section>
            </section>
            <section class="w-full self-stretch justify-start items-start gap-[38px] inline-flex">
                <h1 class="text-gray-800 text-base font-medium font-nunito leading-normal">Message</h1>
                <div class="justify-start items-start gap-2.5 flex">
                    <div class="w-6 h-6 relative"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 10.9995V15.9995M12 20.9995C7.02944 20.9995 3 16.9701 3 11.9995C3 7.02895 7.02944 2.99951 12 2.99951C16.9706 2.99951 21 7.02895 21 11.9995C21 16.9701 16.9706 20.9995 12 20.9995ZM12.0498 7.99951V8.09951L11.9502 8.09949V7.99951H12.0498Z"
                                stroke="#E45858" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <section class="w-[700px] h-[270px] bg-white rounded-lg border px-2 py-2 border-gray-800">
                        <textarea class="w-full h-full text-black text-base font-normal font-poppins leading-normal focus:outline-none"
                            placeholder="Isi Materi" required></textarea>
                </div>
            </section>
            <section class="self-stretch justify-start items-start gap-[51px] inline-flex">
                <h1 class="text-gray-800 text-base font-medium font-nunito leading-normal">Attachment</h1>
                <div id="drop-zone"
                    class="w-[700px] h-[166px] p-2.5 bg-white rounded-sm border border-gray-800 flex-col justify-start items-start gap-2.5 inline-flex cursor-pointer"
                    onclick="document.getElementById('file-input').click()" ondragover="event.preventDefault()"
                    ondrop="handleFileDrop(event)">
                    <div class="w-6 h-6 relative"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="pin">
                                <path id="clip_2_"
                                    d="M7.93517 13.7796L15.1617 6.55304C16.0392 5.67631 17.4657 5.67631 18.3432 6.55304C19.2206 7.43052 19.2206 8.85774 18.3432 9.73522L8.40091 19.5477C6.9362 21.0124 4.56325 21.0124 3.09854 19.5477C1.63382 18.0837 1.63382 15.7093 3.09854 14.2453L12.9335 4.53784C14.984 2.48739 18.3094 2.48739 20.3569 4.53784C22.4088 6.58904 22.4088 9.91146 20.3584 11.9619L13.239 19.082"
                                    stroke="black" stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="w-full h-[108px] border border-black flex-col justify-center items-center gap-2.5 flex">
                        <div class="w-6 h-6 relative"><svg width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 2.25C14.1381 2.25 14.25 2.36193 14.25 2.5V8.14706C14.25 8.56127 14.5858 8.89706 15 8.89706H19.5C19.6381 8.89706 19.75 9.00899 19.75 9.14706V19C19.75 20.5188 18.5188 21.75 17 21.75H7C5.48122 21.75 4.25 20.5188 4.25 19V5C4.25 3.48122 5.48122 2.25 7 2.25H14Z"
                                    fill="#2B2C34" />
                                <path
                                    d="M16.0862 2.63839C15.9426 2.5225 15.75 2.63964 15.75 2.82414V7.14706C15.75 7.28513 15.8619 7.39706 16 7.39706H19.2983C19.416 7.39706 19.4903 7.27302 19.4217 7.17745L16.4085 2.97955C16.3158 2.85036 16.2071 2.736 16.0862 2.63839Z"
                                    fill="#2B2C34" />
                            </svg>
                        </div>
                        <div class="text-black text-base font-light font-['Fredoka'] leading-normal">Tarik file kesini
                        </div>
                    </div>
                    <input id="file-input" type="file" class="hidden" />
                </div>
                <div id="file-preview" class="mt-4">
                    <h3 class="text-lg font-bold">Preview Files:</h3>
                    <ul id="file-list" class="list-disc pl-5"></ul>
                </div>
            </section>
            <section class="w-full flex gap-5 mx-32">
                <button type="submit" class="w-28 h-full px-6 py-2 bg-primary-0 rounded-lg text-white">
                    Submit
                </button>
                <button type="submit"
                    class="w-28 h-full px-6 py-2 bg-white rounded-lg text-primary-0 border-2 border-purple-300">
                    Batal
                </button>
            </section>
        </form>
    @endsection

    @section('script')
        <script>
            document.getElementById('setting-menu-toggle').addEventListener('click', function() {
                document.getElementById('setting-menu-popup').classList.toggle('hidden');
            });

            function handleFileDrop(event) {
                event.preventDefault();
                const inputElement = document.getElementById('file-input');
                if (event.dataTransfer && event.dataTransfer.files.length > 0) {
                    const files = event.dataTransfer.files;
                    updateFilePreview(files);
                }
            }

            function handleFileChange(event) {
                const files = event.target.files;
                updateFilePreview(files);
            }

            function updateFilePreview(files) {
                const fileList = document.getElementById('file-list');
                fileList.innerHTML = ''; // Clear previous preview
                Array.from(files).forEach((file) => {
                    const listItem = document.createElement('li');
                    listItem.className = 'flex items-center gap-2';
                    listItem.innerHTML = `
                <span class="font-medium">${file.name}</span>
                ${
                    file.type.startsWith('image/')
                        ? `<img src="${URL.createObjectURL(file)}" alt="${file.name}" class="w-20 h-20 object-cover rounded border border-gray-400">`
                        : '<span>[Non-image file]</span>'
                }
            `;
                    fileList.appendChild(listItem);
                });
            }
        </script>
    @endsection
