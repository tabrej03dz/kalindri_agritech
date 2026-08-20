<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="KisanPro Agro Equipment - Agricultural machinery, hardware, irrigation equipment, hand tools and spare parts." />
  <title>KisanPro Agro Equipment | Farm Machinery, Hardware & Tools</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            leaf: {50:'#f4f8ed',100:'#e5efd4',200:'#cce0ad',300:'#a7c97a',400:'#82b24f',500:'#639633',600:'#4a7725',700:'#395c20',800:'#304b20',900:'#293f1e',950:'#13220c'},
            sun:'#f6b800', earth:'#8a542d', cream:'#fbfaf4'
          },
          fontFamily: { sans:['Inter','sans-serif'], display:['Manrope','sans-serif'] },
          boxShadow: { card:'0 18px 50px rgba(30,64,36,.10)', lift:'0 24px 70px rgba(20,46,25,.16)' }
        }
      }
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
  <style>
    body{font-family:Inter,sans-serif}.font-display,h1,h2,h3,h4{font-family:Manrope,sans-serif}
    .hero-bg{background:linear-gradient(90deg,rgba(19,34,12,.97) 0%,rgba(19,34,12,.88) 46%,rgba(19,34,12,.52) 100%),url('https://www.kirloskarlimitless.com/documents/496952/498114/koel1513-min-2.jpg/cdaa8ca4-387f-b411-01bb-114ac73af92f?t=1640781084332') center/cover}
    .grain{background-image:radial-gradient(rgba(74,119,37,.10) 1px,transparent 1px);background-size:24px 24px}
    .shine{position:relative;overflow:hidden}.shine:after{content:'';position:absolute;inset:-120% -40%;background:linear-gradient(115deg,transparent 45%,rgba(255,255,255,.22),transparent 55%);transform:translateX(-60%);transition:.8s}.shine:hover:after{transform:translateX(60%)}
  </style>
</head>
<body class="bg-cream text-slate-800 antialiased">

  <div class="bg-leaf-950 text-white/80">
    <div class="mx-auto flex max-w-7xl flex-col gap-2 px-4 py-2.5 text-xs sm:flex-row sm:items-center sm:justify-between sm:px-6 lg:px-8">
      <div class="flex flex-wrap gap-x-5 gap-y-1"><span>📞 +91 98765 43210</span><span>✉ sales@kisanpro.in</span><span>📍 Uttar Pradesh, India</span></div>
      <div class="font-semibold text-white">Dealer & Bulk Orders Welcome</div>
    </div>
  </div>

  <header class="sticky top-0 z-50 border-b border-black/5 bg-white/95 backdrop-blur">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3.5 sm:px-6 lg:px-8">
      <a href="#home" class="flex items-center gap-3">
        <div class="grid h-12 w-12 place-items-center rounded-2xl bg-leaf-700 text-2xl text-white shadow-lg">🌾</div>
        <div><div class="font-display text-xl font-extrabold leading-none text-leaf-950">KISAN<span class="text-leaf-600">PRO</span></div><div class="mt-1 text-[9px] font-extrabold uppercase tracking-[.26em] text-slate-500">Agro Equipment</div></div>
      </a>
      <div class="hidden items-center gap-7 text-sm font-bold text-slate-700 lg:flex">
        <a class="hover:text-leaf-700" href="#home">Home</a><a class="hover:text-leaf-700" href="#about">Company</a><a class="hover:text-leaf-700" href="#categories">Categories</a><a class="hover:text-leaf-700" href="#products">Products</a><a class="hover:text-leaf-700" href="#service">Support</a><a class="hover:text-leaf-700" href="#contact">Contact</a>
      </div>
      <div class="hidden items-center gap-3 lg:flex">
        <?php if(auth()->guard()->check()): ?>
          <a href="<?php echo e(route('dashboard')); ?>" class="rounded-full border border-leaf-200 bg-leaf-50 px-4 py-2.5 text-sm font-extrabold text-leaf-800">Dashboard</a>
        <?php else: ?>
          <a href="<?php echo e(route('login')); ?>" class="rounded-full border border-slate-200 px-4 py-2.5 text-sm font-bold">Login</a>
        <?php endif; ?>
        <a href="#contact" class="rounded-full bg-leaf-700 px-5 py-3 text-sm font-extrabold text-white shadow-lg shadow-green-900/10 hover:bg-leaf-800">Get Best Price →</a>
      </div>
      <button id="menuBtn" class="grid h-11 w-11 place-items-center rounded-xl border border-slate-200 text-xl lg:hidden">☰</button>
    </nav>
    <div id="mobileMenu" class="hidden border-t bg-white p-4 lg:hidden"><div class="mx-auto flex max-w-7xl flex-col text-sm font-bold"><a class="rounded-xl px-4 py-3 hover:bg-leaf-50" href="#home">Home</a><a class="rounded-xl px-4 py-3 hover:bg-leaf-50" href="#about">Company</a><a class="rounded-xl px-4 py-3 hover:bg-leaf-50" href="#categories">Categories</a><a class="rounded-xl px-4 py-3 hover:bg-leaf-50" href="#products">Products</a><a class="rounded-xl px-4 py-3 hover:bg-leaf-50" href="#service">Support</a><?php if(auth()->guard()->check()): ?>
          <a class="rounded-xl px-4 py-3 text-leaf-800 hover:bg-leaf-50" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
        <?php else: ?>
          <a class="rounded-xl px-4 py-3 text-leaf-800 hover:bg-leaf-50" href="<?php echo e(route('login')); ?>">Login</a>
        <?php endif; ?>
        <a class="mt-2 rounded-xl bg-leaf-700 px-4 py-3 text-white" href="#contact">Get Best Price</a></div></div>
  </header>

  <main>
    <section id="home" class="hero-bg relative overflow-hidden text-white">
      <div class="absolute -left-20 bottom-0 h-72 w-72 rounded-full bg-lime-400/10 blur-3xl"></div>
      <div class="mx-auto grid min-h-[690px] max-w-7xl items-center gap-12 px-4 py-20 sm:px-6 lg:grid-cols-[1.1fr_.9fr] lg:px-8">
        <div class="max-w-3xl">
          <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 text-xs font-extrabold uppercase tracking-[.18em] backdrop-blur"><span class="h-2 w-2 rounded-full bg-yellow-400"></span>Farm Machinery • Hardware • Tools</div>
          <h1 class="text-4xl font-extrabold leading-[1.05] sm:text-6xl lg:text-7xl">Powering Every<br><span class="text-yellow-400">Stage of Farming.</span></h1>
          <p class="mt-6 max-w-2xl text-base leading-8 text-white/75 sm:text-lg">Heavy-duty agricultural machines, irrigation equipment, farm hardware, hand tools and genuine spare parts—built for Indian farming conditions.</p>
          <div class="mt-9 flex flex-col gap-3 sm:flex-row"><a href="#products" class="shine inline-flex items-center justify-center rounded-full bg-yellow-400 px-7 py-4 text-sm font-extrabold text-leaf-950 hover:bg-yellow-300">Explore Products →</a><a href="#contact" class="inline-flex items-center justify-center rounded-full border border-white/25 bg-white/10 px-7 py-4 text-sm font-bold backdrop-blur hover:bg-white/15">Become a Dealer</a></div>
          <div class="mt-10 grid max-w-2xl grid-cols-2 gap-4 border-t border-white/15 pt-7 sm:grid-cols-4"><div><div class="font-display text-2xl font-extrabold">75+</div><div class="mt-1 text-xs text-white/55">Products</div></div><div><div class="font-display text-2xl font-extrabold">20+</div><div class="mt-1 text-xs text-white/55">Machine Types</div></div><div><div class="font-display text-2xl font-extrabold">100%</div><div class="mt-1 text-xs text-white/55">Quality Checked</div></div><div><div class="font-display text-2xl font-extrabold">PAN India</div><div class="mt-1 text-xs text-white/55">Supply Network</div></div></div>
        </div>
        <div class="hidden lg:block">
          <div class="rounded-[2rem] border border-white/15 bg-white/10 p-3 shadow-2xl backdrop-blur"><img src="https://cpimg.tistatic.com/10893212/b/4/extra-10893212.jpg" alt="Power weeder agriculture machine" class="h-[480px] w-full rounded-[1.6rem] bg-white object-contain p-4"><div class="-mt-16 relative mx-5 flex items-center justify-between rounded-2xl bg-white p-5 text-slate-800 shadow-2xl"><div><div class="text-[10px] font-extrabold uppercase tracking-[.16em] text-leaf-700">Complete Farm Solutions</div><div class="mt-1 font-display text-lg font-extrabold">Machines + Tools + Spares</div></div><div class="grid h-12 w-12 place-items-center rounded-full bg-leaf-100 text-2xl">⚙️</div></div></div>
        </div>
      </div>
    </section>

    <section id="categories" class="relative z-10 -mt-8 px-4 sm:px-6 lg:px-8">
      <div class="mx-auto grid max-w-7xl gap-3 rounded-[2rem] bg-white p-4 shadow-lift sm:grid-cols-2 lg:grid-cols-5">
        <a href="#products" class="rounded-2xl p-5 hover:bg-leaf-50"><div class="text-3xl">🚜</div><h3 class="mt-3 text-base font-extrabold">Farm Machines</h3><p class="mt-1 text-xs leading-5 text-slate-500">Tiller, weeder, cutter, thresher</p></a>
        <a href="#products" class="rounded-2xl p-5 hover:bg-leaf-50"><div class="text-3xl">💦</div><h3 class="mt-3 text-base font-extrabold">Crop Protection</h3><p class="mt-1 text-xs leading-5 text-slate-500">Sprayers, dusters, nozzles</p></a>
        <a href="#products" class="rounded-2xl p-5 hover:bg-leaf-50"><div class="text-3xl">💧</div><h3 class="mt-3 text-base font-extrabold">Irrigation</h3><p class="mt-1 text-xs leading-5 text-slate-500">Pumps, pipes, fittings</p></a>
        <a href="#products" class="rounded-2xl p-5 hover:bg-leaf-50"><div class="text-3xl">🛠️</div><h3 class="mt-3 text-base font-extrabold">Hand Tools</h3><p class="mt-1 text-xs leading-5 text-slate-500">Khurpi, hoe, sickle, spade</p></a>
        <a href="#products" class="rounded-2xl p-5 hover:bg-leaf-50"><div class="text-3xl">⚙️</div><h3 class="mt-3 text-base font-extrabold">Hardware & Spares</h3><p class="mt-1 text-xs leading-5 text-slate-500">Belts, bearings, blades, chains</p></a>
      </div>
    </section>

    <section id="about" class="grain py-24">
      <div class="mx-auto grid max-w-7xl items-center gap-14 px-4 sm:px-6 lg:grid-cols-2 lg:px-8">
        <div class="relative"><img src="https://www.kirloskarlimitless.com/documents/496952/498114/koel1513-min-2.jpg/cdaa8ca4-387f-b411-01bb-114ac73af92f?t=1640781084332" alt="Modern agriculture" class="h-[520px] w-full rounded-[2rem] object-cover shadow-card"><div class="absolute -bottom-6 right-4 rounded-2xl bg-leaf-800 p-6 text-white shadow-2xl sm:right-8"><div class="font-display text-4xl font-extrabold text-yellow-400">One Stop</div><div class="mt-2 max-w-[210px] text-sm font-semibold leading-6 text-white/75">For machines, tools, farm hardware and spares.</div></div></div>
        <div><div class="text-xs font-extrabold uppercase tracking-[.22em] text-leaf-700">Who We Are</div><h2 class="mt-4 text-3xl font-extrabold leading-tight text-slate-950 sm:text-5xl">Practical equipment for real Indian farms.</h2><p class="mt-6 text-base leading-8 text-slate-600">KisanPro supplies agriculture machinery and farm-use hardware for land preparation, sowing, crop protection, irrigation, harvesting and maintenance. Our focus is simple: durable products, easy maintenance and dependable after-sales support.</p><div class="mt-8 grid gap-4 sm:grid-cols-2"><div class="rounded-2xl border bg-white p-5"><div class="text-2xl">✓</div><h3 class="mt-3 font-extrabold">Heavy Duty Build</h3><p class="mt-2 text-sm leading-6 text-slate-500">Selected for rough field use and long working hours.</p></div><div class="rounded-2xl border bg-white p-5"><div class="text-2xl">🔩</div><h3 class="mt-3 font-extrabold">Spare Parts Support</h3><p class="mt-2 text-sm leading-6 text-slate-500">Fast-moving consumables and replacement parts.</p></div><div class="rounded-2xl border bg-white p-5"><div class="text-2xl">🧑‍🌾</div><h3 class="mt-3 font-extrabold">Farmer Friendly</h3><p class="mt-2 text-sm leading-6 text-slate-500">Easy to understand, operate and maintain.</p></div><div class="rounded-2xl border bg-white p-5"><div class="text-2xl">🚚</div><h3 class="mt-3 font-extrabold">Bulk Supply</h3><p class="mt-2 text-sm leading-6 text-slate-500">Dealer, distributor and institutional orders.</p></div></div></div>
      </div>
    </section>

    <section id="products" class="bg-white py-24">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between"><div class="max-w-3xl"><div class="text-xs font-extrabold uppercase tracking-[.22em] text-leaf-700">Popular Product Range</div><h2 class="mt-4 text-3xl font-extrabold text-slate-950 sm:text-5xl">Agriculture machines, hardware & tools</h2><p class="mt-5 max-w-2xl text-base leading-8 text-slate-600">A sales-ready catalogue section with products farmers, dealers and agri-input stores actually look for.</p></div><a href="#contact" class="inline-flex w-max rounded-full bg-leaf-700 px-6 py-3.5 text-sm font-extrabold text-white">Ask for Full Catalogue →</a></div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
          <!-- Machine cards -->
          <article class="group overflow-hidden rounded-[1.5rem] border bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-card"><div class="relative bg-leaf-50 p-6"><div class="absolute right-4 top-4 rounded-full bg-yellow-400 px-3 py-1 text-[10px] font-extrabold">POPULAR</div><img src="https://cpimg.tistatic.com/10893212/b/4/extra-10893212.jpg" alt="Power Weeder" class="h-44 w-full object-contain mix-blend-multiply"></div><div class="p-5"><div class="text-[10px] font-extrabold uppercase tracking-[.15em] text-leaf-700">Land Preparation</div><h3 class="mt-2 text-lg font-extrabold">Power Weeder</h3><p class="mt-2 text-sm leading-6 text-slate-500">Petrol/diesel models for interculture, weeding and soil preparation.</p><a href="#contact" class="mt-4 inline-flex text-sm font-extrabold text-leaf-700">Request Price →</a></div></article>
          <article class="group overflow-hidden rounded-[1.5rem] border bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-card"><div class="bg-amber-50 p-6"><img src="https://image.made-in-china.com/155f0j00bGmoDfLJnckr/4-Stroke-Powerful-Gas-Agricultural-Equipment-Agriculture-Machine-Grass-Cutter.webp" alt="Agriculture Brush Cutter" class="h-44 w-full object-contain mix-blend-multiply"></div><div class="p-5"><div class="text-[10px] font-extrabold uppercase tracking-[.15em] text-leaf-700">Cutting</div><h3 class="mt-2 text-lg font-extrabold">Brush Cutter</h3><p class="mt-2 text-sm leading-6 text-slate-500">For grass, weeds, fodder and crop cutting with multiple attachments.</p><a href="#contact" class="mt-4 inline-flex text-sm font-extrabold text-leaf-700">Request Price →</a></div></article>
          <article class="group overflow-hidden rounded-[1.5rem] border bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-card"><div class="bg-orange-50 p-6"><img src="https://yantratools.com/public/uploads/products/photos/OmNLidIRC4qMVwIiYZPi7FDfZYarwgClu8MbvdOu.webp" alt="Chaff Cutter Machine" class="h-44 w-full object-contain mix-blend-multiply"></div><div class="p-5"><div class="text-[10px] font-extrabold uppercase tracking-[.15em] text-leaf-700">Fodder</div><h3 class="mt-2 text-lg font-extrabold">Chaff Cutter</h3><p class="mt-2 text-sm leading-6 text-slate-500">Electric/engine operated fodder cutting machine for dairy and cattle farms.</p><a href="#contact" class="mt-4 inline-flex text-sm font-extrabold text-leaf-700">Request Price →</a></div></article>
          <article class="group overflow-hidden rounded-[1.5rem] border bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-card"><div class="bg-sky-50 p-6"><img src="https://d91ztqmtx7u1k.cloudfront.net/ClientContent/Images/ExtraLarge/farmic-25l-white-knapsack-powe-20241216133855157.png" alt="Power Sprayer" class="h-44 w-full object-contain mix-blend-multiply"></div><div class="p-5"><div class="text-[10px] font-extrabold uppercase tracking-[.15em] text-leaf-700">Crop Protection</div><h3 class="mt-2 text-lg font-extrabold">Power Sprayer</h3><p class="mt-2 text-sm leading-6 text-slate-500">Portable high-pressure sprayer for pesticides, nutrients and orchard use.</p><a href="#contact" class="mt-4 inline-flex text-sm font-extrabold text-leaf-700">Request Price →</a></div></article>
          <article class="group overflow-hidden rounded-[1.5rem] border bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-card"><div class="bg-blue-50 p-6"><img src="https://cdn.dotpe.in/longtail/store-items/8135918/wtHnLUBz.webp" alt="Agriculture Water Pump Set" class="h-44 w-full object-contain mix-blend-multiply"></div><div class="p-5"><div class="text-[10px] font-extrabold uppercase tracking-[.15em] text-leaf-700">Irrigation</div><h3 class="mt-2 text-lg font-extrabold">Water Pump Set</h3><p class="mt-2 text-sm leading-6 text-slate-500">Petrol/diesel pump sets for irrigation, water transfer and field use.</p><a href="#contact" class="mt-4 inline-flex text-sm font-extrabold text-leaf-700">Request Price →</a></div></article>
          <article class="group overflow-hidden rounded-[1.5rem] border bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-card"><div class="bg-lime-50 p-6"><img src="https://s.alicdn.com/%40sc04/kf/A82e10e916cb14aecb619e16702fb2b8cB/Fairly-used-seed-drill-supplied-in-wholesale-stock-with-reliable-soil-penetration-performance.png" alt="Seed Drill Machine" class="h-44 w-full object-contain mix-blend-multiply"></div><div class="p-5"><div class="text-[10px] font-extrabold uppercase tracking-[.15em] text-leaf-700">Sowing</div><h3 class="mt-2 text-lg font-extrabold">Seed Drill / Seeder</h3><p class="mt-2 text-sm leading-6 text-slate-500">Manual and tractor-operated seeders for uniform placement and spacing.</p><a href="#contact" class="mt-4 inline-flex text-sm font-extrabold text-leaf-700">Request Price →</a></div></article>
          <article class="group overflow-hidden rounded-[1.5rem] border bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-card"><div class="bg-stone-100 p-6"><img src="https://image.made-in-china.com/202f0j00VMOowvAcyLrY/Good-Selling-Custom-Hand-Tools-Farming-Weed-Steel-Handle-Garde-Sickle.webp" alt="Agriculture Hand Tools" class="h-44 w-full object-contain mix-blend-multiply"></div><div class="p-5"><div class="text-[10px] font-extrabold uppercase tracking-[.15em] text-leaf-700">Farm Hardware</div><h3 class="mt-2 text-lg font-extrabold">Hand Tools Set</h3><p class="mt-2 text-sm leading-6 text-slate-500">Khurpi, spade, shovel, sickle, hoe, rake, axe, pruning tools and more.</p><a href="#contact" class="mt-4 inline-flex text-sm font-extrabold text-leaf-700">Request Price →</a></div></article>
          <article class="group overflow-hidden rounded-[1.5rem] border bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-card"><div class="bg-slate-100 p-6"><img src="https://image.made-in-china.com/2f0j00LuMejmHPraky/Casting-Shaft-Combine-Harvester-Agricultural-Machinery-Spare-Parts-for-Jd-Rotary-Tiller-Blades-Pto-Shaft-Gearbox-Farm-Equipment-Tractor-Part.webp" alt="Agriculture Machine Spare Parts" class="h-44 w-full object-contain mix-blend-multiply"></div><div class="p-5"><div class="text-[10px] font-extrabold uppercase tracking-[.15em] text-leaf-700">Spares</div><h3 class="mt-2 text-lg font-extrabold">Machine Spare Parts</h3><p class="mt-2 text-sm leading-6 text-slate-500">Belts, bearings, blades, recoil starters, chains, carburetors, filters and cables.</p><a href="#contact" class="mt-4 inline-flex text-sm font-extrabold text-leaf-700">Request Price →</a></div></article>
        </div>

        <div class="mt-14 rounded-[2rem] bg-leaf-950 p-7 text-white lg:p-10"><div class="grid gap-8 lg:grid-cols-[.9fr_1.1fr] lg:items-center"><div><div class="text-xs font-extrabold uppercase tracking-[.2em] text-yellow-400">More Products</div><h3 class="mt-3 text-2xl font-extrabold sm:text-3xl">Everything your farm counter needs.</h3><p class="mt-4 text-sm leading-7 text-white/65">We can add your complete catalogue with product image, model, engine power, size, specifications, MRP and dealer price.</p></div><div class="grid grid-cols-2 gap-3 text-sm sm:grid-cols-3"><div class="rounded-xl bg-white/7 p-4">✔ Mini Tiller</div><div class="rounded-xl bg-white/7 p-4">✔ Knapsack Sprayer</div><div class="rounded-xl bg-white/7 p-4">✔ Battery Sprayer</div><div class="rounded-xl bg-white/7 p-4">✔ Chainsaw</div><div class="rounded-xl bg-white/7 p-4">✔ Earth Auger</div><div class="rounded-xl bg-white/7 p-4">✔ Pruning Saw</div><div class="rounded-xl bg-white/7 p-4">✔ PVC / HDPE Pipe</div><div class="rounded-xl bg-white/7 p-4">✔ Drip Fittings</div><div class="rounded-xl bg-white/7 p-4">✔ Tarpaulin</div><div class="rounded-xl bg-white/7 p-4">✔ Hose Pipe</div><div class="rounded-xl bg-white/7 p-4">✔ Spray Nozzles</div><div class="rounded-xl bg-white/7 p-4">✔ Tractor Hardware</div></div></div></div>
      </div>
    </section>

    <section class="py-24">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"><div class="mx-auto max-w-3xl text-center"><div class="text-xs font-extrabold uppercase tracking-[.22em] text-leaf-700">Why KisanPro</div><h2 class="mt-4 text-3xl font-extrabold text-slate-950 sm:text-5xl">More than a machine supplier.</h2></div><div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-4"><div class="rounded-3xl bg-white p-7 shadow-sm"><div class="text-3xl">🛡️</div><h3 class="mt-4 text-lg font-extrabold">Quality Assured</h3><p class="mt-3 text-sm leading-6 text-slate-500">Products inspected for performance, build quality and safe operation.</p></div><div class="rounded-3xl bg-white p-7 shadow-sm"><div class="text-3xl">🧩</div><h3 class="mt-4 text-lg font-extrabold">Parts Available</h3><p class="mt-3 text-sm leading-6 text-slate-500">Consumables and common replacement parts for easy maintenance.</p></div><div class="rounded-3xl bg-white p-7 shadow-sm"><div class="text-3xl">📞</div><h3 class="mt-4 text-lg font-extrabold">Sales Guidance</h3><p class="mt-3 text-sm leading-6 text-slate-500">Help in choosing capacity, model and attachments for the intended work.</p></div><div class="rounded-3xl bg-white p-7 shadow-sm"><div class="text-3xl">🤝</div><h3 class="mt-4 text-lg font-extrabold">Dealer Support</h3><p class="mt-3 text-sm leading-6 text-slate-500">Bulk pricing, repeat supply and product support for resellers.</p></div></div></div>
    </section>

    <section id="service" class="bg-leaf-900 py-24 text-white">
      <div class="mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-[.9fr_1.1fr] lg:px-8"><div><div class="text-xs font-extrabold uppercase tracking-[.22em] text-yellow-400">After Sales Support</div><h2 class="mt-4 text-3xl font-extrabold leading-tight sm:text-5xl">Support that keeps machines working.</h2><p class="mt-5 text-base leading-8 text-white/65">A good agriculture machine must stay useful after the sale. That is why the website highlights service, spare availability and operator guidance.</p><a href="#contact" class="mt-8 inline-flex rounded-full bg-yellow-400 px-6 py-3.5 text-sm font-extrabold text-leaf-950">Talk to Service Team →</a></div><div class="grid gap-4 sm:grid-cols-2"><div class="rounded-3xl border border-white/10 bg-white/5 p-6"><div class="text-3xl">🔧</div><h3 class="mt-4 text-lg font-extrabold">Repair Assistance</h3><p class="mt-2 text-sm leading-6 text-white/60">Basic troubleshooting and service coordination.</p></div><div class="rounded-3xl border border-white/10 bg-white/5 p-6"><div class="text-3xl">📦</div><h3 class="mt-4 text-lg font-extrabold">Spare Dispatch</h3><p class="mt-2 text-sm leading-6 text-white/60">Fast dispatch of commonly required machine parts.</p></div><div class="rounded-3xl border border-white/10 bg-white/5 p-6"><div class="text-3xl">📘</div><h3 class="mt-4 text-lg font-extrabold">Usage Guidance</h3><p class="mt-2 text-sm leading-6 text-white/60">Operating, basic maintenance and attachment guidance.</p></div><div class="rounded-3xl border border-white/10 bg-white/5 p-6"><div class="text-3xl">🏪</div><h3 class="mt-4 text-lg font-extrabold">Dealer Supply</h3><p class="mt-2 text-sm leading-6 text-white/60">Catalogue, pricing and repeat stock support for dealers.</p></div></div></div>
    </section>

    <section id="contact" class="py-24">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <?php if(session('success')): ?>
          <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 px-5 py-4 font-semibold text-green-800"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
          <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4 text-red-800">
            <div class="font-extrabold">Please check the form:</div>
            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm"><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li><?php echo e($error); ?></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul>
          </div>
        <?php endif; ?><div class="overflow-hidden rounded-[2rem] bg-white shadow-card"><div class="grid lg:grid-cols-[.8fr_1.2fr]"><div class="bg-leaf-800 p-8 text-white sm:p-10 lg:p-12"><div class="text-xs font-extrabold uppercase tracking-[.2em] text-yellow-400">Contact Sales</div><h2 class="mt-4 text-3xl font-extrabold">Need price, catalogue or dealership?</h2><p class="mt-4 text-sm leading-7 text-white/65">Send your requirement and our sales team can contact you with the right product options.</p><div class="mt-8 space-y-4 text-sm"><div class="rounded-2xl bg-white/8 p-4">📞 <span class="ml-2 font-bold">+91 98765 43210</span></div><div class="rounded-2xl bg-white/8 p-4">💬 <span class="ml-2 font-bold">WhatsApp Enquiry</span></div><div class="rounded-2xl bg-white/8 p-4">✉ <span class="ml-2 font-bold">sales@kisanpro.in</span></div><div class="rounded-2xl bg-white/8 p-4">📍 <span class="ml-2 font-bold">Uttar Pradesh, India</span></div></div></div><form method="POST" action="<?php echo e(route('enquiries.store')); ?>" class="grid gap-5 p-8 sm:p-10 lg:grid-cols-2 lg:p-12">
<?php echo csrf_field(); ?><div class="lg:col-span-2"><div class="text-xs font-extrabold uppercase tracking-[.2em] text-leaf-700">Quick Enquiry</div><h3 class="mt-2 text-2xl font-extrabold text-slate-950">Tell us what you need</h3></div><label class="text-sm font-bold">Full Name<input required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 font-normal outline-none focus:border-leaf-500" name="name" value="<?php echo e(old('name')); ?>" placeholder="Your name"></label><label class="text-sm font-bold">Mobile Number<input required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 font-normal outline-none focus:border-leaf-500" name="mobile" value="<?php echo e(old('mobile')); ?>" placeholder="+91 XXXXX XXXXX"></label><label class="text-sm font-bold">Requirement<select name="requirement" class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5 font-normal outline-none focus:border-leaf-500"><option value="Farm Machinery" <?php if(old('requirement') === 'Farm Machinery'): echo 'selected'; endif; ?>>Farm Machinery</option><option value="Sprayer / Crop Protection" <?php if(old('requirement') === 'Sprayer / Crop Protection'): echo 'selected'; endif; ?>>Sprayer / Crop Protection</option><option value="Irrigation Equipment" <?php if(old('requirement') === 'Irrigation Equipment'): echo 'selected'; endif; ?>>Irrigation Equipment</option><option value="Hand Tools" <?php if(old('requirement') === 'Hand Tools'): echo 'selected'; endif; ?>>Hand Tools</option><option value="Hardware & Spare Parts" <?php if(old('requirement') === 'Hardware & Spare Parts'): echo 'selected'; endif; ?>>Hardware & Spare Parts</option><option value="Dealership / Bulk Order" <?php if(old('requirement') === 'Dealership / Bulk Order'): echo 'selected'; endif; ?>>Dealership / Bulk Order</option></select></label><label class="text-sm font-bold">City / District<input class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 font-normal outline-none focus:border-leaf-500" name="city" value="<?php echo e(old('city')); ?>" placeholder="Your location"></label><label class="text-sm font-bold lg:col-span-2">Message<textarea name="message" rows="4" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 font-normal outline-none focus:border-leaf-500" placeholder="Product name, quantity or any specific requirement"><?php echo e(old('message')); ?></textarea></label><div class="lg:col-span-2"><button class="w-full rounded-xl bg-leaf-700 px-6 py-4 text-sm font-extrabold text-white hover:bg-leaf-800">Send Enquiry →</button></div></form></div></div></div>
    </section>
  </main>

  <footer class="bg-leaf-950 text-white/70"><div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8"><div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4"><div><div class="font-display text-2xl font-extrabold text-white">KISAN<span class="text-leaf-400">PRO</span></div><p class="mt-4 text-sm leading-7">Agriculture machinery, farm hardware, tools, irrigation equipment and spare parts.</p></div><div><h4 class="text-sm font-extrabold text-white">Quick Links</h4><div class="mt-4 space-y-3 text-sm"><a class="block hover:text-white" href="#about">About Company</a><a class="block hover:text-white" href="#products">Products</a><a class="block hover:text-white" href="#service">Service Support</a><a class="block hover:text-white" href="#contact">Dealer Enquiry</a></div></div><div><h4 class="text-sm font-extrabold text-white">Top Categories</h4><div class="mt-4 space-y-3 text-sm"><div>Farm Machinery</div><div>Crop Protection</div><div>Irrigation</div><div>Hand Tools & Hardware</div></div></div><div><h4 class="text-sm font-extrabold text-white">Contact</h4><div class="mt-4 space-y-3 text-sm"><div>+91 98765 43210</div><div>sales@kisanpro.in</div><div>Uttar Pradesh, India</div></div></div></div><div class="mt-12 flex flex-col gap-3 border-t border-white/10 pt-6 text-xs sm:flex-row sm:justify-between"><div>© 2026 KisanPro Agro Equipment. All rights reserved.</div><div>Built for agriculture business growth.</div></div></div></footer>

  <a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="fixed bottom-5 right-5 z-50 grid h-14 w-14 place-items-center rounded-full bg-green-500 text-2xl text-white shadow-2xl" aria-label="WhatsApp">💬</a>

  <script>
    const btn=document.getElementById('menuBtn'), menu=document.getElementById('mobileMenu');
    btn.addEventListener('click',()=>menu.classList.toggle('hidden'));
    menu.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>menu.classList.add('hidden')));
  </script>
</body>
</html>
<?php /**PATH D:\work1\agriculture-laravel-auth-dashboard\agriculture\resources\views/home.blade.php ENDPATH**/ ?>