<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Happy Birthday, Nilam Sahfa!</title>
    <link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
    
    {{-- Konfigurasi Tailwind & Font tetap menggunakan CDN --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#f04299",
                        "background-light": "#f8f6f7",
                        "background-dark": "#221019",
                    },
                    fontFamily: {
                        display: ["Plus Jakarta Sans"],
                    },
                    borderRadius: { DEFAULT: "0.5rem", lg: "1rem", xl: "1.5rem", full: "9999px" },
                },
            },
        };
    </script>
    
    <link href="https://fonts.gstatic.com/" rel="preconnect"/>
    <link as="style" href="https://fonts.googleapis.com/css2?display=swap&family=Plus+Jakarta+Sans:wght@400;500;700;800" onload="this.rel='stylesheet'" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
    {{-- Library Confetti --}}
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <style>
        body {
            min-height: 100vh;
        }
        /* Custom scrollbar styling for photo album */
        .photo-scroll::-webkit-scrollbar {
            height: 6px;
        }
        .photo-scroll::-webkit-scrollbar-thumb {
            background: #f0429940;
            border-radius: 3px;
        }
        /* Mengatur agar teks di dalam elemen yang memiliki latar belakang terlihat jelas */
        .content-card {
            /* Card dibuat lebih opaque (95% opacity) dan blur agar kontras dengan BG yang ramai */
            background-color: rgba(255, 255, 255, 0.95); 
            backdrop-filter: blur(10px); 
            position: relative; 
            z-index: 20;
            border: 1px solid rgba(240, 66, 153, 0.7); 
        }
        .dark .content-card {
            /* Warna gelap disesuaikan */
            background-color: rgba(34, 16, 25, 0.95); 
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Styling untuk Countdown Clock */
        .countdown-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 8px;
            background: rgba(240, 66, 153, 0.1); /* Primary color background soft */
            border-radius: 8px;
            min-width: 60px;
        }
        .countdown-value {
            font-size: 1.5rem;
            font-weight: 800;
            color: #f04299; /* Primary color */
            line-height: 1;
        }
        .countdown-label {
            font-size: 0.75rem;
            font-weight: 500;
            color: #4b5563; /* Zinc-600 */
        }
        .dark .countdown-label {
            color: #d1d5db; /* Zinc-400 */
        }
        
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-zinc-900 dark:text-zinc-200">
    
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden pb-10 
                bg-fixed bg-cover bg-center" 
         style="background-image: url('{{ asset('images/image_e2c1e2.jpg') }}');">
         
        {{-- OVERLAY DITINGKATKAN (70%) AGAR TEKS UTAMA SANGAT JELAS DI ATAS BG YANG RAMAI --}}
        <div class="absolute inset-0 bg-white/70 dark:bg-black/60 z-10"></div>
        
        <main class="flex-grow relative z-20">
            
            {{-- Section: Hero/Ucapan Utama --}}
            <header class="flex flex-col items-center p-6 text-center">
                {{-- ID DITAMBAHKAN AGAR BISA DIUBAH OLEH JAVASCRIPT --}}
                <h1 id="main-title" class="text-5xl font-extrabold text-primary drop-shadow-xl mb-2 sm:text-6xl">🎉 Happy Birthday, Nilam Sahfa! 🎉</h1>
                <p id="main-subtitle" class="text-xl font-medium text-zinc-800 dark:text-zinc-200 drop-shadow-md">Semoga di umur saat ini membawa kebahagiaan dan kesuksesan yang berlimpah. ✨</p>
            </header>
            
            {{-- COUNTDOWN CLOCK --}}
            <section class="px-4 pb-8">
                <div class="content-card p-4 rounded-xl shadow-xl text-center">
                    <h3 id="countdown-title" class="text-lg font-bold text-zinc-700 dark:text-zinc-300 mb-3">Loading...</h3>
                    <div id="countdown-timer" class="flex justify-center space-x-3">
                        {{-- Timer items will be inserted here by JavaScript --}}
                    </div>
                </div>
            </section>
            
            <div class="px-4 mb-8">
                {{-- FOTO UTAMA --}}
                <div class="w-full bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden rounded-xl min-h-[350px] shadow-2xl" 
                        style='background-image: url("{{ asset('images/foto1.png') }}");'>
                </div>
            </div>

            {{-- QUOTE OF THE DAY --}}
            <section class="py-6">
                <div class="px-4">
                    <div class="content-card p-6 rounded-xl shadow-xl border-l-4 border-primary">
                        <h3 class="text-xl font-bold text-primary mb-2">💡 Pesan untuk Nilam</h3>
                        <p id="random-quote" class="text-zinc-700 dark:text-zinc-300 italic">
                            "Menjadi tua itu wajib, menjadi dewasa itu pilihan. Teruslah tumbuh dan berkembang, PROUD OF YOU HONEY."
                        </p>
                    </div>
                </div>
            </section>

            {{-- Section: Video Spesial dari Direktori Lokal --}}
            <section class="py-6">
                <h2 class="px-4 pb-4 text-2xl font-bold text-primary drop-shadow-md">🎬</h2>
                <div class="px-4">
                    <div class="relative w-full aspect-video rounded-xl overflow-hidden shadow-xl">
                        
                        <video 
        class="w-full h-full object-cover" 
        controls 
        poster="{{ asset('images/foto1.png') }}"
        autoplay 
        muted 
        loop>
        
        <source src="{{ asset('videos/videos3.mp4') }}" type="video/mp4"> 
        
        Browser Anda tidak mendukung tag video.
    </video>
                        
                    </div>
                </div>
            </section>
            
            {{-- Section: Photo Album (Carousel) --}}
            <section class="py-6">
                <h2 class="px-4 pb-4 text-2xl font-bold text-primary drop-shadow-md">📷</h2>
                <div class="flex overflow-x-auto photo-scroll [-ms-scrollbar-style:none] [scrollbar-width:none] pl-4 pr-1">
                    <div class="flex items-stretch gap-4">
                        
                        {{-- FOTO ALBUM 1 sampai 5 --}}
                        <div class="min-w-60 max-w-60 aspect-square rounded-lg overflow-hidden shadow-lg hover:shadow-xl transform hover:scale-[1.01] transition duration-300 ease-in-out">
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover" 
                                    style='background-image: url("{{ asset('images/foto1.png') }}");'></div>
                        </div>
                        <div class="min-w-60 max-w-60 aspect-square rounded-lg overflow-hidden shadow-lg hover:shadow-xl transform hover:scale-[1.01] transition duration-300 ease-in-out">
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover" 
                                    style='background-image: url("{{ asset('images/foto2.jpg') }}");'></div>
                        </div>
                        <div class="min-w-60 max-w-60 aspect-square rounded-lg overflow-hidden shadow-lg hover:shadow-xl transform hover:scale-[1.01] transition duration-300 ease-in-out">
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover" 
                                    style='background-image: url("{{ asset('images/foto3.png') }}");'></div>
                        </div>
                        <div class="min-w-60 max-w-60 aspect-square rounded-lg overflow-hidden shadow-lg hover:shadow-xl transform hover:scale-[1.01] transition duration-300 ease-in-out">
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover" 
                                    style='background-image: url("{{ asset('images/foto4.png') }}");'></div>
                        </div>
                        <div class="min-w-60 max-w-60 aspect-square rounded-lg overflow-hidden shadow-lg hover:shadow-xl transform hover:scale-[1.01] transition duration-300 ease-in-out">
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover" 
                                    style='background-image: url("{{ asset('images/foto5.jpg') }}");'></div>
                        </div>
                        <div class="min-w-60 max-w-60 aspect-square rounded-lg overflow-hidden shadow-lg hover:shadow-xl transform hover:scale-[1.01] transition duration-300 ease-in-out">
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover" 
                                    style='background-image: url("{{ asset('images/foto7.jpg') }}");'></div>
                    </div>
                    <div class="min-w-60 max-w-60 aspect-square rounded-lg overflow-hidden shadow-lg hover:shadow-xl transform hover:scale-[1.01] transition duration-300 ease-in-out">
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover" 
                                    style='background-image: url("{{ asset('images/foto8.jpg') }}");'></div>
                </div>
            </section>
            
            {{-- Section: Kotak Harapan dari PENGIRIM (Sli) --}}
            <section class="py-6">
                <div class="px-4">
                    <div class="content-card p-6 rounded-xl shadow-lg">
                        <h3 class="text-xl font-extrabold text-primary mb-3">Dari Sli yang paling baik hati dan tidak sombong iww❤️</h3>
                        <p class="text-zinc-800 dark:text-zinc-200 leading-relaxed italic border-b border-primary/20 pb-4 mb-4">
                            "Happy birthday, bocill! Terima kasih sudah selalu ada buat sli. Semoga hari-hari dalam setahun kedepan selalu penuh cinta dan kebahagiaan. semoga sli dan nilam selalu jalan bareng selalu bersama dan langgeng buat kita.
                            terus semangat untuk mengejar mimpi mu sayanggg. ada sli yang selalu support."
                        </p>
                        <div class="text-right text-sm font-medium text-zinc-700 dark:text-zinc-300">
                            <p class="not-italic">Sli yang baik hati dan tidak sombong.</p>
                            <p>Surabaya</p>
                            <p>03 November 2025</p>
                        </div>
                    </div>
                </div>
            </section>
            
            {{-- Section: Location (GMaps) --}}
            <section class="py-6">
                <h2 class="px-4 pb-4 text-2xl font-bold text-primary drop-shadow-md">📍 Lokasi Mukbang</h2>
                <div class="px-4 space-y-3">
                    <p class="text-lg font-semibold text-zinc-800 dark:text-zinc-200 drop-shadow-md">Tempat: Mukbang</p>
                    
                    <div class="w-full aspect-video rounded-xl overflow-hidden shadow-xl relative">
                        
                        <img 
                            src="{{ asset('images/foto6.jpg') }}" 
                            alt="Foto Lokasi Mukbang" 
                            class="w-full h-full object-cover">
                            
                        <div class="absolute inset-0 bg-black/20 flex items-center justify-center pointer-events-none">
                            <span class="text-white text-lg font-bold p-2 rounded-lg bg-black/50">Klik lokasi di bawah geysss.</span>
                        </div>
                        
                    </div>
                    
                    <div class="text-right">
                        <a href="https://maps.app.goo.gl/ujsmBQiuKCCM1fdHA" target="_blank" class="text-primary font-bold hover:underline transition duration-200">
                            Buka di Google Maps
                            <span class="material-symbols-outlined align-middle text-lg ml-1">open_in_new</span>
                        </a>
                    </div>
                </div>
            </section>
                
            {{-- Section D: Wishes (Database Connection Placeholder) --}}
            <section id="wishes" class="py-10">
                <h2 class="px-4 pb-4 text-2xl font-extrabold text-primary drop-shadow-md">💌 Tulis Harapan Nilam</h2>
                <div class="px-4">
                    <form action="{{ route('birthday.store_hope') }}" method="POST" class="space-y-4 content-card p-6 rounded-xl shadow-2xl">
                        @csrf
                        
                        <textarea name="content" class="form-textarea flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg bg-background-light dark:bg-background-dark border-zinc-300 dark:border-zinc-700 focus:border-primary focus:ring-primary min-h-36 p-4 text-base placeholder:text-zinc-400 dark:placeholder:text-zinc-500" placeholder="Tulis harapan untuk satu tahun kedepan" required></textarea>
                        
                        <div class="flex justify-end">
                            <button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-6 bg-primary text-white text-base font-bold shadow-lg shadow-primary/30 hover:bg-primary/90 transition duration-300" type="submit">
                                <span>Simpan Harapan</span>
                            </button>
                        </div>
                    </form>
                    
                </div>
            </section>
            
        </main>
        
        {{-- FITUR MUSIK (AUDIO) --}}
        <audio id="background-music" autoplay loop>
            <source src="{{ asset('audio/music.mp3') }}" type="audio/mp3" />
        </audio>
        
        {{-- NEW: AUDIO EFEK UNTUK PERAYAAN --}}
        <audio id="celebration-sound">
            <source src="{{ asset('audio/celebration.mp3') }}" type="audio/mp3" />
            <source src="{{ asset('audio/celebration.wav') }}" type="audio/wav" />
        </audio>


        <script>
            // --- DATA KONSTAN ---
            const BIRTHDAY_DATE = new Date('November 03, 2025 00:00:00').getTime();
            let isCelebrationTriggered = false; // Flag agar selebrasi hanya dipicu sekali

            const QUOTES = [
                "Satu tahun lagi telah berlalu, satu tahun keberanian, tawa, dan cinta menanti. Semangat terus!"
            ];
            
            // --- FUNGSI EFEK SELEBRASI UTAMA ---
            function triggerCelebration() {
                if (isCelebrationTriggered) return; // Jangan ulangi

                // 1. EFEK AUDIO
                const celebrationSound = document.getElementById('celebration-sound');
                if (celebrationSound) {
                    celebrationSound.play().catch(e => console.error("Celebration sound failed to play:", e));
                }
                
                // 2. EFEK VISUAL: CONFETTI
                // Kita panggil 3 kali untuk efek yang lebih meriah!
                const colors = ['#f04299', '#ffccdd', '#ffffff', '#ffd700']; // Pink, Light Pink, White, Gold
                
                // Confetti dari Kiri
                confetti({
                    particleCount: 150,
                    angle: 60,
                    spread: 55,
                    origin: { x: 0 },
                    colors: colors
                });

                // Confetti dari Kanan
                confetti({
                    particleCount: 150,
                    angle: 120,
                    spread: 55,
                    origin: { x: 1 },
                    colors: colors
                });

                // Confetti dari Atas Tengah
                confetti({
                    particleCount: 100,
                    spread: 70,
                    startVelocity: 65,
                    origin: { y: 0.6 }
                });


                // 3. UBAH TEKS UTAMA UNTUK DRAMA
                document.getElementById('main-title').innerHTML = "✨ SELAMAT ULANG TAHUN KE-21, NILAM! ✨";
                document.getElementById('main-subtitle').textContent = "Semoga semua harapan dan cita cita di umur ke 21 ini bisa terlaksana!";

                isCelebrationTriggered = true;
            }


            // --- FUNGSI COUNTDOWN TIMER ---
            function updateCountdown() {
                const now = new Date().getTime();
                const distance = BIRTHDAY_DATE - now;
                const countdownTitle = document.getElementById('countdown-title');
                const countdownTimer = document.getElementById('countdown-timer');

                if (distance > 0) {
                    // Ulang Tahun BELUM TIBA
                    countdownTitle.textContent = "🥳 Hitungan Mundur Menuju Ulang Tahun! 🥳";

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    countdownTimer.innerHTML = `
                        <div class="countdown-item"><span class="countdown-value">${days}</span><span class="countdown-label">Hari</span></div>
                        <div class="countdown-item"><span class="countdown-value">${hours}</span><span class="countdown-label">Jam</span></div>
                        <div class="countdown-item"><span class="countdown-value">${minutes}</span><span class="countdown-label">Menit</span></div>
                        <div class="countdown-item"><span class="countdown-value">${seconds}</span><span class="countdown-label">Detik</span></div>
                    `;
                } else {
                    // Ulang Tahun SUDAH TIBA / TERLEWATI
                    triggerCelebration(); // Panggil selebrasi!

                    countdownTitle.textContent = "🎂 Happy Birthday BOCILLLL! 🎂";
                    
                    const daysSince = Math.floor((now - BIRTHDAY_DATE) / (1000 * 60 * 60 * 24));
                    
                    countdownTimer.innerHTML = `
                        <div class="countdown-item !min-w-[100px]"><span class="countdown-value text-3xl sm:text-4xl">${daysSince}</span><span class="countdown-label">Hari Sejak Ultah!</span></div>
                    `;
                    clearInterval(countdownInterval); // Hentikan timer
                }
            }

            // --- FUNGSI QUOTE RANDOM ---
            function displayRandomQuote() {
                const quoteElement = document.getElementById('random-quote');
                if (quoteElement) {
                    const randomIndex = Math.floor(Math.random() * QUOTES.length);
                    quoteElement.textContent = `"${QUOTES[randomIndex]}"`;
                }
            }

            // --- FUNGSI AUDIO PLAYER ---
            function setupAudioPlayer() {
                const audio = document.getElementById('background-music');
                const toggleButton = document.createElement('button');
                toggleButton.id = 'music-toggle';
                toggleButton.className = 'fixed bottom-5 right-5 z-50 flex items-center justify-center w-14 h-14 rounded-full bg-primary text-white shadow-xl hover:scale-105 transition-transform duration-300';
                toggleButton.innerHTML = '<span id="music-icon" class="material-symbols-outlined text-3xl">volume_off</span>';
                document.body.appendChild(toggleButton);

                const musicIcon = document.getElementById('music-icon');
                let isPlaying = false; 

                if (audio) {
                    audio.muted = true; 
                    audio.play().catch(error => console.log("Autoplay audio diblokir:", error));

                    document.body.addEventListener('click', function() {
                        if (audio.muted) {
                            audio.muted = false;
                            musicIcon.textContent = 'music_note';
                            isPlaying = true;
                            audio.play().catch(e => console.log('Play on click failed:', e));
                        }
                    }, { once: true }); 
                    
                    toggleButton.addEventListener('click', function() {
                        if (isPlaying) {
                            audio.pause();
                            musicIcon.textContent = 'volume_off'; 
                            isPlaying = false;
                        } else {
                            audio.muted = false;
                            audio.play().catch(e => console.error("Play failed:", e));
                            musicIcon.textContent = 'music_note'; 
                            isPlaying = true;
                        }
                    });
                }
            }


            // --- INITIALIZATION ---
            let countdownInterval;
            document.addEventListener('DOMContentLoaded', function() {
                // 1. Setup Audio
                setupAudioPlayer();

                // 2. Setup Countdown
                updateCountdown();
                countdownInterval = setInterval(updateCountdown, 1000);

                // 3. Setup Random Quote
                displayRandomQuote();
            });
        </script>
    </div>
</body>
</html>
