import { ref } from 'vue';

const STORAGE_KEY = 'cookie-consent';
const GA_ID = 'G-PW8BBXXBKM';

function getStored() {
    try {
        return localStorage.getItem(STORAGE_KEY);
    } catch (e) {
        return null;
    }
}

function initAnalytics() {
    if (window.gtag) return;

    const script = document.createElement('script');
    script.async = true;
    script.src = `https://www.googletagmanager.com/gtag/js?id=${GA_ID}`;
    document.head.appendChild(script);

    window.dataLayer = window.dataLayer || [];
    function gtag() {
        window.dataLayer.push(arguments);
    }
    window.gtag = gtag;

    gtag('js', new Date());
    gtag('config', GA_ID, { anonymize_ip: true });
}

// Module-level state: shared by every component that imports this composable.
const consent = ref(getStored());

if (consent.value === 'accepted') {
    initAnalytics();
}

export function useCookieConsent() {
    const accept = () => {
        consent.value = 'accepted';
        try {
            localStorage.setItem(STORAGE_KEY, 'accepted');
        } catch (e) {}
        initAnalytics();
    };

    const reject = () => {
        consent.value = 'rejected';
        try {
            localStorage.setItem(STORAGE_KEY, 'rejected');
        } catch (e) {}
    };

    const reset = () => {
        consent.value = null;
        try {
            localStorage.removeItem(STORAGE_KEY);
        } catch (e) {}
    };

    return { consent, accept, reject, reset };
}
