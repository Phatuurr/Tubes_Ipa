<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Averroes Community | Brighter Together</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-950 text-white font-sans selection:bg-averroes-yellow selection:text-premium-blue">

    <nav x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
         :class="scrolled ? 'bg-premium-blue/80 backdrop-blur-md py-4 shadow-2xl' : 'bg-transparent py-8'"
         class="fixed w-full z-50 transition-all duration-500 px-6 lg:px-20">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-averroes-yellow rounded-2xl flex items-center justify-center font-black text-premium-blue rotate-3 shadow-xl">A</div>
                <span class="text-2xl font-black tracking-tighter uppercase italic">Averroes.</span>
            </div>
            <div class="hidden md:flex items-center gap-12 font-bold text-xs tracking-[0.2em] uppercase">
                <a href="#home" class="hover:text-averroes-yellow transition-colors">Home</a>
                <a href="#about" class="hover:text-averroes-yellow transition-colors">About</a>
                <a href="#contact" class="px-8 py-3 bg-white text-premium-blue rounded-full hover:bg-averroes-yellow transition-all shadow-lg">Join Movement</a>
            </div>
        </div>
    </nav>

    <section id="home" class="relative min-h-screen flex items-center pt-20 bg-premium-blue overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-30">
            <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-averroes-yellow/20 blur-[150px] rounded-full"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-blue-400/20 blur-[150px] rounded-full"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 grid lg:grid-cols-12 gap-12">
            <div class="lg:col-span-7" data-aos="fade-right">
                <h1 class="text-7xl lg:text-9xl font-black leading-[0.85] tracking-tighter uppercase mb-8">
                    Brighter <br> <span class="text-gradient">Together.</span>
                </h1>
                <p class="text-lg text-slate-300 max-w-xl leading-relaxed mb-12">
                    Memberdayakan pemuda Kota Bandung untuk menghadapi tantangan ekonomi & sosial melalui kreativitas, inklusivitas, dan teknologi[cite: 12, 14].
                </p>
                <div class="flex flex-wrap gap-6">
                    <a href="#contact" class="px-12 py-6 bg-averroes-yellow text-premium-blue font-black rounded-2xl hover:scale-105 transition-transform uppercase tracking-widest">Get Started</a>
                </div>
            </div>
            
            <div class="lg:col-span-5 relative" data-aos="zoom-in" data-aos-delay="200">
                <div class="aspect-square bg-white/5 rounded-[4rem] border border-white/10 p-4 relative overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=800" 
                         class="w-full h-full object-cover rounded-[3.5rem] grayscale group-hover:grayscale-0 transition-all duration-700" alt="Team">
                    <div class="absolute inset-0 bg-gradient-to-t from-premium-blue/80 to-transparent"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-premium-blue text-center">
                <div data-aos="fade-up">
                    <p class="text-5xl font-black italic">500+</p>
                    <p class="text-xs font-bold uppercase tracking-widest mt-2 text-slate-400">Volunteers</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <p class="text-5xl font-black italic">12+</p>
                    <p class="text-xs font-bold uppercase tracking-widest mt-2 text-slate-400">Programs</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <p class="text-5xl font-black italic">100%</p>
                    <p class="text-xs font-bold uppercase tracking-widest mt-2 text-slate-400">Social Impact</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <p class="text-5xl font-black italic">City</p>
                    <p class="text-xs font-bold uppercase tracking-widest mt-2 text-slate-400">Bandung Based [cite: 12]</p>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="py-32 bg-slate-50 text-premium-blue">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24" data-aos="fade-up">
                <span class="text-averroes-yellow bg-premium-blue px-6 py-2 rounded-full font-bold text-xs uppercase tracking-[0.3em]">Identity</span>
                <h2 class="text-5xl lg:text-7xl font-black uppercase italic mt-6 leading-none tracking-tighter">Who We Are.</h2>
            </div>

            <div class="grid lg:grid-cols-12 gap-8">
                <div class="lg:col-span-8 bg-white p-12 rounded-[4rem] shadow-sm border border-slate-100 hover:shadow-2xl transition-all" data-aos="fade-right">
                    <h3 class="text-3xl font-black mb-8 italic uppercase text-averroes-yellow bg-premium-blue inline-block px-6 py-2 rounded-xl">Visi Kami [cite: 18]</h3>
                    <p class="text-2xl lg:text-4xl font-bold leading-tight italic">
                        "Membantu generasi muda yang kreatif, inovatif, dan berdaya untuk memberikan dampak positif bagi masyarakat"[cite: 19].
                    </p>
                    <div class="mt-12 h-1 w-24 bg-averroes-yellow"></div>
                    <p class="mt-8 text-slate-500 max-w-2xl">
                        Averroes berperan sebagai jembatan untuk memfasilitasi pengembangan kewirausahaan dan keterampilan digital pemuda[cite: 13].
                    </p>
                </div>

                <div class="lg:col-span-4 grid gap-8">
                    <div class="bg-premium-blue p-10 rounded-[4rem] text-white bento-inner" data-aos="fade-left">
                        <span class="text-3xl mb-4 block">📈</span>
                        <h4 class="font-black uppercase italic text-xl mb-4 leading-none">Edukasi [cite: 26]</h4>
                        <p class="text-sm text-slate-400 font-medium">Mengedukasi pemuda tentang pentingnya peran mereka dalam pembangunan sosial[cite: 26].</p>
                    </div>
                    <div class="bg-averroes-yellow p-10 rounded-[4rem] text-premium-blue bento-inner shadow-xl shadow-averroes-yellow/20" data-aos="fade-left" data-aos-delay="200">
                        <span class="text-3xl mb-4 block">💡</span>
                        <h4 class="font-black uppercase italic text-xl mb-4 leading-none">Kolaborasi [cite: 27]</h4>
                        <p class="text-sm text-premium-blue/70 font-bold">Mendorong kolaborasi antar pemuda melalui berbagi kegiatan kreatif[cite: 27].</p>
                    </div>
                </div>

                <div class="lg:col-span-4 bg-slate-200 p-10 rounded-[4rem] bento-inner" data-aos="fade-up">
                    <h4 class="font-black uppercase italic text-xl mb-4">Aksi Sosial [cite: 28]</h4>
                    <p class="text-sm text-slate-600 font-medium leading-relaxed">Menggerakan aksi-aksi sosial yang membantu masyarakat kurang mampu[cite: 28].</p>
                </div>
                <div class="lg:col-span-8 bg-white p-10 rounded-[4rem] border border-slate-100 bento-inner" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="w-20 h-20 bg-premium-blue rounded-3xl flex items-center justify-center text-white text-3xl">💻</div>
                        <div>
                            <h4 class="font-black uppercase italic text-xl mb-2">Pelatihan Keterampilan [cite: 30]</h4>
                            <p class="text-sm text-slate-500 font-medium">Berbasis teknologi, seni, dan kewirausahaan untuk pengembangan diri[cite: 30, 32].</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="departments" class="py-32 bg-premium-blue relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
            <div class="absolute top-1/4 left-10 w-64 h-64 bg-white rounded-full blur-[120px]"></div>
            <div class="absolute bottom-1/4 right-10 w-96 h-96 bg-averroes-yellow rounded-full blur-[150px]"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-6" data-aos="fade-up">
                <div class="max-w-xl">
                    <h2 class="text-white text-5xl lg:text-7xl font-black uppercase italic tracking-tighter leading-none">
                        Struktur <br> <span class="text-averroes-yellow">Departemen.</span>
                    </h2>
                </div>
                <div class="text-right">
                    <p class="text-white/50 font-bold uppercase tracking-[0.3em] text-xs mb-2">Brighter Together</p>
                    <div class="h-1 w-32 bg-averroes-yellow ml-auto"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <div class="lg:col-span-2 lg:row-span-2 glass-card p-10 rounded-[4rem] flex flex-col justify-between hover:bg-white transition-all duration-700 group border-white/20" data-aos="zoom-in">
                    <div>
                        <div class="w-16 h-16 bg-averroes-yellow rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-premium-blue transition-colors">🎨</div>
                        <h3 class="text-white group-hover:text-premium-blue text-3xl font-black uppercase italic mb-6">Media Kreatif</h3>
                        <p class="text-white/50 group-hover:text-premium-blue/70 font-medium mb-8">Bertanggung jawab penuh atas manajemen konten digital dan visualisasi identitas komunitas[cite: 41, 54].</p>
                        
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-[10px] font-black uppercase tracking-widest text-averroes-yellow group-hover:text-premium-blue">
                            <li class="flex items-center gap-2"><span>•</span> Manajemen Media Sosial [cite: 56]</li>
                            <li class="flex items-center gap-2"><span>•</span> Desain Grafis [cite: 59]</li>
                            <li class="flex items-center gap-2"><span>•</span> Produksi Konten [cite: 57]</li>
                            <li class="flex items-center gap-2"><span>•</span> Dokumentasi & Video [cite: 58]</li>
                        </ul>
                    </div>
                    <div class="mt-12 pt-8 border-t border-white/10 group-hover:border-premium-blue/10">
                        <span class="text-averroes-yellow group-hover:text-premium-blue font-black italic">UNIT_01 // MEDKRAF</span>
                    </div>
                </div>

                <div class="glass-card p-8 rounded-[3.5rem] hover:bg-white transition-all duration-500 group border-white/10" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-3xl mb-4">🏠</div>
                    <h4 class="text-white group-hover:text-premium-blue font-black uppercase italic text-sm tracking-widest mb-2">Berdaya</h4>
                    <p class="text-white/40 group-hover:text-premium-blue/60 text-[10px] leading-relaxed">Fokus pada pemberdayaan ekonomi dan kewirausahaan pemuda[cite: 40].</p>
                </div>

                <div class="glass-card p-8 rounded-[3.5rem] hover:bg-white transition-all duration-500 group border-white/10" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-3xl mb-4">🧪</div>
                    <h4 class="text-white group-hover:text-premium-blue font-black uppercase italic text-sm tracking-widest mb-2">Pintar</h4>
                    <p class="text-white/40 group-hover:text-premium-blue/60 text-[10px] leading-relaxed">Pusat pelatihan keterampilan berbasis teknologi dan seni[cite: 42, 43].</p>
                </div>

                <div class="glass-card p-8 rounded-[3.5rem] hover:bg-white transition-all duration-500 group border-white/10" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl mb-4">🏃</div>
                    <h4 class="text-white group-hover:text-premium-blue font-black uppercase italic text-sm tracking-widest mb-2">Sehat</h4>
                    <p class="text-white/40 group-hover:text-premium-blue/60 text-[10px] leading-relaxed">Mengawal kesehatan fisik dan mental para anggota komunitas[cite: 47].</p>
                </div>

                <div class="glass-card p-8 rounded-[3.5rem] hover:bg-white transition-all duration-500 group border-white/10" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-3xl mb-4">❤️</div>
                    <h4 class="text-white group-hover:text-premium-blue font-black uppercase italic text-sm tracking-widest mb-2">Peduli</h4>
                    <p class="text-white/40 group-hover:text-premium-blue/60 text-[10px] leading-relaxed">Penggerak aksi kemanusiaan dan bantuan sosial masyarakat[cite: 47].</p>
                </div>

                <div class="glass-card p-8 rounded-[3.5rem] hover:bg-white transition-all duration-500 group border-white/10" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-3xl mb-4">🌟</div>
                    <h4 class="text-white group-hover:text-premium-blue font-black uppercase italic text-sm tracking-widest mb-2">Potensi</h4>
                    <p class="text-white/40 group-hover:text-premium-blue/60 text-[10px] leading-relaxed">Wadah pengembangan bakat dan inklusivitas pemuda[cite: 47].</p>
                </div>

                <div class="glass-card p-8 rounded-[3.5rem] hover:bg-white transition-all duration-500 group border-white/10" data-aos="fade-up" data-aos-delay="600">
                    <div class="text-3xl mb-4">🌿</div>
                    <h4 class="text-white group-hover:text-premium-blue font-black uppercase italic text-sm tracking-widest mb-2">Lestari</h4>
                    <p class="text-white/40 group-hover:text-premium-blue/60 text-[10px] leading-relaxed">Berfokus pada isu lingkungan dan keberlanjutan alam[cite: 49].</p>
                </div>

            </div>
        </div>
    </section>

    <section id="contact" class="py-32 bg-white text-premium-blue">
        <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-20 items-center">
            <div data-aos="fade-right">
                <h2 class="text-6xl lg:text-8xl font-black uppercase italic tracking-tighter leading-none mb-10">Get In <br> Touch.</h2>
                <div class="space-y-8">
                    <div class="flex items-center gap-6">
                        <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center text-2xl">📍</div>
                        <p class="font-bold text-lg uppercase italic">Bandung, Indonesia [cite: 12]</p>
                    </div>
                </div>
            </div>

            <div class="bg-premium-blue p-12 lg:p-20 rounded-[5rem] shadow-2xl relative" data-aos="fade-left">
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-500/20 border border-red-500 text-red-400 rounded-2xl text-sm italic">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="mb-6 p-4 bg-averroes-yellow/20 border border-averroes-yellow text-averroes-yellow rounded-2xl text-sm italic animate-pulse">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-8">
                @csrf <div class="space-y-2 border-b border-white/10 pb-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.3em] text-averroes-yellow">Full Name</label>
                    <input type="text" name="name" required placeholder="John Doe" 
                        class="w-full bg-transparent text-white outline-none placeholder:text-white/20 font-bold italic text-xl">
                </div>

                <div class="space-y-2 border-b border-white/10 pb-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.3em] text-averroes-yellow">Email Address</label>
                    <input type="email" name="email" required placeholder="hello@company.com" 
                        class="w-full bg-transparent text-white outline-none placeholder:text-white/20 font-bold italic text-xl">
                </div>

                <div class="space-y-2 border-b border-white/10 pb-4">
                    <label class="text-[10px] font-black uppercase tracking-[0.3em] text-averroes-yellow">Message</label>
                    <textarea name="message" required placeholder="Tell us about your mission..." rows="3" 
                            class="w-full bg-transparent text-white outline-none placeholder:text-white/20 font-bold italic text-xl resize-none"></textarea>
                </div>

                <button type="submit" 
                        class="w-full py-6 bg-averroes-yellow text-premium-blue font-black rounded-3xl hover:bg-white transition-all uppercase italic tracking-[0.2em] shadow-xl">
                    Send Inquiry
                </button>
            </form>
            </div>
        </div>
    </section>

    <footer class="py-12 bg-slate-950 border-t border-white/5 text-center">
        <p class="text-[10px] font-black uppercase tracking-[0.5em] text-slate-600">&copy; 2026 Averroes Community. Brighter Together[cite: 8, 86].</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true, easing: 'ease-out-back' });
    </script>
</body>
</html>