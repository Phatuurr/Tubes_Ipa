<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Averroes Community | Impactful Volunteers</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#f8fafc] font-sans selection:bg-yellow-averroes selection:text-navy">

    <nav x-data="{ open: false, scrolled: false }" 
         @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
         :class="scrolled ? 'glass-nav py-4' : 'bg-transparent py-6'"
         class="fixed w-full z-50 transition-all duration-300 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-yellow-averroes rounded-lg flex items-center justify-center font-bold text-navy">A</div>
                <span class="text-xl font-black tracking-tighter text-white">AVERROES.</span>
            </div>
            
            <div class="hidden md:flex items-center gap-10">
                <a href="#home" class="text-white hover:text-yellow-averroes transition-colors font-medium">Home</a>
                <a href="#about" class="text-white hover:text-yellow-averroes transition-colors font-medium">About</a>
                <a href="#contact" class="px-6 py-2.5 bg-yellow-averroes text-navy font-bold rounded-full hover:scale-105 active:scale-95 transition-all shadow-lg shadow-yellow-averroes/20">Contact Us</a>
            </div>

            <button @click="open = !open" class="md:hidden text-yellow-averroes">
                <svg x-show="!open" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                <svg x-show="open" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <div x-show="open" x-transition class="absolute top-full left-0 w-full bg-navy p-6 flex flex-col gap-4 md:hidden border-t border-white/10 shadow-2xl">
            <a href="#home" @click="open = false" class="text-white text-lg">Home</a>
            <a href="#about" @click="open = false" class="text-white text-lg">About</a>
            <a href="#contact" @click="open = false" class="text-yellow-averroes font-bold text-lg">Contact Us</a>
        </div>
    </nav>

    <section id="home" class="relative min-h-screen flex items-center bg-navy pt-20 overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-yellow-averroes/10 blur-[120px] rounded-full -mr-48 -mt-48"></div>
        
        <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <div data-aos="fade-right">
                <div class="inline-block px-4 py-1.5 bg-white/5 border border-white/10 rounded-full mb-6">
                    <span class="text-yellow-averroes text-sm font-semibold tracking-wide uppercase">✨ Social Community Movement</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-black text-white leading-tight">
                    Wadah Aksi <br> <span class="text-yellow-averroes">Nyata Volunteer</span>
                </h1>
                <p class="mt-8 text-slate-400 text-lg leading-relaxed max-w-xl">
                    Bergabunglah bersama Averroes Community untuk memberikan dampak positif bagi lingkungan sekitar melalui program edukasi dan sosial yang inovatif.
                </p>
                <div class="mt-10 flex flex-wrap gap-5">
                    <a href="#contact" class="px-8 py-4 bg-yellow-averroes text-navy font-black rounded-2xl hover:shadow-[0_0_30px_rgba(250,204,21,0.4)] transition-all">MULAI BERAKSI</a>
                    <button class="px-8 py-4 bg-white/5 text-white border border-white/20 rounded-2xl hover:bg-white/10 transition-all">Lihat Dokumentasi</button>
                </div>
            </div>
            
            <div class="relative flex justify-center lg:justify-end" data-aos="zoom-in">
                <div class="relative w-full max-w-md animate-float">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800" class="rounded-[40px] shadow-2xl border-2 border-white/10 rotate-3 grayscale hover:grayscale-0 transition-all duration-500" alt="Team Work">
                    <div class="absolute -bottom-6 -left-6 bg-yellow-averroes p-6 rounded-3xl shadow-xl hidden sm:block">
                        <p class="text-navy font-black text-3xl">500+</p>
                        <p class="text-navy/70 text-sm font-bold">Volunteer Aktif</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-32 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-20" data-aos="fade-up">
                <h2 class="text-4xl font-black text-navy mb-4 italic uppercase">Visi & Misi Kami</h2>
                <div class="h-1.5 w-24 bg-yellow-averroes mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div data-aos="fade-up" data-aos-delay="100" class="group p-10 rounded-[40px] bg-slate-50 border border-slate-100 hover:bg-navy hover:-translate-y-4 transition-all duration-500">
                    <div class="w-16 h-16 bg-navy text-yellow-averroes rounded-2xl flex items-center justify-center mb-8 group-hover:bg-yellow-averroes group-hover:text-navy transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 group-hover:text-white transition-colors">Edukasi Merata</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 transition-colors leading-relaxed text-sm">Memberikan akses pelatihan skill digital secara gratis untuk masyarakat di pelosok daerah.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="group p-10 rounded-[40px] bg-yellow-averroes shadow-2xl shadow-yellow-averroes/30 hover:-translate-y-4 transition-all duration-500">
                    <div class="w-16 h-16 bg-navy text-yellow-averroes rounded-2xl flex items-center justify-center mb-8">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-navy">Kolaborasi Tim</h3>
                    <p class="text-navy/70 leading-relaxed text-sm font-medium">Membangun jaringan antar komunitas untuk memperbesar skala dampak aksi sosial di seluruh Indonesia.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="300" class="group p-10 rounded-[40px] bg-slate-50 border border-slate-100 hover:bg-navy hover:-translate-y-4 transition-all duration-500">
                    <div class="w-16 h-16 bg-navy text-yellow-averroes rounded-2xl flex items-center justify-center mb-8 group-hover:bg-yellow-averroes group-hover:text-navy transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 group-hover:text-white transition-colors">Peka Sosial</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 transition-colors leading-relaxed text-sm">Tanggap terhadap isu-isu kemanusiaan dan bencana alam dengan sistem penggalangan dana terpercaya.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-32 bg-slate-50 relative overflow-hidden">
        <div class="container mx-auto px-6 flex flex-col items-center">
            <div data-aos="flip-down" class="w-full max-w-4xl bg-navy rounded-[50px] overflow-hidden shadow-2xl flex flex-col lg:flex-row border-4 border-yellow-averroes/10">
                <div class="lg:w-2/5 p-12 bg-yellow-averroes flex flex-col justify-between">
                    <div>
                        <h2 class="text-3xl font-black text-navy leading-tight mb-6 uppercase italic">Siap Terjun Ke Lapangan?</h2>
                        <p class="text-navy/70 font-bold mb-8 italic uppercase tracking-wider text-sm">Hubungi kami melalui form ini dan tim kami akan segera membalas pesan Anda.</p>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 text-navy font-bold">
                            <span class="w-8 h-8 bg-navy text-yellow-averroes rounded-full flex items-center justify-center">📍</span>
                            Subang - Bandung, INA
                        </div>
                    </div>
                </div>

                <div class="lg:w-3/5 p-12 bg-navy">
                    <form class="space-y-6">
                        <div class="space-y-4">
                            <input type="text" placeholder="Nama Lengkap" class="w-full bg-white/5 border border-white/10 px-6 py-4 rounded-2xl text-white outline-none focus:border-yellow-averroes transition-all italic">
                            <input type="email" placeholder="Email Aktif" class="w-full bg-white/5 border border-white/10 px-6 py-4 rounded-2xl text-white outline-none focus:border-yellow-averroes transition-all italic">
                            <textarea rows="4" placeholder="Apa misi yang ingin kamu diskusikan?" class="w-full bg-white/5 border border-white/10 px-6 py-4 rounded-2xl text-white outline-none focus:border-yellow-averroes transition-all italic"></textarea>
                        </div>
                        <button class="w-full py-5 bg-yellow-averroes text-navy font-black rounded-2xl hover:bg-yellow-400 transition-all uppercase italic tracking-widest shadow-xl shadow-yellow-averroes/10">Kirim Sekarang</button>
                    </form>
                </div>
            </div>
            
            <footer class="mt-20 text-slate-400 text-sm font-medium">
                &copy; 2026 Averroes Community. Made with Laravel & Tailwind CSS.
            </footer>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out-quad'
        });
    </script>
</body>
</html>