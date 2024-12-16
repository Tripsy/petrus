<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clasa 6D - Liceul Teoretic "Ioan Petruş" Otopeni</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link data-theme="light" rel="stylesheet" href="{{ asset('css/app.css') }}" />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Third party -->
        <script src="https://kit.fontawesome.com/0a84b39707.js" crossorigin="anonymous" defer></script>

        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/js/splide-extension-video.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/css/splide-extension-video.min.css">
    </head>

    <body class="font-sans antialiased bg-gray-50 dark:bg-black text-black/60 dark:text-white/60">
        <img class="fixed -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
        <div class="fixed z-[999] text-[#3c4043] top-0 w-full bg-white/60 flex gap-4 px-4 py-2 rounded-b-lg drop-shadow-lg">
            <a href="#gallery"><i class="fa-solid fa-images"></i> Pozele noastre</a>
            <a href="#class-members"><i class="fa-solid fa-user-group"></i> Colegii mei</a>
            <a href="#teachers"><i class="fa-solid fa-graduation-cap"></i> Lista profesori</a>
            <a href="#schedule"><i class="fa-solid fa-calendar-days"></i> Orar</a>
        </div>
        <div class="relative min-h-screen flex flex-col items-center">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="mt-16 text-center py-6 text-black/80 dark:text-white/90">
                    <h1 class="font-bold text-4xl">
                        <i class="fa-solid fa-dove"></i> Liceul Teoretic "Ioan Petruş" Otopeni
                    </h1>
                    <div class="font-bold text-3xl flex justify-center items-center mt-6">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <h2 class="inline-block text-5xl mx-4">
                            Clasa 6B
                        </h2>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h3 class="font-bold text-2xl">
                        "Esti bun!"
                    </h3>
                </header>

                <main class="mt-6 flex flex-col gap-6">
                    <div id="gallery" class="rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] dark:bg-zinc-900">
                        <div class="splide" role="group" aria-label="Splide Basic">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/a.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/start.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/1.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/2.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/3.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/b.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/c.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/4.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/5.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/6.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/7.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/8.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/9.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/10.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/11.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/12.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/13.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/14.jpg') }}" alt=""></li>
                                    <li class="splide__slide flex items-center justify-center max-h-[640px]"><img src="{{ asset('images/gallery/15.jpg') }}" alt=""></li>
                                </ul>
                            </div>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const splide = new Splide('.splide', {
                                    type   : 'loop',
                                    autoHeight: true,
                                })
                                splide.mount()
                            })
                        </script>
                    </div>

                    <div id="class-members" class="rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] dark:bg-zinc-900">
                        <div class="flex items-center">
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#70ff20]/20">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-2">
                                Colegii mei de clasa
                            </h2>
                        </div>

                        <div class="class-members mt-4" id="class-members-list">
                            @foreach($classMembers as $k => $student)
                                <div id="student-{{ $k  }}" class="class-student" draggable="true">
                                    <i class="{{ $student['icon'] }}"></i> {{ $student['name'] }}
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4 grid grid-cols-3 gap-6">
                            <div class="class-column bg-[#002B7F]/30">
                                @for ($i = 1; $i <= $countClassRows; $i++)
                                    <div class="class-row" id="class-row-a-{{ $i }}">
                                        <div class="class-row-number">
                                            {{ $i }}
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="class-column bg-[#FCD116]/40">
                                @for ($i = 1; $i <= $countClassRows; $i++)
                                    <div class="class-row" id="class-row-b-{{ $i }}">
                                        <div class="class-row-number" >
                                            {{ $i }}
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="class-column bg-[#CE1126]/40">
                                @for ($i = 1; $i <= $countClassRows; $i++)
                                    <div class="class-row" id="class-row-c-{{ $i }}">
                                        <div class="class-row-number" >
                                            {{ $i }}
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <div id="teachers" class="rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] dark:bg-zinc-900">
                        <div class="flex items-center">
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#70ff20]/20">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-2">
                                Lista profesori
                            </h2>
                        </div>

                        <div class="mt-4">
                            <ol class="list-decimal pl-4 space-y-2">
                                @foreach ($classTeachers as $teacher)
                                    <li>{{ $teacher['suffix'] }} {{ $teacher['name'] }} / {{ $teacher['discipline'] }}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>

                    <div id="schedule" class="rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] dark:bg-zinc-900">
                        <div class="flex items-center">
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#70ff20]/20">
                                <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-2">
                                Orar
                            </h2>
                        </div>

                        <div class="mt-4">
                            <table class="w-full" style="border-collapse: separate; border-spacing: 0.375rem 0.375rem;">
                                <thead>
                                    <tr>
                                        <th class="p-2"></th>
                                        <th class="p-2 border border-slate-300">Luni</th>
                                        <th class="p-2 border border-slate-300">Marti</th>
                                        <th class="p-2 border border-slate-300">Miercuri</th>
                                        <th class="p-2 border border-slate-300">Joi</th>
                                        <th class="p-2 border border-slate-300">Vineri</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2 border border-slate-300 text-center font-semibold">
                                            12:00 - 12:50
                                        </td>
                                        <td class="p-2 border border-slate-300 text-center">/</td>
                                        <td class="p-2 border border-slate-300">Limba engleza</td>
                                        <td class="p-2 border border-slate-300 text-center">/</td>
                                        <td class="p-2 border border-slate-300">Educatie fizica si sport</td>
                                        <td class="p-2 border border-slate-300 text-center">/</td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border border-slate-300 text-center font-semibold">
                                            13:00 - 13:50
                                        </td>
                                        <td class="p-2 border border-slate-300 text-center">/</td>
                                        <td class="p-2 border border-slate-300">Educatie fizica si sport</td>
                                        <td class="p-2 border border-slate-300 text-center">/</td>
                                        <td class="p-2 border border-slate-300">Matematica</td>
                                        <td class="p-2 border border-slate-300 text-center">/</td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border border-slate-300 text-center font-semibold">
                                            14:00 - 14:50
                                        </td>
                                        <td class="p-2 border border-slate-300">Dirigentie</td>
                                        <td class="p-2 border border-slate-300">Limba franceza</td>
                                        <td class="p-2 border border-slate-300">Engleza</td>
                                        <td class="p-2 border border-slate-300">Educatie plastica</td>
                                        <td class="p-2 border border-slate-300">TIC</td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border border-slate-300 text-center font-semibold">
                                            15:00 - 15:50
                                        </td>
                                        <td class="p-2 border border-slate-300">Limba engleza</td>
                                        <td class="p-2 border border-slate-300">Educatie tehnlogica</td>
                                        <td class="p-2 border border-slate-300">Engleza</td>
                                        <td class="p-2 border border-slate-300">Fizica</td>
                                        <td class="p-2 border border-slate-300">Religie</td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border border-slate-300 text-center font-semibold">
                                            16:00 - 16:50
                                        </td>
                                        <td class="p-2 border border-slate-300">Limba franceza</td>
                                        <td class="p-2 border border-slate-300">Matematica</td>
                                        <td class="p-2 border border-slate-300">Istorie</td>
                                        <td class="p-2 border border-slate-300">Matematica</td>
                                        <td class="p-2 border border-slate-300">Matematica</td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border border-slate-300 text-center font-semibold">
                                            17:00 - 17:50
                                        </td>
                                        <td class="p-2 border border-slate-300">Educatie sociala</td>
                                        <td class="p-2 border border-slate-300">Geografie</td>
                                        <td class="p-2 border border-slate-300">Limba si literatura romana</td>
                                        <td class="p-2 border border-slate-300">Limba si literatura romana</td>
                                        <td class="p-2 border border-slate-300">Biologie</td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border border-slate-300 text-center font-semibold">
                                            18:00 - 18:50
                                        </td>
                                        <td class="p-2 border border-slate-300">Fizica</td>
                                        <td class="p-2 border border-slate-300">Limba si literatura romana</td>
                                        <td class="p-2 border border-slate-300">Biologie</td>
                                        <td class="p-2 border border-slate-300">Limba si literatura romana</td>
                                        <td class="p-2 border border-slate-300">Educatie muzicala</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>

                <footer class="py-16">
                    <div class="text-center text-4xl">
                        Success la scoala!
                    </div>
                    <div class="mt-4 flex justify-center gap-8">
                        <video class="h-[548px]" controls>
                            <source src="{{ asset('images/gallery/1.mp4') }}" type="video/mp4">
                        </video>
                        <video class="h-[548px]" controls>
                            <source src="{{ asset('images/gallery/2.mp4') }}" type="video/mp4">
                        </video>
                        <video class="h-[548px]" controls>
                            <source src="{{ asset('images/gallery/3.mp4') }}" type="video/mp4">
                        </video>
                        <video class="h-[548px]" controls>
                            <source src="{{ asset('images/gallery/4.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="mt-8 text-sm italic">
                        &copy; Material educativ pentru elevi folosit in data de 17 decembrie 2024 - "Saptamana altfel"; Autori: Gabriel David / Raluca Maria David; Contribuitori: Pricop Nicoleta, Laura Ruiu
                    </div>
                </footer>
            </div>
        </div>

        <script>
            // Initialize the state
            let state = {};

            // Load saved state from localStorage
            function loadState() {
                const savedState = localStorage.getItem('dragDropState');

                if (savedState) {
                    state = JSON.parse(savedState);

                    // Render students based on saved state
                    Object.keys(state).forEach((containerId) => {
                        const container = document.getElementById(containerId);

                        if (container) {
                            // // Clear existing students
                            // container.innerHTML = '';

                            // Append students to the container
                            state[containerId].forEach((studentId) => {
                                const student = document.getElementById(studentId);

                                if (student) {
                                    container.appendChild(student);
                                }
                            });
                        }
                    });
                }
            }

            // Save the current state to localStorage
            function saveState() {
                const containers = document.querySelectorAll('.class-row, .class-members');
                const newState = {};

                containers.forEach((container) => {
                    const containerId = container.id;

                    newState[containerId] = Array.from(container.querySelectorAll('.class-student')).map(
                        (student) => student.id
                    );
                });

                // Save to localStorage
                localStorage.setItem('dragDropState', JSON.stringify(newState));
                state = newState; // Update the in-memory state
            }

            // Setup drag for `class-student`
            document.querySelectorAll('.class-student').forEach((student) => {
                student.addEventListener('dragstart', (event) => {
                    event.dataTransfer.setData("application/my-app", event.target.id);
                    event.dataTransfer.effectAllowed = "move";
                });
            });

            // Setup drop for `.class-row` and `.class-members`
            document.querySelectorAll('.class-row, .class-members').forEach((container) => {
                container.addEventListener('drop', (event) => {
                    event.preventDefault();

                    // Ensure the target is a valid drop zone
                    if (!event.target.classList.contains('class-row') && !event.target.classList.contains('class-members')) {
                        return;
                    }

                    // Get the ID of the dragged element
                    const data = event.dataTransfer.getData("application/my-app");
                    const draggedElement = document.getElementById(data);

                    if (draggedElement) {
                        // Check for maximum students in `class-row`
                        if (event.target.classList.contains('class-row')) {
                            const countStudents = event.target.querySelectorAll('.class-student').length;
                            if (countStudents >= 2) {
                                return;
                            }
                        }

                        // Append the dragged student to the target container
                        event.target.appendChild(draggedElement);

                        // Save the state after the move
                        saveState();
                    }
                });

                container.addEventListener('dragover', (event) => {
                    event.preventDefault();
                    event.dataTransfer.dropEffect = "move";
                });
            });

            // Load the state on page load
            loadState();
        </script>
    </body>
</html>
