<div>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login Admin</title>
<link rel="icon" type="png" href="{{ asset('images/kota balikpapan.png') }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        "primary": "#003f74", "on-primary": "#ffffff",
        "primary-container": "#00569c", "surface": "#f8f9fa",
        "on-surface": "#191c1d", "surface-container-high": "#e7e8e9",
        "surface-container-highest": "#e1e3e4", "on-surface-variant": "#424751",
        "outline": "#727782", "error": "#ba1a1a", "secondary-container": "#fdc003",
      },
      borderRadius: { "DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem" },
      fontFamily: { "headline": ["Manrope"], "display": ["Manrope"], "body": ["Inter"], "label": ["Inter"] }
    }
  }
}
</script>
<style>
.material-symbols-outlined {
    font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
    display: inline-block; line-height: 1;
}
.glass-effect {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px);
}
.ambient-shadow { box-shadow: 0 32px 32px -4px rgba(25, 28, 29, 0.06); }

/* Styling untuk form Filament */
[data-field-wrapper] { margin-bottom: 0; }
.fi-input {
    width: 100% !important;
    padding: 1rem 1rem 1rem 3rem !important;
    background: #e7e8e9 !important;
    border: none !important;
    border-radius: 0.75rem !important;
    color: #191c1d !important;
    box-shadow: none !important;
}
.fi-input:focus { background: #e1e3e4 !important; outline: none !important; }
.fi-fo-field-wrp-label label { 
    font-size: 0.75rem !important; font-weight: 600 !important;
    text-transform: uppercase !important; letter-spacing: 0.05em !important;
    color: #424751 !important;
}
.fi-btn { display: none !important; }
</style>
@filamentStyles
</head>

<body class="bg-surface font-body text-on-surface min-h-screen flex items-center justify-center p-6 relative overflow-hidden">

{{-- Background --}}
<div class="absolute inset-0 z-0">
    <img src="/bppbrmn.png" alt="" class="w-full h-full object-cover"/>
    <div class="absolute inset-0 bg-primary/70 backdrop-blur-sm"></div>
    <div class="absolute inset-0 z-20" style="opacity: 0.06; background-image: url('/batik dayak.png'); background-repeat: repeat; background-size: 300px;"></div>
</div>

{{-- Login Card --}}
<main class="relative z-30 w-full max-w-[400px]">
<div class="glass-effect p-6 md:p-8 rounded-full ambient-shadow border border-white/20 flex flex-col items-center">

    {{-- Logo --}}
    <div class="mb-6 flex flex-col items-center text-center">
        <div class="w-16 h-16 mb-4">
            <img src="/images/Kota Balikpapan.png" alt="Balikpapan City Crest" class="w-full h-full object-contain"/>
        </div>
        <h1 class="font-display font-extrabold text-xl md:text-2xl tracking-tight text-primary">Login Admin</h1>
        <p class="font-label text-xs text-outline mt-1 font-medium">PPID Balikpapan Admin Console</p>
    </div>

    {{-- Form --}}
    <div class="w-full space-y-4">
        <form wire:submit="authenticate" class="w-full space-y-4">

            {{-- Username --}}
            <div class="space-y-2">
                <label class="font-label text-xs font-semibold uppercase tracking-wider text-on-surface-variant px-1">
                    Username
                </label>
                <div class="relative group">
                    <div class="absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors z-10">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <input
                        name="username"
                        type="text"
                        placeholder="Masukkan username"
                        class="w-full pl-12 pr-4 py-4 bg-surface-container-high border-none rounded-xl text-on-surface placeholder:text-outline/50 focus:ring-0 focus:bg-surface-container-highest transition-all duration-300"
                    />
                    <div class="absolute bottom-0 left-0 h-0.5 bg-primary w-0 group-focus-within:w-full transition-all duration-500 rounded-full"></div>
                </div>
            </div>

            {{-- Password --}}
            <div class="space-y-2">
                <label class="font-label text-xs font-semibold uppercase tracking-wider text-on-surface-variant px-1">
                    Password
                </label>
                <div class="relative group">
                    <div class="absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors z-10">
                        <span class="material-symbols-outlined">lock</span>
                    </div>
                    <input
                        name="password"
                        type="password"
                        placeholder="Masukkan password"
                        required
                        class="w-full pl-12 pr-4 py-4 bg-surface-container-high border-none rounded-xl text-on-surface placeholder:text-outline/50 focus:ring-0 focus:bg-surface-container-highest transition-all duration-300"
                    />
                    <div class="absolute bottom-0 left-0 h-0.5 bg-primary w-0 group-focus-within:w-full transition-all duration-500 rounded-full"></div>
                </div>
            </div>

            {{-- Error --}}
            @if($errors->any())
            <div class="w-full bg-error/10 border border-error/30 text-error text-sm rounded-xl px-4 py-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-base" style="font-variation-settings:'FILL' 1">error</span>
                <span>{{ $errors->first() }}</span>
            </div>
            @endif

            {{-- Submit --}}
            <button
                type="submit"
                class="w-full py-3 bg-primary text-on-primary rounded-xl font-display font-bold text-sm shadow-lg shadow-primary/20 hover:bg-primary-container hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 flex items-center justify-center gap-2 mt-4"
            >
                Log In
                <span class="material-symbols-outlined">arrow_forward</span>
            </button>

        </form>
    </div>

</div>
</main>

@livewireScripts
@filamentScripts
</body>
</html>
</div>