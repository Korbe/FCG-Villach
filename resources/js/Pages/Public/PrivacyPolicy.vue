<template>
    <public-layout title="Datenschutzerklärung"
        description="Datenschutzerklärung der FCG Villach: Informationen zu Datenverarbeitung, Cookies, Google Analytics und Ihren Rechten.">

        <Navbar />

        <div class="bg-white dark:bg-gray-800">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="text-center">
                    <span class="text-base font-semibold text-brand-primary-500 tracking-wide uppercase">FCG
                        Villach</span>
                    <h1 class="mt-1 text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
                        Datenschutzerklärung</h1>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                        Wie wir mit Ihren Daten auf dieser Website umgehen.
                    </p>
                </div>
            </div>
        </div>

        <section class="pb-24 bg-white dark:bg-gray-800">
            <div class="max-w-3xl mx-auto px-6 space-y-10">

                <nav aria-label="Inhaltsverzeichnis"
                    class="rounded-2xl bg-gray-50 dark:bg-gray-700 ring-1 ring-gray-900/5 dark:ring-white/10 p-6">
                    <h2 class="text-lg font-semibold text-brand-primary mb-3">Inhalt</h2>
                    <ol class="grid gap-x-6 gap-y-1.5 text-sm sm:grid-cols-2 list-decimal list-inside">
                        <li v-for="section in sections" :key="section.id">
                            <a :href="`#${section.id}`" :class="linkClass">{{ section.title }}</a>
                        </li>
                    </ol>
                </nav>

                <div id="allgemein" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        1. Allgemeine Hinweise
                    </h2>

                    <p class="leading-relaxed">
                        Der Schutz Ihrer personenbezogenen Daten ist uns als Freie Christengemeinde Villach wichtig.
                        Wir verarbeiten Daten nur, soweit dies für den Betrieb dieser Website und zur Beantwortung
                        Ihrer Anfragen erforderlich ist, und verwahren sie sicher. Wir verkaufen keine Daten und
                        verwenden sie nicht für Werbezwecke. Einzelne technische Dienste Dritter, die wir einsetzen,
                        sind unten aufgeführt.<br><br>
                        Predigten werden vorerst nur als Audio aufgenommen. Wenn Fotos gemacht werden, wird jede
                        Person gefragt, ob sie öffentlich gezeigt werden möchte.
                    </p>

                    <p class="mt-4">
                        Die Adresse unserer Website ist: <a href="https://fcg-villach.at" :class="linkClass">fcg-villach.at</a>
                    </p>
                </div>

                <div id="verantwortlicher" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        2. Verantwortlicher
                    </h2>

                    <address class="leading-relaxed not-italic">
                        Freie Christengemeinde Villach<br>
                        Vassacher Straße 28<br>
                        9500 Villach, Österreich<br><br>
                        Ansprechperson für Datenschutz: Markus Kirisits<br>
                        E-Mail: <a href="mailto:markus.kirisits@fcg-villach.at" :class="linkClass">markus.kirisits@fcg-villach.at</a>
                    </address>
                </div>

                <div id="logfiles" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        3. Hosting und Server-Logfiles
                    </h2>

                    <p class="leading-relaxed">
                        Der Hosting-Provider erhebt und speichert automatisch Informationen in sogenannten
                        Server-Logfiles, die Ihr Browser automatisch übermittelt. Dies sind insbesondere:
                    </p>

                    <ul class="mt-4 text-neutral-500 dark:text-gray-400 text-sm space-y-2">
                        <li>• IP-Adresse</li>
                        <li>• Datum und Uhrzeit der Anfrage</li>
                        <li>• aufgerufene Seite bzw. Datei</li>
                        <li>• Browsertyp und Version</li>
                        <li>• Betriebssystem</li>
                    </ul>

                    <p class="mt-4 leading-relaxed">
                        Die Daten werden zur Auslieferung der Website, zur Gewährleistung der Sicherheit und zur
                        Fehleranalyse verarbeitet (Art. 6 Abs. 1 lit. f DSGVO, berechtigtes Interesse an einem
                        sicheren und stabilen Betrieb) und in der Regel nur kurzzeitig gespeichert. Inhalte können
                        über ein Content Delivery Network des Hosting-Anbieters ausgeliefert werden.
                    </p>
                </div>

                <div id="technisch" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        4. Technisch notwendige Cookies und lokale Speicherung
                    </h2>

                    <p class="leading-relaxed">
                        Für den Betrieb der Website werden technisch notwendige Informationen gespeichert, die keine
                        Zustimmung erfordern:
                    </p>

                    <ul class="mt-4 text-neutral-500 dark:text-gray-400 text-sm space-y-2">
                        <li>• Sitzungs-Cookie und Sicherheits-Token (XSRF), die für den sicheren Betrieb der Seite
                            erforderlich sind</li>
                        <li>• Ihre Cookie-Entscheidung (<code>cookie-consent</code>)</li>
                        <li>• Ihre Wahl zwischen hellem und dunklem Design (<code>theme</code>)</li>
                        <li>• die Information, welche Predigten Sie bereits bis zum Ende angehört haben
                            (<code>completion-hist</code>), damit sie nur einmal gezählt werden</li>
                    </ul>

                    <p class="mt-4 leading-relaxed">
                        Diese Daten verbleiben in Ihrem Browser und werden nicht für Analyse- oder Werbezwecke
                        verwendet (Art. 6 Abs. 1 lit. f DSGVO, § 165 Abs. 3 TKG 2021). Sie können sie jederzeit in
                        Ihrem Browser löschen.
                    </p>
                </div>

                <div id="einwilligung" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        5. Einwilligung (Cookie-Banner)
                    </h2>

                    <p class="leading-relaxed">
                        Google Analytics und die Einbindung von Google Maps werden erst geladen, nachdem Sie im
                        Cookie-Banner zugestimmt haben. Ohne Zustimmung findet keine Datenübertragung an Google
                        statt. Ihre Entscheidung können Sie jederzeit widerrufen oder ändern, indem Sie im Footer
                        der Website auf „Cookie-Einstellungen“ klicken. Der Widerruf berührt nicht die
                        Rechtmäßigkeit der bis dahin erfolgten Verarbeitung (Art. 7 Abs. 3 DSGVO).
                    </p>
                </div>

                <div id="analytics" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        6. Google Analytics
                    </h2>

                    <p class="leading-relaxed">
                        Mit Ihrer Einwilligung verwendet diese Website Google Analytics, einen Webanalysedienst von
                        Google Ireland Limited, Gordon House, Barrow Street, Dublin 4, Irland (Mutterunternehmen:
                        Google LLC, USA).<br><br>
                        Google Analytics verwendet Cookies, die eine Analyse der Benutzung der Website ermöglichen.
                        Die dadurch erzeugten Informationen (z. B. aufgerufene Seiten, ungefährer Standort,
                        Gerätetyp) werden in der Regel an einen Server von Google übertragen und dort gespeichert,
                        auch in den USA. Die IP-Adresse wird anonymisiert verarbeitet. Google LLC ist unter dem
                        EU-US Data Privacy Framework zertifiziert.<br><br>
                        Wir nutzen Google Analytics ausschließlich zur Verbesserung unserer Website und zur Analyse
                        der Nutzung. Rechtsgrundlage ist Ihre Einwilligung (Art. 6 Abs. 1 lit. a DSGVO und § 165
                        Abs. 3 TKG 2021).<br><br>
                        Informationen zum Umgang mit Nutzerdaten durch Google finden Sie in der
                        <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener noreferrer"
                            :class="linkClass">Datenschutzerklärung von Google</a>.
                    </p>
                </div>

                <div id="maps" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        7. Google Maps
                    </h2>

                    <p class="leading-relaxed">
                        Auf den Seiten „Kontakt“ und „Heferl Café“ zeigen wir mit Ihrer Einwilligung eine Karte von
                        Google Maps (Google Ireland Limited, Gordon House, Barrow Street, Dublin 4, Irland). Beim
                        Laden der Karte wird eine Verbindung zu Google hergestellt, dabei werden insbesondere Ihre
                        IP-Adresse und Angaben zu Ihrem Browser an Google übertragen. Ohne Ihre Zustimmung wird die
                        Karte nicht geladen, und es werden keine Daten an Google übermittelt.<br><br>
                        Rechtsgrundlage ist Ihre Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Mehr dazu in der
                        <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener noreferrer"
                            :class="linkClass">Datenschutzerklärung von Google</a>.
                    </p>
                </div>

                <div id="dienste" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        8. Weitere eingebundene Dienste
                    </h2>

                    <p class="leading-relaxed">
                        <strong>Schriftarten (Bunny Fonts):</strong> Zur einheitlichen Darstellung laden wir die
                        Schriftart von Bunny Fonts (BunnyWay d.o.o., Slowenien). Dabei wird Ihre IP-Adresse an den
                        Anbieter übertragen. Die Schriften werden nicht von Google geladen. Rechtsgrundlage ist
                        Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an einer ansprechenden und
                        schnellen Darstellung der Website). Mehr dazu in der
                        <a href="https://bunny.net/privacy/" target="_blank" rel="noopener noreferrer"
                            :class="linkClass">Datenschutzerklärung von bunny.net</a>.<br><br>

                        <strong>Platzhalter-Bilder (ui-avatars.com):</strong> Wenn für eine Person (z. B. den Autor
                        einer Predigt) kein Foto hinterlegt ist, wird ein Bild mit den Initialen von ui-avatars.com
                        geladen. Dabei wird Ihre IP-Adresse an diesen Dienst übertragen. Rechtsgrundlage ist
                        Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an einer vollständigen Darstellung
                        der Seite).
                    </p>
                </div>

                <div id="predigten" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        9. Predigten und Audio-Wiedergabe
                    </h2>

                    <p class="leading-relaxed">
                        Beim Anhören einer Predigt wird lediglich gezählt, wie oft sie gestartet und bis zum Ende
                        angehört wurde. Diese Zählung ist anonym und enthält keine Angaben zu Ihrer Person.
                    </p>
                </div>

                <div id="kontakt" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        10. Kontaktaufnahme
                    </h2>

                    <p class="leading-relaxed">
                        Wenn Sie mit uns per Telefon, E-Mail, SMS oder WhatsApp Kontakt aufnehmen, werden die von
                        Ihnen übermittelten personenbezogenen Daten (z. B. Name, Telefonnummer, E-Mail-Adresse sowie
                        der Inhalt Ihrer Nachricht) zum Zweck der Bearbeitung Ihrer Anfrage und für den Fall von
                        Anschlussfragen verarbeitet.<br><br>

                        Die Verarbeitung erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO (Vertrag bzw.
                        vorvertragliche Maßnahmen) oder Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an einer
                        effizienten Kommunikation mit Interessierten und Gemeindemitgliedern).<br><br>

                        Die Daten werden ausschließlich zur Bearbeitung Ihres Anliegens verwendet und nicht ohne Ihre
                        ausdrückliche Zustimmung an Dritte weitergegeben, sofern keine gesetzliche Verpflichtung
                        hierzu besteht. Sie werden nur so lange gespeichert, wie dies für die Bearbeitung Ihrer
                        Anfrage oder aufgrund gesetzlicher Aufbewahrungspflichten erforderlich ist.<br><br>

                        Anfragen zu Gebet und Seelsorge können Rückschlüsse auf religiöse Überzeugungen zulassen.
                        Wir behandeln sie besonders vertraulich und geben sie nicht weiter (Art. 9 Abs. 2 lit. d
                        DSGVO).<br><br>

                        Bei einer Kontaktaufnahme über WhatsApp werden Ihre Nachricht und Ihre Telefonnummer
                        zusätzlich von WhatsApp (WhatsApp Ireland Limited) verarbeitet. Es gelten die
                        Datenschutzbestimmungen von WhatsApp, die Sie in der
                        <a href="https://www.whatsapp.com/legal/privacy-policy-eea" target="_blank"
                            rel="noopener noreferrer" :class="linkClass">Datenschutzrichtlinie von WhatsApp</a>
                        nachlesen können.
                    </p>
                </div>

                <div id="social" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        11. Externe Links und Social Media
                    </h2>

                    <p class="leading-relaxed">
                        Auf unserer Website finden Sie Verlinkungen zu unseren Profilen und Kommunikationskanälen auf
                        externen Plattformen wie Facebook, Instagram und YouTube. Beim Besuch unserer Website werden
                        keine personenbezogenen Daten an diese Anbieter übermittelt.<br><br>

                        Erst durch das aktive Anklicken eines entsprechenden Links verlassen Sie unsere Website und
                        werden auf die Plattform des jeweiligen Anbieters weitergeleitet. Ab diesem Zeitpunkt gelten
                        die Datenschutzbestimmungen des jeweiligen Dienstes. Eine Übermittlung personenbezogener
                        Daten an diese Anbieter erfolgt ausschließlich durch Ihre freiwillige Interaktion.
                    </p>
                </div>

                <div id="login" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        12. Interner Bereich
                    </h2>

                    <p class="leading-relaxed">
                        Der Login-Bereich dient ausschließlich der Verwaltung der Website (z. B. Predigten und
                        Neuigkeiten) durch berechtigte Personen der Gemeinde. Dabei werden Name, E-Mail-Adresse,
                        verschlüsselt gespeichertes Passwort und Sitzungsdaten verarbeitet (Art. 6 Abs. 1 lit. f
                        DSGVO). Besucherinnen und Besucher der Website sind davon nicht betroffen.
                    </p>
                </div>

                <div id="sicherheit" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        13. Datensicherheit
                    </h2>

                    <p class="leading-relaxed">
                        Diese Website wird über eine verschlüsselte Verbindung (HTTPS) ausgeliefert. Wir treffen
                        angemessene technische und organisatorische Maßnahmen, um Ihre Daten vor Verlust und
                        unbefugtem Zugriff zu schützen.
                    </p>
                </div>

                <div id="rechte" class="p-2 scroll-mt-24">
                    <h2 class="text-lg font-semibold text-brand-primary mb-4">
                        14. Ihre Rechte
                    </h2>

                    <p class="leading-relaxed">
                        Ihnen stehen grundsätzlich folgende Rechte zu:
                    </p>

                    <ul class="mt-4 text-neutral-500 dark:text-gray-400 text-sm space-y-2">
                        <li>• Auskunft (Art. 15 DSGVO)</li>
                        <li>• Berichtigung (Art. 16 DSGVO)</li>
                        <li>• Löschung (Art. 17 DSGVO)</li>
                        <li>• Einschränkung der Verarbeitung (Art. 18 DSGVO)</li>
                        <li>• Datenübertragbarkeit (Art. 20 DSGVO)</li>
                        <li>• Widerspruch (Art. 21 DSGVO)</li>
                        <li>• Widerruf erteilter Einwilligungen (Art. 7 Abs. 3 DSGVO)</li>
                    </ul>

                    <p class="mt-4 leading-relaxed">
                        Zur Ausübung Ihrer Rechte genügt eine Nachricht an
                        <a href="mailto:markus.kirisits@fcg-villach.at" :class="linkClass">markus.kirisits@fcg-villach.at</a>.<br><br>

                        Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt,
                        können Sie sich bei der zuständigen Aufsichtsbehörde beschweren:<br><br>
                        Österreichische Datenschutzbehörde<br>
                        Barichgasse 40–42, 1030 Wien<br>
                        <a href="https://www.dsb.gv.at" target="_blank" rel="noopener noreferrer"
                            :class="linkClass">www.dsb.gv.at</a>
                    </p>
                </div>

                <p class="px-2 text-sm text-gray-500 dark:text-gray-400">
                    Stand: Oktober 2026. Wir passen diese Erklärung an, wenn sich unsere Website oder die
                    rechtlichen Vorgaben ändern.
                </p>
            </div>
        </section>

    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Navbar from "@/Partials/Navbar.vue";

const linkClass = "text-brand-primary hover:underline";

const sections = [
    { id: "allgemein", title: "Allgemeine Hinweise" },
    { id: "verantwortlicher", title: "Verantwortlicher" },
    { id: "logfiles", title: "Hosting und Server-Logfiles" },
    { id: "technisch", title: "Notwendige Cookies und Speicherung" },
    { id: "einwilligung", title: "Einwilligung (Cookie-Banner)" },
    { id: "analytics", title: "Google Analytics" },
    { id: "maps", title: "Google Maps" },
    { id: "dienste", title: "Weitere eingebundene Dienste" },
    { id: "predigten", title: "Predigten und Audio" },
    { id: "kontakt", title: "Kontaktaufnahme" },
    { id: "social", title: "Externe Links und Social Media" },
    { id: "login", title: "Interner Bereich" },
    { id: "sicherheit", title: "Datensicherheit" },
    { id: "rechte", title: "Ihre Rechte" },
];
</script>
