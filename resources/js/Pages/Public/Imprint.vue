<template>
    <public-layout title="Impressum">

        <Navbar />

        <div>
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="text-center">
                    <span class="text-base font-semibold text-brand-primary-primary-500 tracking-wide uppercase">FCG
                        Villach</span>
                    <h1 class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                        Impressum</h1>
                    <p class="text-lg">
                        Angaben gemäß § 5 ECG und Offenlegung nach § 25 Mediengesetz.
                    </p>
                </div>
            </div>
        </div>

        <section class="pb-24">
            <div class="max-w-3xl mx-auto px-6 space-y-10">

                <!-- Betreiber -->
                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Diensteanbieter
                    </h2>

                    <p class="leading-relaxed">
                        Freie Christengemeinde Villach<br />
                        Freikirche als Teil der Freien Christengemeinde - Pfingstgemeinde FCGÖ<br />
                        Vassacher Straße 28 <br>
                        9500 Villach<br>
                        Österreich
                    </p>
                </div>

                <!-- Kontakt -->
                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Kontakt
                    </h2>

                    <p class="leading-relaxed">
                        E-Mail: office@fcg-villach.at<br>
                        Telefon: +43 650 58 93 0 93
                    </p>
                </div>

                <!-- Rechtsform -->
                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Rechtsform
                    </h2>

                    <p class="leading-relaxed">
                        Körperschaft öffentlichen Rechts
                    </p>
                </div>

                <!-- Tätigkeit -->
                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Tätigkeitsbereich
                    </h2>

                    <p class="leading-relaxed">
                        Religiöse Tätigkeit, Gemeindearbeit, Gottesdienste, Veranstaltungen und christliche
                        Bildungsangebote.
                    </p>
                </div>

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Aufsichtsbehörde gem. ECG (E-Commerce Gesetz)
                    </h2>

                    <p class="leading-relaxed">
                        Freikirchen Österreichs
                    </p>
                </div>


                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Bildrechte
                    </h2>

                    <p>Bilder kommen von <a href="https://unsplash.com" target="_blank"
                            class="text-brand-primary hover:underline">Unsplash</a> oder <a href="https://pexels.com"
                            target="_blank" class="text-brand-primary hover:underline">Pexels</a>.</p>
                </div>

                <!-- Haftung -->
                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Haftung für Inhalte
                    </h2>

                    <p class="leading-relaxed">
                        Die Inhalte dieser Website wurden mit größtmöglicher Sorgfalt erstellt. Dennoch kann keine
                        Gewähr für die Richtigkeit, Vollständigkeit oder Aktualität der bereitgestellten
                        Informationen übernommen werden.<br />

                        Diese Website enthält Verlinkungen zu externen Diensten und Plattformen, darunter Facebook,
                        Instagram und WhatsApp. Für die Inhalte dieser externen Websites sind ausschließlich die
                        jeweiligen Betreiber verantwortlich. Auf deren Inhalte und zukünftige Änderungen besteht
                        kein Einfluss, weshalb hierfür keine Haftung übernommen wird.
                    </p>
                </div>

                <!-- Links -->
                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Haftung für Links
                    </h2>

                    <p class="leading-relaxed">
                        Diese Website enthält Links zu externen Websites Dritter, auf deren Inhalte
                        kein Einfluss besteht. Für diese Inhalte wird keine Haftung übernommen.
                    </p>
                </div>

                <!-- Copyright -->
                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Urheberrecht
                    </h2>

                    <p class="leading-relaxed">
                        Die auf dieser Website erstellten Inhalte und Werke unterliegen dem
                        Urheberrecht. Beiträge Dritter sind entsprechend gekennzeichnet.
                    </p>
                </div>

                <!-- KI -->
                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        KI-generierte Inhalte
                    </h2>

                    <p class="leading-relaxed">
                        Für die Erstellung und Optimierung von Inhalten, Texten, Bildern, Code sowie internen
                        Arbeitsprozessen können auf dieser Website und im Unternehmen Technologien der Künstlichen
                        Intelligenz (KI) eingesetzt werden.
                        <br /><br />
                        Trotz sorgfältiger Prüfung aller veröffentlichten Inhalte kann nicht ausgeschlossen werden,
                        dass durch KI-generierte oder KI-unterstützte Inhalte Fehler, Ungenauigkeiten oder
                        unvollständige Informationen entstehen. Sämtliche Inhalte werden nach bestem Wissen
                        bereitgestellt, jedoch ohne Gewähr für deren Richtigkeit, Vollständigkeit oder Aktualität.
                        <br /><br />
                        Eine Haftung für Schäden, die direkt oder indirekt aus der Nutzung von KI-generierten oder
                        KI-unterstützten Inhalten entstehen, ist - soweit gesetzlich zulässig - ausgeschlossen.
                    </p>
                </div>
            </div>
        </section>
    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Navbar from "@/Partials/Navbar.vue";
import Footer from "@/Partials/Footer.vue";
</script>
