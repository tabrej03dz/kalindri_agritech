<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | KisanPro Agro Equipment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    <style>body{font-family:Inter,sans-serif}h1,h2,h3{font-family:Manrope,sans-serif}</style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-800">
<header class="border-b bg-white">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4">
            <a href="<?php echo e(route('home')); ?>" class="text-xl font-extrabold text-slate-950">KISAN<span class="text-green-700">PRO</span></a>
            <span class="hidden rounded-full bg-green-50 px-3 py-1 text-xs font-extrabold text-green-800 sm:inline">ADMIN DASHBOARD</span>
        </div>
        <div class="flex items-center gap-3">
            <a href="<?php echo e(route('home')); ?>" class="hidden rounded-xl border px-4 py-2 text-sm font-bold sm:inline-flex">View Website</a>
            <form method="POST" action="<?php echo e(route('logout')); ?>"><?php echo csrf_field(); ?><button class="rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-bold text-white">Logout</button></form>
        </div>
    </div>
</header>
<main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
        <div><p class="text-xs font-extrabold uppercase tracking-[.2em] text-green-700">Business Overview</p><h1 class="mt-2 text-3xl font-extrabold text-slate-950">Welcome, <?php echo e(auth()->user()->name); ?></h1><p class="mt-2 text-sm text-slate-500">Track website enquiries and customer requirements.</p></div>
        <div class="text-sm text-slate-500"><?php echo e(now()->format('d M Y')); ?></div>
    </div>

    <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <div class="rounded-2xl border bg-white p-6"><div class="text-sm font-bold text-slate-500">Total Enquiries</div><div class="mt-3 text-3xl font-extrabold text-slate-950"><?php echo e($totalEnquiries); ?></div></div>
        <div class="rounded-2xl border bg-white p-6"><div class="text-sm font-bold text-slate-500">Today's Enquiries</div><div class="mt-3 text-3xl font-extrabold text-green-700"><?php echo e($todayEnquiries); ?></div></div>
        <div class="rounded-2xl border bg-white p-6"><div class="text-sm font-bold text-slate-500">Dealer / Bulk</div><div class="mt-3 text-3xl font-extrabold text-slate-950"><?php echo e($dealerEnquiries); ?></div></div>
        <div class="rounded-2xl bg-green-900 p-6 text-white"><div class="text-sm font-bold text-white/60">Website</div><div class="mt-3 text-lg font-extrabold">Live & Connected</div><a href="<?php echo e(route('home')); ?>" class="mt-3 inline-flex text-sm font-bold text-lime-300">Open website →</a></div>
    </div>

    <div class="mt-8 grid gap-6 lg:grid-cols-[1fr_320px]">
        <section class="overflow-hidden rounded-2xl border bg-white">
            <div class="flex items-center justify-between border-b px-6 py-5"><div><h2 class="text-lg font-extrabold text-slate-950">Recent Enquiries</h2><p class="mt-1 text-xs text-slate-500">Latest website form submissions</p></div></div>
            <div class="overflow-x-auto">
                <table class="w-full min-w-[760px] text-left text-sm">
                    <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-500"><tr><th class="px-6 py-3">Customer</th><th class="px-6 py-3">Requirement</th><th class="px-6 py-3">City</th><th class="px-6 py-3">Date</th></tr></thead>
                    <tbody class="divide-y">
                    <?php $__empty_1 = true; $__currentLoopData = $recentEnquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-slate-50"><td class="px-6 py-4"><div class="font-bold text-slate-900"><?php echo e($enquiry->name); ?></div><div class="mt-1 text-xs text-slate-500"><?php echo e($enquiry->mobile); ?></div></td><td class="px-6 py-4"><div class="font-semibold"><?php echo e($enquiry->requirement); ?></div><?php if($enquiry->message): ?><div class="mt-1 max-w-sm truncate text-xs text-slate-500"><?php echo e($enquiry->message); ?></div><?php endif; ?></td><td class="px-6 py-4"><?php echo e($enquiry->city ?: '—'); ?></td><td class="px-6 py-4 text-slate-500"><?php echo e($enquiry->created_at->format('d M, h:i A')); ?></td></tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr><td colspan="4" class="px-6 py-12 text-center text-slate-500">No enquiries yet. Website submissions will appear here.</td></tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <aside class="space-y-4">
            <div class="rounded-2xl border bg-white p-6"><h3 class="font-extrabold text-slate-950">Quick Actions</h3><div class="mt-4 space-y-3"><a href="<?php echo e(route('home')); ?>#products" class="block rounded-xl bg-slate-50 px-4 py-3 text-sm font-bold hover:bg-green-50">View Products</a><a href="<?php echo e(route('home')); ?>#contact" class="block rounded-xl bg-slate-50 px-4 py-3 text-sm font-bold hover:bg-green-50">Open Enquiry Form</a><a href="https://wa.me/919876543210" target="_blank" class="block rounded-xl bg-green-50 px-4 py-3 text-sm font-bold text-green-800">Open WhatsApp</a></div></div>
            <div class="rounded-2xl bg-amber-50 p-6"><div class="text-xs font-extrabold uppercase tracking-[.16em] text-amber-700">Next Step</div><h3 class="mt-2 font-extrabold text-slate-950">Ready for product management</h3><p class="mt-2 text-sm leading-6 text-slate-600">This dashboard can later be extended with product/category CRUD, image upload and enquiry status management.</p></div>
        </aside>
    </div>
</main>
</body>
</html>
<?php /**PATH D:\work1\agriculture-laravel-auth-dashboard\agriculture\resources\views/dashboard.blade.php ENDPATH**/ ?>