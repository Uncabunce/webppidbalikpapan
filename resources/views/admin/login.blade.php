<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PPID Balikpapan Admin Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "primary-fixed-dim": "#a4c9ff",
            "surface-container-high": "#e7e8e9",
            "surface-dim": "#d9dadb",
            "primary-fixed": "#d4e3ff",
            "on-surface": "#191c1d",
            "on-primary-fixed": "#001c39",
            "secondary": "#785900",
            "primary": "#003f74",
            "surface-bright": "#f8f9fa",
            "on-secondary-fixed": "#261a00",
            "surface-variant": "#e1e3e4",
            "outline-variant": "#c2c6d2",
            "error-container": "#ffdad6",
            "error": "#ba1a1a",
            "surface-tint": "#1860a6",
            "on-tertiary-fixed-variant": "#004f56",
            "on-secondary-container": "#6c5000",
            "on-error": "#ffffff",
            "tertiary-fixed": "#92f1fe",
            "secondary-fixed": "#ffdf9e",
            "on-primary-fixed-variant": "#004883",
            "inverse-primary": "#a4c9ff",
            "primary-container": "#00569c",
            "on-primary": "#ffffff",
            "surface": "#f8f9fa",
            "inverse-surface": "#2e3132",
            "on-tertiary-fixed": "#001f23",
            "on-tertiary-container": "#78d8e5",
            "surface-container-low": "#f3f4f5",
            "tertiary": "#00454c",
            "secondary-container": "#fdc003",
            "on-tertiary": "#ffffff",
            "outline": "#727782",
            "on-background": "#191c1d",
            "surface-container-highest": "#e1e3e4",
            "on-secondary": "#ffffff",
            "inverse-on-surface": "#f0f1f2",
            "on-secondary-fixed-variant": "#5b4300",
            "on-error-container": "#93000a",
            "background": "#f8f9fa",
            "surface-container-lowest": "#ffffff",
            "tertiary-fixed-dim": "#75d5e2",
            "tertiary-container": "#005e67",
            "surface-container": "#edeeef",
            "on-surface-variant": "#424751",
            "on-primary-container": "#aaccff",
            "secondary-fixed-dim": "#fabd00"
          },
          "borderRadius": {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          "fontFamily": {
            "headline": ["Manrope"],
            "display": ["Manrope"],
            "body": ["Inter"],
            "label": ["Inter"]
          }
        }
      }
    }
  </script>
<style>.material-symbols-outlined {
    font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
    display: inline-block;
    line-height: 1;
    text-transform: none;
    letter-spacing: normal;
    word-wrap: normal;
    white-space: nowrap;
    direction: ltr
    }
.glass-effect {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px)
    }
.batik-overlay {
    background-image: url(https://lh3.googleusercontent.com/aida/ADBb0ui0fitW3uPheAyL7ophTJPotk2PpuLsaKku4axJQhprngmDGxYBnAytxHd32n61_6Ouv3vGbjiXzWnL6mCYMlgeTQaGYzZ6kG2B5sFC4vM71sVR6dK7AaMFgV09SbwFGn7XLb7xA-zIlq0WykqcndXbJAUJfaWlhenY_StCSOlANzTnVHijm2CaAgcFUC3hny-r8cgVFyRQQttfdemGVKfJDeqB9ZMYdBF43In5M47KQX77EaIoTM6lawvB79m_-XdkwxOFYml1-Mc);
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0.04;
    pointer-events: none
    }
.ambient-shadow {
    box-shadow: 0 32px 32px -4px rgba(25, 28, 29, 0.06)
    }</style>
</head>
<body class="bg-surface font-body text-on-surface min-h-screen flex items-center justify-center p-6 relative overflow-hidden">
<!-- Background Layer: Subtle blurred city background -->
<div class="absolute inset-0 z-0 bg-gradient-to-br from-primary via-primary to-primary-container">
<!-- Batik pattern texture overlay -->
<div class="absolute inset-0 batik-overlay z-20" style="opacity: 0.08;"></div>
</div>
<!-- Login Card Container -->
<main class="relative z-30 w-full max-w-[480px]">
<div class="glass-effect p-8 md:p-12 rounded-full ambient-shadow border border-white/20 flex flex-col items-center">
<!-- Logo Section -->
<div class="mb-10 flex flex-col items-center text-center">
<div class="w-24 h-24 mb-6 relative">
<img alt="Balikpapan City Crest" class="w-full h-full object-contain" data-alt="The official crest of Balikpapan City, meticulously rendered with high-fidelity details showing historical symbols and regional emblems. The logo is displayed prominently on a clean, bright background, symbolizing institutional authority and heritage. The lighting is even and professional, maintaining a high-end corporate aesthetic consistent with government branding." src="https://lh3.googleusercontent.com/aida/ADBb0ujHGozykR3A8auOikoFJhKvjolu0x81dNKaDy_e2nQ06BBuY8OsrER3cNebGxTswiU3zKYZ4jzolkpN9Ewrs9dLLogjRYFC5rwosKU3m0OGL7kHetvOiGiMk_BIsINik4-EydoP_3q5jpkT46OsXjRnH5zHJ7G7US291Q4hfGGnU50EVVnd7PKMaKWSyS1mSVsRmE5I-Q2UGD_rBIfEaXFqRb6ljLOQZbLrfVYpMfDySYg9m225zd3rQJthMjbkORx36P1sxn7WbOg"/>
</div>
<h1 class="font-display font-extrabold text-2xl md:text-3xl tracking-tight text-primary">
          Login Admin
        </h1>
<p class="font-label text-sm text-outline mt-1 font-medium">
          PPID Balikpapan Admin Console
        </p>
</div>
<!-- Form Section -->
<form class="w-full space-y-6 action="#" method="POST">
    @csrf
<!-- Username Field -->
<div class="space-y-2">
<label class="font-label text-xs font-semibold uppercase tracking-wider text-on-surface-variant px-1" for="username">
            Username
          </label>
<div class="relative group">
<div class="absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="mail"></span>
</div>
<input class="w-full pl-12 pr-4 py-4 bg-surface-container-high border-none rounded-xl text-on-surface placeholder:text-outline/50 focus:ring-0 focus:bg-surface-container-highest transition-all duration-300" id="username" name="username" type="username" />
<div class="absolute bottom-0 left-0 h-0.5 bg-primary w-0 group-focus-within:w-full transition-all duration-500"></div>
</div>
</div>
<!-- Password Field -->
<div class="space-y-2">
<div class="flex justify-between items-center px-1">
<label class="font-label text-xs font-semibold uppercase tracking-wider text-on-surface-variant" for="password">
              Password
            </label>
<a class="text-xs font-bold text-primary hover:text-primary-container transition-colors" href="#">
              Forgot Password?
            </a>
</div>
@if($errors->any())
    <div style="background: red; color: white; padding: 10px;">
        {{ $errors->first() }}
    </div>
@endif
<div class="relative group">
<div class="absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="lock">lock</span>
</div>
<input class="w-full pl-12 pr-12 py-4 bg-surface-container-high border-none rounded-xl text-on-surface placeholder:text-outline/50 focus:ring-0 focus:bg-surface-container-highest transition-all duration-300" name="password" id="password" placeholder="••••••••" required="" type="password"/>
<button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors" type="button">
<span class="material-symbols-outlined" data-icon="visibility">visibility</span>
</button>
<div class="absolute bottom-0 left-0 h-0.5 bg-primary w-0 group-focus-within:w-full transition-all duration-500"></div>
</div>
</div>
<!-- Submit Button -->
<button class="w-full py-4 bg-primary text-on-primary rounded-xl font-display font-bold text-base shadow-lg shadow-primary/20 hover:bg-primary-container hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 flex items-center justify-center gap-2 mt-8" type="submit">
          Sign In to Dashboard
          <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
</button>
</form>
<!-- Footer Help -->
<div class="mt-10 pt-8 border-t border-outline-variant/30 w-full text-center">
<p class="font-label text-sm text-on-surface-variant">
          Authorized personnel only. For access requests, please contact the 
          <a class="text-primary font-semibold underline decoration-primary/30 underline-offset-4 hover:decoration-primary transition-all" href="#">
            System Administrator
          </a>.
        </p>
</div>
</div>
<!-- Decoration Element: Asymmetric image overlap -->
<div class="hidden lg:block absolute -right-24 -bottom-16 w-48 h-48 rounded-full overflow-hidden ambient-shadow border-4 border-white z-40 transform rotate-12">
<img alt="" class="w-full h-full object-cover" data-alt="A close-up, high-quality portrait of a friendly and professional civic administrator in Balikpapan, smiling warmly while working in a bright, modern office environment. The lighting is soft and natural, pouring in from a nearby window, creating a human-centric and approachable mood. The color palette is composed of clean whites, soft greys, and deep blue accents." src="https://lh3.googleusercontent.com/aida/ADBb0uhsjyjs4XSrzoaMfxVFqFqUJnytMs9UXAP5iCVtzpG1-sra_YHtr-XI6JoPAWaGGxfPC-eV6y9iL0nrI4M1GZIYMzfOvgM8ly3MGMIdkUDKaLU3J-9uDU7XJTe5eGCgbPwiYkJAUg3hsB4UulqbH_YCBrjLqSkWbwQqpMmOy3EkelFqklTFK3mId1Vnoj7dqNkaM7_GXpzbMLMWwXztmgHkiIGDDBqB0WDpCooj7JMF-z9Cfr-LhCSULxa3tMNF3PKvssrP5lhB3Uk"/>
</div>
</main>
<!-- Global Footer Branding -->
<footer class="absolute bottom-8 left-0 right-0 text-center z-30">
<div class="flex items-center justify-center gap-3 text-white/60">
<span class="material-symbols-outlined text-sm" data-icon="verified_user" style="font-variation-settings: 'FILL' 1;">verified_user</span>
<span class="text-xs font-label font-medium tracking-widest uppercase">Secured Government Portal © 2024 Balikpapan City</span>
</div>
</footer>
</body></html>