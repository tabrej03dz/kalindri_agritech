<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('page-title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>





<div
    class="overflow-hidden rounded-3xl bg-gradient-to-r
           from-brand-900 via-brand-800 to-brand-700
           p-6 text-white shadow-card sm:p-8"
>

    <div
        class="flex flex-col gap-6 lg:flex-row
               lg:items-center lg:justify-between"
    >

        <div>

            <div
                class="text-xs font-bold uppercase tracking-[.2em]
                       text-emerald-200"
            >
                Business Overview
            </div>

            <h2
                class="mt-3 text-2xl font-extrabold sm:text-3xl"
            >
                Welcome,
                <?php echo e(auth()->user()->name); ?> 👋
            </h2>

            <p
                class="mt-2 max-w-2xl text-sm leading-6
                       text-white/70"
            >
                Manage your agriculture products, stock and
                customer enquiries from one dashboard.
            </p>

        </div>


        <a
            href="<?php echo e(route('products.create')); ?>"
            class="inline-flex items-center justify-center gap-2
                   self-start rounded-xl bg-white
                   px-5 py-3 text-sm font-bold
                   text-brand-800 shadow-lg transition
                   hover:bg-emerald-50"
        >

            <svg
                class="h-5 w-5"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path d="M12 5v14M5 12h14"/>
            </svg>

            Add New Product

        </a>

    </div>

</div>






<div
    class="mt-6 grid gap-4 sm:grid-cols-2
           xl:grid-cols-4"
>

    

    <a
        href="<?php echo e(route('products.index')); ?>"
        class="group rounded-2xl border border-slate-200
               bg-white p-5 shadow-card transition
               hover:-translate-y-0.5 hover:shadow-lg"
    >

        <div class="flex items-start justify-between">

            <div>

                <div
                    class="text-xs font-bold uppercase
                           tracking-wide text-slate-400"
                >
                    Total Products
                </div>

                <div
                    class="mt-3 text-3xl font-extrabold
                           text-slate-950"
                >
                    <?php echo e(number_format($totalProducts)); ?>

                </div>

                <div
                    class="mt-2 text-xs font-semibold
                           text-emerald-600"
                >
                    <?php echo e($activeProducts); ?> active products
                </div>

            </div>

            <div
                class="grid h-12 w-12 place-items-center
                       rounded-2xl bg-violet-50
                       text-violet-600"
            >

                <svg
                    class="h-6 w-6"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path d="M5 4h11l3 3v13H5z"/>
                    <path d="M15 4v4h4"/>
                    <path d="M8 12h8M8 16h6"/>
                </svg>

            </div>

        </div>

    </a>


    

    <div
        class="rounded-2xl border border-slate-200
               bg-white p-5 shadow-card"
    >

        <div class="flex items-start justify-between">

            <div>

                <div
                    class="text-xs font-bold uppercase
                           tracking-wide text-slate-400"
                >
                    Total Stock
                </div>

                <div
                    class="mt-3 text-3xl font-extrabold
                           text-slate-950"
                >
                    <?php echo e(number_format($totalStock)); ?>

                </div>

                <div
                    class="mt-2 text-xs font-semibold
                           text-amber-600"
                >
                    <?php echo e($lowStockProducts); ?> low stock
                </div>

            </div>

            <div
                class="grid h-12 w-12 place-items-center
                       rounded-2xl bg-amber-50
                       text-amber-600"
            >

                <svg
                    class="h-6 w-6"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path d="M4 8l8-4 8 4-8 4z"/>
                    <path d="M4 8v8l8 4 8-4V8"/>
                    <path d="M12 12v8"/>
                </svg>

            </div>

        </div>

    </div>


    

    <div
        class="rounded-2xl border border-slate-200
               bg-white p-5 shadow-card"
    >

        <div class="flex items-start justify-between">

            <div>

                <div
                    class="text-xs font-bold uppercase
                           tracking-wide text-slate-400"
                >
                    Total Enquiries
                </div>

                <div
                    class="mt-3 text-3xl font-extrabold
                           text-slate-950"
                >
                    <?php echo e(number_format($totalEnquiries)); ?>

                </div>

                <div
                    class="mt-2 text-xs font-semibold
                           text-sky-600"
                >
                    <?php echo e($todayEnquiries); ?> received today
                </div>

            </div>

            <div
                class="grid h-12 w-12 place-items-center
                       rounded-2xl bg-sky-50 text-sky-600"
            >

                <svg
                    class="h-6 w-6"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path d="M4 5h16v11H8l-4 4z"/>
                    <path d="M8 9h8M8 12h5"/>
                </svg>

            </div>

        </div>

    </div>


    

    <div
        class="rounded-2xl border border-slate-200
               bg-white p-5 shadow-card"
    >

        <div class="flex items-start justify-between">

            <div>

                <div
                    class="text-xs font-bold uppercase
                           tracking-wide text-slate-400"
                >
                    Dealer / Bulk
                </div>

                <div
                    class="mt-3 text-3xl font-extrabold
                           text-slate-950"
                >
                    <?php echo e(number_format($dealerEnquiries)); ?>

                </div>

                <div
                    class="mt-2 text-xs font-semibold
                           text-violet-600"
                >
                    Dealership enquiries
                </div>

            </div>

            <div
                class="grid h-12 w-12 place-items-center
                       rounded-2xl bg-rose-50 text-rose-600"
            >

                <svg
                    class="h-6 w-6"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path d="M3 21h18"/>
                    <path d="M5 21V8l7-5 7 5v13"/>
                    <path d="M9 21v-6h6v6"/>
                </svg>

            </div>

        </div>

    </div>

</div>






<div
    class="mt-6 grid gap-4 sm:grid-cols-2
           xl:grid-cols-4"
>

    <div
        class="rounded-2xl bg-emerald-500 p-5 text-white"
    >

        <div
            class="text-xs font-bold uppercase
                   text-white/70"
        >
            Active Products
        </div>

        <div
            class="mt-2 text-2xl font-extrabold"
        >
            <?php echo e($activeProducts); ?>

        </div>

    </div>


    <div
        class="rounded-2xl bg-violet-600 p-5 text-white"
    >

        <div
            class="text-xs font-bold uppercase
                   text-white/70"
        >
            Featured Products
        </div>

        <div
            class="mt-2 text-2xl font-extrabold"
        >
            <?php echo e($featuredProducts); ?>

        </div>

    </div>


    <div
        class="rounded-2xl bg-amber-400 p-5
               text-amber-950"
    >

        <div
            class="text-xs font-bold uppercase
                   text-amber-900/70"
        >
            Low Stock
        </div>

        <div
            class="mt-2 text-2xl font-extrabold"
        >
            <?php echo e($lowStockProducts); ?>

        </div>

    </div>


    <div
        class="rounded-2xl bg-rose-500 p-5 text-white"
    >

        <div
            class="text-xs font-bold uppercase
                   text-white/70"
        >
            Out of Stock
        </div>

        <div
            class="mt-2 text-2xl font-extrabold"
        >
            <?php echo e($outOfStockProducts); ?>

        </div>

    </div>

</div>






<div
    class="mt-6 grid gap-6
           xl:grid-cols-[minmax(0,1.5fr)_minmax(360px,.7fr)]"
>


    

    <section
        class="overflow-hidden rounded-2xl
               border border-slate-200 bg-white
               shadow-card"
    >

        <div
            class="flex items-center justify-between
                   border-b border-slate-100
                   px-5 py-5 sm:px-6"
        >

            <div>

                <h2
                    class="font-extrabold text-slate-950"
                >
                    Recent Enquiries
                </h2>

                <p
                    class="mt-1 text-xs text-slate-400"
                >
                    Latest customer enquiries from website
                </p>

            </div>

        </div>


        <div class="overflow-x-auto">

            <table
                class="w-full min-w-[650px] text-left"
            >

                <thead
                    class="bg-slate-50 text-[11px]
                           font-bold uppercase tracking-wide
                           text-slate-400"
                >

                    <tr>
                        <th class="px-6 py-3">
                            Customer
                        </th>

                        <th class="px-6 py-3">
                            Requirement
                        </th>

                        <th class="px-6 py-3">
                            City
                        </th>

                        <th class="px-6 py-3">
                            Date
                        </th>
                    </tr>

                </thead>


                <tbody class="divide-y divide-slate-100">

                <?php $__empty_1 = true; $__currentLoopData = $recentEnquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr class="hover:bg-slate-50/60">

                        <td class="px-6 py-4">

                            <div
                                class="text-sm font-bold
                                       text-slate-900"
                            >
                                <?php echo e($enquiry->name); ?>

                            </div>

                            <div
                                class="mt-1 text-xs
                                       text-slate-400"
                            >
                                <?php echo e($enquiry->mobile); ?>

                            </div>

                        </td>


                        <td class="px-6 py-4">

                            <div
                                class="max-w-[220px] truncate
                                       text-sm font-semibold
                                       text-slate-700"
                            >
                                <?php echo e($enquiry->requirement); ?>

                            </div>

                        </td>


                        <td
                            class="px-6 py-4 text-sm
                                   text-slate-500"
                        >
                            <?php echo e($enquiry->city ?: '—'); ?>

                        </td>


                        <td
                            class="whitespace-nowrap px-6 py-4
                                   text-xs text-slate-400"
                        >
                            <?php echo e($enquiry->created_at->format('d M Y')); ?>

                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>

                        <td
                            colspan="4"
                            class="px-6 py-12 text-center
                                   text-sm text-slate-400"
                        >
                            No enquiries received yet.
                        </td>

                    </tr>

                <?php endif; ?>

                </tbody>

            </table>

        </div>

    </section>


    

    <section
        class="overflow-hidden rounded-2xl
               border border-slate-200 bg-white
               shadow-card"
    >

        <div
            class="flex items-center justify-between
                   border-b border-slate-100
                   px-5 py-5"
        >

            <div>

                <h2
                    class="font-extrabold text-slate-950"
                >
                    Recent Products
                </h2>

                <p
                    class="mt-1 text-xs text-slate-400"
                >
                    Recently added catalogue items
                </p>

            </div>


            <a
                href="<?php echo e(route('products.index')); ?>"
                class="text-xs font-bold text-brand-700
                       hover:underline"
            >
                View all
            </a>

        </div>


        <div class="divide-y divide-slate-100">

            <?php $__empty_1 = true; $__currentLoopData = $recentProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <div
                    class="flex items-center gap-3 p-4"
                >

                    <div
                        class="h-12 w-12 shrink-0
                               overflow-hidden rounded-xl
                               bg-slate-100"
                    >

                        <?php if($product->image): ?>

                            <img
                                src="<?php echo e(Storage::url($product->image)); ?>"
                                alt="<?php echo e($product->name); ?>"
                                class="h-full w-full object-cover"
                            >

                        <?php else: ?>

                            <div
                                class="grid h-full w-full
                                       place-items-center
                                       text-brand-700"
                            >
                                <svg
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path d="M4 5h16v14H4z"/>
                                    <circle cx="9" cy="10" r="2"/>
                                    <path d="M4 17l5-5 3 3 3-2 5 4"/>
                                </svg>
                            </div>

                        <?php endif; ?>

                    </div>


                    <div class="min-w-0 flex-1">

                        <div
                            class="truncate text-sm
                                   font-bold text-slate-900"
                        >
                            <?php echo e($product->name); ?>

                        </div>

                        <div
                            class="mt-1 truncate text-xs
                                   text-slate-400"
                        >
                            <?php echo e($product->category ?: 'Uncategorized'); ?>

                        </div>

                    </div>


                    <span
                        class="
                            rounded-full px-2.5 py-1
                            text-[10px] font-bold

                            <?php echo e($product->is_active
                                ? 'bg-emerald-50 text-emerald-700'
                                : 'bg-rose-50 text-rose-700'); ?>

                        "
                    >
                        <?php echo e($product->is_active
                            ? 'Active'
                            : 'Inactive'); ?>

                    </span>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <div
                    class="p-10 text-center"
                >

                    <div
                        class="text-sm text-slate-400"
                    >
                        No products added yet.
                    </div>

                    <a
                        href="<?php echo e(route('products.create')); ?>"
                        class="mt-3 inline-flex text-sm
                               font-bold text-brand-700"
                    >
                        Add your first product →
                    </a>

                </div>

            <?php endif; ?>

        </div>

    </section>

</div>






<div
    class="mt-6 rounded-2xl border border-slate-200
           bg-white p-5 shadow-card sm:p-6"
>

    <div>

        <h2 class="font-extrabold text-slate-950">
            Quick Actions
        </h2>

        <p class="mt-1 text-xs text-slate-400">
            Frequently used admin actions
        </p>

    </div>


    <div
        class="mt-5 grid gap-3 sm:grid-cols-2
               lg:grid-cols-4"
    >

        <a
            href="<?php echo e(route('products.create')); ?>"
            class="rounded-xl border border-slate-200
                   p-4 transition hover:border-brand-300
                   hover:bg-brand-50"
        >

            <div
                class="text-sm font-bold text-slate-900"
            >
                + Add Product
            </div>

            <div
                class="mt-1 text-xs text-slate-400"
            >
                Create new catalogue product
            </div>

        </a>


        <a
            href="<?php echo e(route('products.index')); ?>"
            class="rounded-xl border border-slate-200
                   p-4 transition hover:border-brand-300
                   hover:bg-brand-50"
        >

            <div
                class="text-sm font-bold text-slate-900"
            >
                Manage Products
            </div>

            <div
                class="mt-1 text-xs text-slate-400"
            >
                Edit, delete and manage stock
            </div>

        </a>


        <a
            href="<?php echo e(route('home')); ?>#products"
            target="_blank"
            class="rounded-xl border border-slate-200
                   p-4 transition hover:border-brand-300
                   hover:bg-brand-50"
        >

            <div
                class="text-sm font-bold text-slate-900"
            >
                Product Catalogue
            </div>

            <div
                class="mt-1 text-xs text-slate-400"
            >
                View live website products
            </div>

        </a>


        <a
            href="<?php echo e(route('home')); ?>"
            target="_blank"
            class="rounded-xl border border-slate-200
                   p-4 transition hover:border-brand-300
                   hover:bg-brand-50"
        >

            <div
                class="text-sm font-bold text-slate-900"
            >
                Open Website
            </div>

            <div
                class="mt-1 text-xs text-slate-400"
            >
                Preview your public website
            </div>

        </a>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work1\agriculture-laravel-auth-dashboard\resources\views/dashboard.blade.php ENDPATH**/ ?>