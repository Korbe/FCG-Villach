<template>
    <public-layout title="Datenschutz">

        <Navbar />

        <div class="bg-white">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="text-center">
                    <span class="text-base font-semibold text-brand-primary-500 tracking-wide uppercase">FCG Villach</span>
                    <h1 class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Datenschutz</h1>
                </div>
            </div>
        </div>

        <section class="px-4 sm:px-6 max-w-5xl prose mx-auto  lg:prose-lg pb-24">
            <p>
                Als Freie Christengemeinde Villach sind wir verpflichtet alle uns zukommenden Daten sicher und unzugänglich zu verwahren. Wir geben also keine Daten an dritten Personen weiter. Predigten werden vorerst nur in Audio aufgenommen und wenn Fotos gemacht werden, wird jede Person gefragt, ob sie öffentlich gezeigt werden will.
            </p>


            <p>
                Die Adresse unserer Website ist: <a href="https://www.fcg-villach.at">www.fcg-villach.at</a>
            </p>
            <h2>Welche personenbezogenen Daten wir sammeln</h2>

            <h3> Analysedienste</h3>
            <p>Wir verwenden Google Analytics, um Informationen über die Nutzung unserer Website zu sammeln. Diese Informationen werden anonymisiert verarbeitet, um die Benutzererfahrung zu verbessern.</p>
            <h3> Bilder </h3>
            <p>Bilder auf dieser Webseite unterliegen keiner Lizenz. Sie stammen aus der Online Bilderbibliothek <a href="https://unsplash.com/" target="_blank">Unsplash.com</a></p>
            <h3>Ihre Rechte</h3>
            <p>Ihnen stehen bezüglich Ihrer bei uns gespeicherten Daten grundsätzlich die Rechte auf Auskunft, Berichtigung, Löschung, Einschränkung, Datenübertragbarkeit, Widerruf und Widerspruch zu.
                Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt oder Ihre datenschutzrechtlichen Ansprüche sonst in einer Weise verletzt worden sind, können Sie
                sich unter <a href="mailto:datenschutz@fcg-villach.at">datenschutz@fcg-villach.at</a> beschweren.</p>


        </section>

    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Navbar from "@/Partials/Navbar.vue";
import Footer from "@/Partials/Footer.vue";
</script>