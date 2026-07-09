<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Masuk sebagai Masyarakat Umum - Jabar CorpU Talent</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <style>
    body { font-family: 'Inter', sans-serif; }
    .font-heading { font-family: 'Plus Jakarta Sans', sans-serif; }
  </style>
</head>
<body class="bg-gradient-to-b from-[#f9f9ff] to-white min-h-screen flex flex-col">

  <main class="flex-1 flex items-center justify-center bg-white px-4 py-8">
    <div class="flex flex-col gap-8 w-full max-w-[448px] px-4">
      <div class="flex items-center gap-2">
        <svg width="56" height="56" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17 20h5v-2a4 4 0 0 0-3-3.87M9 20H4v-2a4 4 0 0 1 3-3.87m6-3.13a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm6 0a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm-12 0a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" stroke="#006857" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h1 class="font-bold text-2xl text-[#111c2c] leading-6">Jabar<br />CorpU<br />Talent</h1>
      </div>
      <div class="flex flex-col gap-2">
        <h2 class="font-heading font-semibold text-2xl text-[#111c2c]">Masuk</h2>
        <p class="text-base text-[#3d4945]">
          Gunakan akun Anda untuk masuk ke sistem sebagai Masyarakat Umum.
        </p>
      </div>
      <form class="flex flex-col gap-5 w-full">

        <div class="flex flex-col gap-[6px] w-full">
          <label for="email" class="text-sm font-medium text-[#111c2c]">Email</label>
          <input
            id="email"
            type="email"
            placeholder="Masukkan alamat email Anda"
            class="w-full bg-white border border-[#bcc9c4] rounded px-[17px] py-[15px] text-base text-[#111c2c] placeholder:text-[#6d7a75] outline-none focus:border-[#006857] focus:ring-2 focus:ring-[#006857]/20"
          />
        </div>

        <div class="flex flex-col gap-[6px] w-full">
          <div class="flex items-center justify-between">
            <label for="password" class="text-sm font-medium text-[#111c2c]">Sandi</label>
            <a href="#" class="text-xs font-semibold tracking-[0.6px] text-[#006857] hover:underline">Lupa sandi?</a>
          </div>
          <div class="relative w-full">
            <input
              id="password"
              type="password"
              placeholder="Masukkan kata sandi"
              class="w-full bg-white border border-[#bcc9c4] rounded px-[17px] py-[15px] text-base text-[#111c2c] placeholder:text-[#6d7a75] outline-none focus:border-[#006857] focus:ring-2 focus:ring-[#006857]/20"
            />
            <button type="button" aria-label="Tampilkan kata sandi" class="absolute right-3 top-1/2 -translate-y-1/2 text-[#6d7a75]">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7Z" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>

        <button type="submit" class="w-full py-[14px] rounded bg-[#006857] text-white text-sm font-medium shadow-sm hover:bg-[#00543f] transition-colors">
          Masuk sebagai Masyarakat Umum
        </button>

        <div class="flex items-center w-full py-2">
          <span class="h-px flex-1 bg-[#bcc9c4]"></span>
          <span class="px-2 text-xs font-semibold tracking-[0.6px] uppercase text-[#6d7a75]">Atau</span>
          <span class="h-px flex-1 bg-[#bcc9c4]"></span>
        </div>

        <button type="button" class="flex items-center justify-center gap-3 w-full py-[13px] rounded bg-white border border-[#bcc9c4] hover:bg-gray-50 transition-colors">
          <svg class="w-5 h-5" viewBox="0 0 48 48">
            <path fill="#FFC107" d="M43.6 20.5H42V20H24v8h11.3C33.9 32.9 29.4 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 5.9 1.2 8 3.1l5.7-5.7C34.5 6.1 29.5 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20 20-8.9 20-20c0-1.3-.1-2.7-.4-3.5Z"/>
            <path fill="#FF3D00" d="m6.3 14.7 6.6 4.8C14.6 15.9 18.9 13 24 13c3.1 0 5.9 1.2 8 3.1l5.7-5.7C34.5 6.1 29.5 4 24 4 16.3 4 9.7 8.3 6.3 14.7Z"/>
            <path fill="#4CAF50" d="M24 44c5.4 0 10.3-2.1 14-5.5l-6.5-5.4C29.5 34.9 26.9 36 24 36c-5.4 0-9.9-3.1-11.3-7.4l-6.5 5C9.6 39.6 16.2 44 24 44Z"/>
            <path fill="#1976D2" d="M43.6 20.5H42V20H24v8h11.3c-.7 2-2 3.7-3.7 4.9l6.5 5.4C39.9 36.7 44 31 44 24c0-1.3-.1-2.7-.4-3.5Z"/>
          </svg>
          <span class="text-sm font-medium text-[#3d4945]">Masuk dengan Google</span>
        </button>

        <a href="pilih-jenis-login.html" class="flex items-center justify-center w-full py-[13px] rounded bg-[#f0f3ff] border border-[#bcc9c4] text-sm font-medium text-[#3d4945] hover:bg-[#e7eeff] transition-colors">
          Kembali
        </a>
      </form>

      <p class="text-base text-center text-[#3d4945]">
        Belum memiliki akun? <span class="font-semibold text-[#006857]">Daftar sekarang</span>
      </p>
    </div>
  </main>
  <footer class="w-full flex flex-col items-center gap-4 py-6">
    <div class="flex flex-col items-center">
      <p class="text-sm font-bold text-[#006b5e]">Jabar CorpU Talent</p>
      <p class="text-xs font-semibold text-[#3d4945] text-center">
        © 2024 Jabar CorpU Talent. Hak Cipta Dilindungi Undang-Undang.
      </p>
    </div>
    <div class="flex gap-6">
      <a href="#" class="text-xs font-semibold tracking-[0.6px] text-[#3d4945] hover:text-[#006857]">Kebijakan Privasi</a>
      <a href="#" class="text-xs font-semibold tracking-[0.6px] text-[#3d4945] hover:text-[#006857]">Syarat &amp; Ketentuan</a>
      <a href="#" class="text-xs font-semibold tracking-[0.6px] text-[#3d4945] hover:text-[#006857]">Bantuan</a>
    </div>
  </footer>

</body>
</html>
