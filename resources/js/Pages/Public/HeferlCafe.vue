<template>
    <public-layout title="Events">
        <Navbar/>

        <div class="bg-gradient-to-b from-white to-gray-100 dark:from-gray-800 dark:to-gray-800">
            <div class="text-center mt-16 sm:mt-12 md:mt-16 lg:mt-20 xl:mt-28 pb-6 px-5">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                    Heferl <span class="text-brand-primary">Café</span>
                </h1>
                <p class="mt-3 max-w-5xl lg:max-w-4xl text-gray-500 dark:text-gray-400 mx-auto text-xl sm:text-lg md:mt-5 lg:max-w-3xl md:text-xl">
                    Kommt, seht und schmeckt wie herrlich der Herr ist. Jeden ersten Freitag im Monat.
                </p>
            </div>

            <!-- First Section -->
            <div class="overflow-hidden bg-white dark:bg-gray-800 py-12 sm:py-12">
                <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
                    <!-- <div class="max-w-4xl">
                        <p class="text-base/7 font-semibold text-brand-primary-600">Über uns</p>
                        <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Auf einer Mission die Leute zu begeistern</h1>
                        <p class="mt-6 text-balance text-xl/8 text-gray-700">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas.</p>
                    </div> -->
                    <section class="mt-20 grid grid-cols-1 lg:grid-cols-2 lg:gap-x-8 lg:gap-y-16">
                            <div class="lg:pr-8">
                            <h2 class="text-pretty text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Unsere Mission</h2>
                            <p class="mt-6 text-base/7 text-gray-600 dark:text-gray-400">Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id.</p>
                            <p class="mt-8 text-base/7 text-gray-600 dark:text-gray-400">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem vel integer orci.</p>
                            </div>
                            <div class="pt-16 lg:row-span-2 lg:-mr-16 xl:mr-auto">
                            <div class="-mx-8 grid grid-cols-2 gap-4 sm:-mx-16 sm:grid-cols-4 lg:mx-0 lg:grid-cols-2 lg:gap-4 xl:gap-8">
                                <div class="aspect-square overflow-hidden rounded-xl shadow-xl outline outline-1 -outline-offset-1 outline-black/10">
                                <img alt="" src="https://images.unsplash.com/photo-1590650516494-0c8e4a4dd67e?&auto=format&fit=crop&crop=center&w=560&h=560&q=90" class="block size-full object-cover" />
                                </div>
                                <div class="-mt-8 aspect-square overflow-hidden rounded-xl shadow-xl outline outline-1 -outline-offset-1 outline-black/10 lg:-mt-40">
                                <img alt="" src="https://images.unsplash.com/photo-1557804506-669a67965ba0?&auto=format&fit=crop&crop=left&w=560&h=560&q=90" class="block size-full object-cover" />
                                </div>
                                <div class="aspect-square overflow-hidden rounded-xl shadow-xl outline outline-1 -outline-offset-1 outline-black/10">
                                <img alt="" src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?&auto=format&fit=crop&crop=left&w=560&h=560&q=90" class="block size-full object-cover" />
                                </div>
                                <div class="-mt-8 aspect-square overflow-hidden rounded-xl shadow-xl outline outline-1 -outline-offset-1 outline-black/10 lg:-mt-40">
                                <img alt="" src="https://images.unsplash.com/photo-1598257006458-087169a1f08d?&auto=format&fit=crop&crop=center&w=560&h=560&q=90" class="block size-full object-cover" />
                                </div>
                            </div>
                            </div>
                            <div class="max-lg:mt-16 lg:col-span-1">
                            <p class="text-base/7 font-semibold text-gray-500 dark:text-gray-400">Die Zahlen</p>
                            <hr class="mt-6 border-t border-gray-200 dark:border-gray-700" />
                            <dl class="mt-6 grid grid-cols-1 gap-x-8 gap-y-4 sm:grid-cols-2">
                                <div class="flex flex-col gap-y-2 border-b border-dotted border-gray-200 dark:border-gray-700 pb-4">
                                <dt class="text-sm/6 text-gray-600 dark:text-gray-400">Kuchen gebacken</dt>
                                <dd class="order-first text-6xl font-semibold tracking-tight dark:text-white"><span>>150</span></dd>
                                </div>
                                <div class="flex flex-col gap-y-2 border-b border-dotted border-gray-200 dark:border-gray-700 pb-4">
                                <dt class="text-sm/6 text-gray-600 dark:text-gray-400">Gegündet</dt>
                                <dd class="order-first text-6xl font-semibold tracking-tight dark:text-white"><span>2015</span></dd>
                                </div>
                                <div class="flex flex-col gap-y-2 max-sm:border-b max-sm:border-dotted max-sm:border-gray-200 dark:max-sm:border-gray-700 max-sm:pb-4">
                                <dt class="text-sm/6 text-gray-600 dark:text-gray-400">Keine Kosten</dt>
                                <dd class="order-first text-6xl font-semibold tracking-tight dark:text-white"><span>0€</span></dd>
                                </div>
                                <div class="flex flex-col gap-y-2">
                                <dt class="text-sm/6 text-gray-600 dark:text-gray-400">Kuchen zur Auswahl</dt>
                                <dd class="order-first text-6xl font-semibold tracking-tight dark:text-white"><span>8</span></dd>
                                </div>
                            </dl>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        

            <!-- Second Section -->
            <!-- <div class="bg-white pb-24 sm:pb-32">
                <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
                    <div class="mt-10 grid grid-cols-1 gap-4 sm:mt-16 lg:grid-cols-6 lg:grid-rows-2">
                        <div class="relative lg:col-span-3">
                        <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem] lg:rounded-tl-[2rem]" />
                        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)] lg:rounded-tl-[calc(2rem+1px)]">
                            <img class="h-80 object-cover object-left" src="https://tailwindui.com/plus-assets/img/component-images/bento-01-performance.png" alt="" />
                            <div class="p-10 pt-4">
                            <h3 class="text-sm/4 font-semibold text-brand-primary-600">Performance</h3>
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Lightning-fast builds</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida justo et nulla efficitur, maximus egestas sem pellentesque.</p>
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem] lg:rounded-tl-[2rem]" />
                        </div>
                        <div class="relative lg:col-span-3">
                        <div class="absolute inset-px rounded-lg bg-white lg:rounded-tr-[2rem]" />
                        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-tr-[calc(2rem+1px)]">
                            <img class="h-80 object-cover object-left lg:object-right" src="https://tailwindui.com/plus-assets/img/component-images/bento-01-releases.png" alt="" />
                            <div class="p-10 pt-4">
                            <h3 class="text-sm/4 font-semibold text-brand-primary-600">Releases</h3>
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Push to deploy</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Curabitur auctor, ex quis auctor venenatis, eros arcu rhoncus massa, laoreet dapibus ex elit vitae odio.</p>
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-tr-[2rem]" />
                        </div>
                        <div class="relative lg:col-span-2">
                        <div class="absolute inset-px rounded-lg bg-white lg:rounded-bl-[2rem]" />
                        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-bl-[calc(2rem+1px)]">
                            <img class="h-80 object-cover object-left" src="https://tailwindui.com/plus-assets/img/component-images/bento-01-speed.png" alt="" />
                            <div class="p-10 pt-4">
                            <h3 class="text-sm/4 font-semibold text-brand-primary-600">Speed</h3>
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Built for power users</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Sed congue eros non finibus molestie. Vestibulum euismod augue.</p>
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-bl-[2rem]" />
                        </div>
                        <div class="relative lg:col-span-2">
                        <div class="absolute inset-px rounded-lg bg-white" />
                        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)]">
                            <img class="h-80 object-cover" src="https://tailwindui.com/plus-assets/img/component-images/bento-01-integrations.png" alt="" />
                            <div class="p-10 pt-4">
                            <h3 class="text-sm/4 font-semibold text-brand-primary-600">Integrations</h3>
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Connect your favorite tools</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Maecenas at augue sed elit dictum vulputate, in nisi aliquam maximus arcu.</p>
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5" />
                        </div>
                        <div class="relative lg:col-span-2">
                        <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-br-[2rem]" />
                        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-br-[calc(2rem+1px)]">
                            <img class="h-80 object-cover" src="https://tailwindui.com/plus-assets/img/component-images/bento-01-network.png" alt="" />
                            <div class="p-10 pt-4">
                            <h3 class="text-sm/4 font-semibold text-brand-primary-600">Network</h3>
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Globally distributed CDN</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Aenean vulputate justo commodo auctor vehicula in malesuada semper.</p>
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-br-[2rem]" />
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Team Section -->
            <div class="bg-gray-50 dark:bg-gray-900 py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 dark:text-white sm:text-5xl">Our team</h2>
                    <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-400">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
                </div>
                <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <li v-for="person in people" :key="person.name">
                    <img class="aspect-[3/2] w-full rounded-2xl object-cover" :src="person.imageUrl" alt="" />
                    <h3 class="mt-6 text-lg/8 font-semibold tracking-tight text-gray-900 dark:text-white">{{ person.name }}</h3>
                    <p class="text-base/7 text-gray-600 dark:text-gray-400">{{ person.role }}</p>
                    </li>
                </ul>
                </div>
            </div>

            <!-- Galerie Section -->
            <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
                <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
                    <div class="group relative aspect-[2/1] overflow-hidden rounded-lg sm:aspect-auto">
                        <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/home-page-03-featured-category.jpg" alt="Two models wearing women's black cotton crewneck tee and off-white cotton crewneck tee." class="absolute size-full object-cover group-hover:opacity-75">
                        <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                        <div class="absolute inset-0 flex items-end p-6">
                        <div>
                            <h3 class="font-semibold text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                New Arrivals
                            </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                        </div>
                    </div>
                    <div class="group relative aspect-[2/1] overflow-hidden rounded-lg sm:aspect-auto">
                        <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/home-page-03-category-01.jpg" alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters." class="absolute size-full object-cover group-hover:opacity-75">
                        <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                        <div class="absolute inset-0 flex items-end p-6">
                        <div>
                            <h3 class="font-semibold text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Accessories
                            </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                        </div>
                    </div>
                    <div class="group relative aspect-[2/1] overflow-hidden rounded-lg sm:aspect-auto">
                        <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/home-page-03-category-02.jpg" alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk." class="absolute size-full object-cover group-hover:opacity-75">
                        <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                        <div class="absolute inset-0 flex items-end p-6">
                        <div>
                            <h3 class="font-semibold text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Workspace
                            </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                        </div>
                    </div>
                    <div class="group relative aspect-[2/1] overflow-hidden rounded-lg sm:aspect-auto">
                        <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/home-page-03-category-02.jpg" alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk." class="absolute size-full object-cover group-hover:opacity-75">
                        <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                        <div class="absolute inset-0 flex items-end p-6">
                        <div>
                            <h3 class="font-semibold text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Workspace
                            </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Navbar from "@/Partials/Navbar.vue";

const people = [
  {
    name: 'Erika Korbitsch',
    role: 'Bäckerin',
    imageUrl:
      'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
  },
    {
    name: 'Andrea Kirisits',
    role: 'Bäckerin',
    imageUrl:
      'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
  },
    {
    name: 'Erika Korbitsch',
    role: 'Bäckerin',
    imageUrl:
      'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
  },
    {
    name: 'Andrea Kirisits',
    role: 'Bäckerin',
    imageUrl:
      'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
  },
    {
    name: 'Erika Korbitsch',
    role: 'Bäckerin',
    imageUrl:
      'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
  },
    {
    name: 'Andrea Kirisits',
    role: 'Bäckerin',
    imageUrl:
      'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
  },
]
</script>
