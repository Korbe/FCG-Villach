<template>
    <section id="visitus" class="relative py-24 bg-gradient-to-b from-white to-gray-100">
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                <h1 id="freie-christengemeinde" style="scroll-margin: 7rem">
                    <span
                        class="block text-base md:text-center text-brand-primary font-semibold tracking-wide uppercase">FCG
                        Villach</span>
                    <span
                        class="mt-2 block text-3xl md:text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Willkommen
                        auf unserer Homepage</span>
                </h1>
                <p class="mt-8 md:text-center text-xl text-gray-500 leading-8">Als Freie Christengemeinde –
                    Pfingstgemeinde ist es uns
                    ein
                    Anliegen, den Menschen in unserem Land zu dienen, indem wir die gute
                    Nachricht von Jesus Christus gesellschaftsrelevant verkündigen und praktizieren.</p>

            </div>
        </div>

        <div class="container px-5 py-16 mx-auto">
            <div class="flex flex-wrap">
                <!-- v-for Schleife für das Array von welcomeItems -->
                <div v-for="(item, index) in welcomeItems" :key="index" class="xl:w-1/4 md:w-1/2 p-3">

                    <div
                        class="border bg-white border-gray-200 rounded-lg flex items-center flex-col group shadow hover:shadow-lg">


                        <div class="w-full h-56 overflow-hidden rounded-t-lg">
                            <img :src="item.image" alt="Event Image" class="w-full h-full object-cover">
                        </div>


                        <div class="flex items-center px-5">

                            <component :is="item.icon"
                                class="h-14 mb-3 text-brand-primary-500 transition-transform duration-300 group-hover:-translate-y-2" />

                            <div class="p-6 text-left">
                                <h2 class="text-xl text-gray-900 font-medium mb-2">{{ item.title }}</h2>
                                <p class="leading-relaxed text-base">{{ item.description }}</p>
                            </div>

                        </div>





                    </div>
                </div>
            </div>
        </div>


        <div class="flex justify-center">
            <Link :href="route('public.about')"
                class="flex rounded-md shadow items-center justify-center px-10 py-3 border border-transparent text-base font-medium text-white bg-brand-primary hover:bg-brand-primary-400">
            <span>Das sind wir</span>
            <ArrowRightIcon class="h-7 ml-3" />
            </Link>
        </div>
    </section>
</template>
<script>
import {
    ArrowRightIcon,
    BookOpenIcon,
    BuildingLibraryIcon,
    HandRaisedIcon,
    HeartIcon
} from '@heroicons/vue/24/outline'

export default {
    components: {
        ArrowRightIcon,
        BookOpenIcon,
        BuildingLibraryIcon,
        HandRaisedIcon,
        HeartIcon
    },

    data() {
        return {
            welcomeItems: [
                {
                    icon: BookOpenIcon,
                    title: 'Folge der Bibel',
                    description: 'Wir folgen und leben nach den Lehren der Bibel',
                    image: "/images/welcome/bible.jpeg",
                },
                {
                    icon: BuildingLibraryIcon,
                    title: 'Christliche Kirche',
                    description: 'Wir sind eine anerkannte Österreichische Kirche',
                    image: "/images/welcome/kreuz.webp",
                },
                {
                    icon: HandRaisedIcon,
                    title: 'Suche Gott',
                    description: 'Streck deine Arme aus und er wird dich finden',
                    image: "/images/welcome/search.webp",
                },
                {
                    icon: HeartIcon,
                    title: 'Liebe und Fürsorge',
                    description: 'Wir leben Gemeinschaft und sind füreinander da',
                    image: "/images/welcome/care.webp",
                }
            ]
        }
    }
}
</script>