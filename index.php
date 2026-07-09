<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jabar CorpU Talent - Beranda</title>
 
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />
 
  <style>
    body { font-family: 'Inter', sans-serif; }
    .bubble-effect {
      position: relative;
      overflow: hidden;
    }
    .bubble {
      position: absolute;
      border-radius: 50%;
      transform: scale(0);
      background: rgba(255, 255, 255, 0.55);
      pointer-events: none;
      animation: bubble-pop 650ms ease-out forwards;
    }
    @keyframes bubble-pop {
      0% {
        transform: scale(0);
        opacity: 0.8;
      }
      60% {
        opacity: 0.5;
      }
      100% {
        transform: scale(2.8);
        opacity: 0;
      }
    }
    .card-bubble .bubble,
    .nav-bubble .bubble {
      background: rgba(20, 153, 129, 0.18);
    }
 
    .card-hover {
      transition: transform 220ms ease, box-shadow 220ms ease;
    }
    .card-hover:hover {
      transform: translateY(-6px);
      box-shadow: 0 25px 30px -10px rgba(0,0,0,0.15), 0 10px 12px -6px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body class="bg-[#f9fafb]">
  <header class="w-full flex items-center justify-between px-8 py-[30px] bg-white border-b border-gray-100">
    <div class="flex items-center gap-2">
      <img src="https://www.figma.com/api/mcp/asset/2355db60-4140-4f63-8476-42b40a76894f" alt="Jabar CorpU Talent Logo" class="h-10 w-auto" />
    </div>
    <nav class="hidden md:flex items-center gap-2">
      <a href="#" class="bubble-effect nav-bubble text-sm text-gray-700 px-3 py-3 rounded-md hover:bg-[#149981]/10 hover:text-[#0f7c68] transition-colors">Pembelajaran Mandiri</a>
      <a href="#" class="bubble-effect nav-bubble text-sm text-gray-700 px-3 py-3 rounded-md hover:bg-[#149981]/10 hover:text-[#0f7c68] transition-colors">Blended Learning</a>
      <a href="#" class="bubble-effect nav-bubble text-sm text-gray-700 px-3 py-3 rounded-md hover:bg-[#149981]/10 hover:text-[#0f7c68] transition-colors">Kolaborasi</a>
      <a href="#" class="bubble-effect nav-bubble text-sm text-gray-700 px-3 py-3 rounded-md hover:bg-[#149981]/10 hover:text-[#0f7c68] transition-colors">Webinar</a>
      <a href="#" class="bubble-effect nav-bubble text-sm text-gray-700 px-3 py-3 rounded-md hover:bg-[#149981]/10 hover:text-[#0f7c68] transition-colors">Pengetahuan</a>
      <a href="#" class="bubble-effect nav-bubble flex items-center gap-1 text-sm text-gray-700 px-3 py-3 rounded-md hover:bg-[#149981]/10 hover:text-[#0f7c68] transition-colors">
        Tutorial
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    </nav>
    <a href="pilih-jenis-login.html" class="bubble-effect bg-[#149981] text-white text-base px-8 py-2 rounded-md hover:bg-[#0f7c68] transition-colors">
      Masuk
    </a>
  </header>
  <section class="px-8 pt-24 pb-32" style="background-image: linear-gradient(135deg, rgb(16, 138, 67) 0%, rgb(20, 153, 129) 100%);">
    <div class="flex flex-wrap gap-12 items-center justify-center max-w-[1200px] mx-auto">
 
      <div class="flex-1 min-w-[320px] flex flex-col gap-2">
        <p class="font-bold text-lg text-white">Pembelajaran Digital</p>
        <h1 class="font-bold text-[44px] md:text-[60px] leading-[1.05] text-white">
          Selamat Datang di<br />
          <span class="relative inline-block">
            Jabar<br />CorpU Talent
            <span class="absolute -bottom-2 left-0 right-1/4 h-1 bg-[#f4c400]"></span>
          </span>
        </h1>
        <p class="text-lg text-white/90 pt-4 max-w-[512px]">
          Membangun organisasi pembelajar melalui ekosistem digital yang terintegrasi dan dapat diakses kapan saja.
        </p>
        <div class="flex gap-4 pt-8">
          <button class="bubble-effect bg-[#f4c400] text-[#111827] font-bold text-base px-8 py-[13px] rounded-full hover:bg-[#e0b400] transition-colors">
            Jelajahi Kursus
          </button>
          <button class="bubble-effect border border-white text-white text-base px-8 py-[13px] rounded-full hover:bg-white/10 transition-colors">
            Panduan
          </button>
        </div>
      </div>
 
      <div class="flex-1 min-w-[320px] flex justify-end">
        <div class="w-full max-w-[576px] aspect-[576/427] rounded-xl overflow-hidden">
          <img src="https://www.figma.com/api/mcp/asset/ac6321b0-9a40-4ee7-a284-5eb89b2bb46b" alt="Ilustrasi Pembelajaran Digital" class="w-full h-full object-cover" />
        </div>
      </div>
    </div>
  </section>
  <section class="px-8 -mt-24 pb-24">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-[1200px] mx-auto">
      <div class="bubble-effect card-bubble card-hover bg-white rounded-2xl shadow-[0_20px_25px_-5px_rgba(0,0,0,0.1),0_8px_10px_-6px_rgba(0,0,0,0.1)] p-8 flex flex-col items-center text-center cursor-pointer">
        <div class="h-16 flex items-center justify-center mb-6">
          <img src="https://www.figma.com/api/mcp/asset/49ca994d-8152-44b9-89c2-3d4a564471ec" alt="Sista Praja" class="h-16 w-auto" />
        </div>
        <h3 class="font-bold text-xl text-[#1f2937] pb-2">Sista Praja</h3>
        <p class="text-sm text-[#6b7280] leading-[22.75px]">Learning Management System (LMS) bagi ASN</p>
      </div>
      <div class="bubble-effect card-bubble card-hover bg-white rounded-2xl shadow-[0_20px_25px_-5px_rgba(0,0,0,0.1),0_8px_10px_-6px_rgba(0,0,0,0.1)] p-8 flex flex-col items-center text-center cursor-pointer">
        <div class="h-16 flex items-center justify-center mb-6">
          <img src="https://www.figma.com/api/mcp/asset/eb245446-8949-4f17-929e-e907db8f3386" alt="MyTalenta Jabar" class="h-16 w-auto" />
        </div>
        <h3 class="font-bold text-xl text-[#1f2937] pb-2">MyTalenta Jabar</h3>
        <p class="text-sm text-[#6b7280] leading-[22.75px]">Learning Management System (LMS) bagi masyarakat umum</p>
      </div>
    
      <div class="bubble-effect card-bubble card-hover bg-white rounded-2xl shadow-[0_20px_25px_-5px_rgba(0,0,0,0.1),0_8px_10px_-6px_rgba(0,0,0,0.1)] p-8 flex flex-col items-center text-center cursor-pointer">
        <div class="h-16 flex items-center justify-center mb-6">
          <img src="https://www.figma.com/api/mcp/asset/f97138a9-fba5-49b5-8d3d-1590ca7a1c4c" alt="Wiscoverse" class="h-16 w-auto" />
        </div>
        <h3 class="font-bold text-xl text-[#1f2937] pb-2">Wiscoverse</h3>
        <p class="text-sm text-[#6b7280] leading-[22.75px]">Berbagi pengetahuan dan wawasan untuk masyarakat luas.</p>
      </div>

      <div class="bubble-effect card-bubble card-hover bg-white rounded-2xl shadow-[0_20px_25px_-5px_rgba(0,0,0,0.1),0_8px_10px_-6px_rgba(0,0,0,0.1)] p-8 flex flex-col items-center text-center cursor-pointer">
        <div class="h-16 flex items-center justify-center mb-6">
          <img src="https://www.figma.com/api/mcp/asset/3ebc65e5-adf3-48c9-90f5-99e6d187c05a" alt="Panel Coaching & Mentoring" class="h-16 w-auto" />
        </div>
        <h3 class="font-bold text-xl text-[#1f2937] pb-2">Panel Coaching &amp; Mentoring</h3>
        <p class="text-sm text-[#6b7280] leading-[22.75px]">Sesi bimbingan eksklusif bersama Coach profesional BNSP.</p>
      </div>
    </div>
  </section>
  <script>
    function createBubble(e, el) {
      const rect = el.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height) * 1.4;
      const bubble = document.createElement('span');
      bubble.className = 'bubble';
      bubble.style.width = bubble.style.height = size + 'px';
      bubble.style.left = (e.clientX - rect.left - size / 2) + 'px';
      bubble.style.top = (e.clientY - rect.top - size / 2) + 'px';
      el.appendChild(bubble);
      bubble.addEventListener('animationend', () => bubble.remove());
    }
    document.querySelectorAll('.bubble-effect').forEach(el => {
      el.addEventListener('click', function (e) {
        createBubble(e, el);
      });
    });
  </script>
 
</body>
</html>