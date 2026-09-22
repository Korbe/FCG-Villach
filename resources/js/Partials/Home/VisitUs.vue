<template>
  <div class="relative bg-brand-secondary-500 mb-10">
    <div class="h-56 bg-brand-primary-300 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">

      <img loading="lazy" class="w-full h-full object-cover" src="/images/gottesdienst.jpg" alt="" />
    </div>
    <div class="relative max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
      <div class="md:ml-auto md:w-1/2 md:pl-10">
        <h2 class="text-base font-semibold uppercase tracking-wider text-brand-secondary-700">Sonntags</h2>
        <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">Gottesdienst</p>
        <p class="mt-3 text-lg text-white">
          Jeden Sonntag findet bei uns um 10 Uhr der Gottesdienst statt.
          Beginnend mit dem Lobpreis und Anbetung Gottes stimmen wir den Gottesdienst ein. Anschließend predigt unser
          Pastor. Für die Kleinen gibt's einen speziellen
          Kindergottesdienst. Die Predigt wird anschließend hier als Audioformat hochgeladen. Es ist keine Anmeldung
          erforderlich!
        </p>

        <div class="mt-3 flex text-lg text-white">
          <ClockIcon class="text-brand-secondary-700 h-6 w-6 mr-2" />
          <p class="ml-2">Sonntags 10 Uhr</p>
        </div>

        <div class="mt-3 flex text-lg text-white">
          <MapPinIcon class="text-brand-secondary-700 h-6 w-6 mr-2" />
          <p class="ml-2">Vassacher Straße 28, 9500 Villach</p>
        </div>

        <div class="mt-8">
          <div class="inline-flex rounded-md shadow">
            <Link :href="route('public.events')"
              class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
            Alle Events anschauen
            </Link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>

import { ClockIcon, MapPinIcon } from "@heroicons/vue/24/outline";
</script>
