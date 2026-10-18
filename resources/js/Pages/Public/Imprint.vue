<template>
    <public-layout title="Impressum"
        description="Impressum und Anbieterkennzeichnung der Freien Christengemeinde Villach.">

        <Navbar />

        <div class="bg-white dark:bg-gray-800">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="text-center">
                    <span class="text-base font-semibold text-brand-primary-500 tracking-wide uppercase">FCG
                        Villach</span>
                    <h1 class="mt-1 text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
                        Impressum</h1>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                        Angaben gemäß § 5 E-Commerce-Gesetz (ECG) und Offenlegung nach § 25 Mediengesetz.
                    </p>
                </div>
            </div>
        </div>

        <section class="pb-24 bg-white dark:bg-gray-800">
            <div class="max-w-3xl mx-auto px-6 space-y-10">

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Diensteanbieter, Medieninhaber und Herausgeber
                    </h2>

                    <address class="leading-relaxed not-italic">
                        Freie Christengemeinde Villach<br />
                        Ortsgemeinde der Freien Christengemeinde – Pfingstgemeinde in Österreich (FCGÖ)<br />
                        Vassacher Straße 28<br />
                        9500 Villach<br />
                        Österreich
                    </address>
                </div>

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Gemeindeleitung
                    </h2>

                    <p class="leading-relaxed">
                        Pastor Christian Korbitsch
                    </p>
                </div>

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Kontakt
                    </h2>

                    <p class="leading-relaxed">
                        E-Mail: <a href="mailto:office@fcg-villach.at" :class="linkClass">office@fcg-villach.at</a><br>
                        Telefon: <a href="tel:+436505893093" :class="linkClass">+43 650 58 93 0 93</a><br>
                        Website: <a href="https://fcg-villach.at" :class="linkClass">fcg-villach.at</a>
                    </p>
                </div>

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Rechtsform
                    </h2>

                    <p class="leading-relaxed">
                        Die Freie Christengemeinde – Pfingstgemeinde in Österreich (FCGÖ) ist seit 26. August 2013
                        gemäß der Verordnung der Bundesministerin für Unterricht, Kunst und Kultur, BGBl. II
                        Nr. 250/2013, eine staatlich anerkannte Kirche und gehört zum Bund der „Freikirchen in
                        Österreich“ (Körperschaft öffentlichen Rechts).
                    </p>
                </div>

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
                        Freikirchen in Österreich
                    </p>
                </div>

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Grundlegende Richtung der Website
                    </h2>

                    <p class="leading-relaxed">
                        Information über die Freie Christengemeinde Villach, ihren Glauben, ihre Veranstaltungen und
                        Predigten sowie Einladung zu Gemeinschaft und Gottesdienst im Sinne der christlichen
                        Botschaft.
                    </p>
                </div>

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Datenschutz
                    </h2>

                    <p class="leading-relaxed">
                        Informationen zur Verarbeitung personenbezogener Daten finden Sie in unserer
                        <Link :href="route('public.privacy')" :class="linkClass">Datenschutzerklärung</Link>.
                    </p>
                </div>

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Haftung für Inhalte
                    </h2>

                    <p class="leading-relaxed">
                        Die Inhalte dieser Website wurden mit größtmöglicher Sorgfalt erstellt. Dennoch kann keine
                        Gewähr für die Richtigkeit, Vollständigkeit oder Aktualität der bereitgestellten
                        Informationen übernommen werden. Sollten Sie auf fehlerhafte oder rechtswidrige Inhalte
                        aufmerksam werden, bitten wir um eine kurze Nachricht an die oben genannte E-Mail-Adresse.
                    </p>
                </div>

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Haftung für Links
                    </h2>

                    <p class="leading-relaxed">
                        Diese Website enthält Verlinkungen zu externen Websites und Plattformen Dritter, darunter
                        Facebook, Instagram, YouTube und WhatsApp. Auf deren Inhalte und zukünftige Änderungen besteht
                        kein Einfluss. Für die Inhalte dieser externen Seiten sind ausschließlich die jeweiligen
                        Betreiber verantwortlich, weshalb hierfür keine Haftung übernommen wird. Bei Bekanntwerden von
                        Rechtsverletzungen werden entsprechende Links umgehend entfernt.
                    </p>
                </div>

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Urheberrecht und Bildrechte
                    </h2>

                    <p class="leading-relaxed">
                        Die auf dieser Website erstellten Inhalte und Werke unterliegen dem Urheberrecht. Eine
                        Vervielfältigung, Bearbeitung oder Verbreitung bedarf der schriftlichen Zustimmung der
                        Freien Christengemeinde Villach. Beiträge Dritter sind entsprechend gekennzeichnet.
                        <br /><br />
                        Verwendete Bilder stammen von der Gemeinde selbst, von
                        <a href="https://unsplash.com" target="_blank" rel="noopener noreferrer"
                            :class="linkClass">Unsplash</a> oder
                        <a href="https://pexels.com" target="_blank" rel="noopener noreferrer"
                            :class="linkClass">Pexels</a> oder sind KI-generiert. Personen auf Fotos werden vor der
                        Veröffentlichung um ihr Einverständnis gebeten.
                    </p>
                </div>

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        KI-generierte Inhalte
                    </h2>

                    <p class="leading-relaxed">
                        Für die Erstellung und Optimierung von Inhalten, Texten, Bildern und Code sowie für interne
                        Arbeitsprozesse können auf dieser Website Technologien der Künstlichen Intelligenz (KI)
                        eingesetzt werden.
                        <br /><br />
                        Trotz sorgfältiger Prüfung aller veröffentlichten Inhalte kann nicht ausgeschlossen werden,
                        dass durch KI-generierte oder KI-unterstützte Inhalte Fehler, Ungenauigkeiten oder
                        unvollständige Informationen entstehen. Sämtliche Inhalte werden nach bestem Wissen
                        bereitgestellt, jedoch ohne Gewähr für deren Richtigkeit, Vollständigkeit oder Aktualität.
                        <br /><br />
                        Eine Haftung für Schäden, die direkt oder indirekt aus der Nutzung von KI-generierten oder
                        KI-unterstützten Inhalten entstehen, ist – soweit gesetzlich zulässig – ausgeschlossen.
                    </p>
                </div>

                <div class="p-2">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        Webentwicklung
                    </h2>

                    <p class="leading-relaxed">
                        Konzept, Gestaltung und Umsetzung dieser Website: Ing. Lukas Korbitsch.
                    </p>
                </div>

                <p class="px-2 text-sm text-gray-500 dark:text-gray-400">Stand: Oktober 2026</p>
            </div>
        </section>
    </public-layout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Navbar from "@/Partials/Navbar.vue";

const linkClass = "text-brand-primary hover:underline";
</script>
