import { ref } from 'vue';

const STORAGE_KEY = 'theme';

function getSystemTheme() {
    return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
}

function getStoredTheme() {
    try {
        return localStorage.getItem(STORAGE_KEY);
    } catch (e) {
        return null;
    }
}

function applyTheme(value) {
    document.documentElement.classList.toggle('dark', value === 'dark');
}

// Module-level state: shared by every component that imports this composable.
const theme = ref(getStoredTheme() ?? getSystemTheme());
applyTheme(theme.value);

// Follow the system preference live, but only as long as the user hasn't
// explicitly overridden it via the nav switch.
if (window.matchMedia) {
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
        if (!getStoredTheme()) {
            theme.value = event.matches ? 'dark' : 'light';
            applyTheme(theme.value);
        }
    });
}

export function useDarkMode() {
    const toggleTheme = () => {
        theme.value = theme.value === 'dark' ? 'light' : 'dark';
        try {
            localStorage.setItem(STORAGE_KEY, theme.value);
        } catch (e) {}
        applyTheme(theme.value);
    };

    return { theme, toggleTheme };
}
