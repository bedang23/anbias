import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                anbias: {
                    bg: '#141414',
                    bg2: '#1C1C1C',
                    surface: 'rgba(255,255,255,0.06)',
                    text: '#F5F2EE',
                    accent: '#C8F135',
                    accent2: '#B8E020',
                },
            },
            fontFamily: {
                sans: ['Syne', ...defaultTheme.fontFamily.sans],
                mono: ['JetBrains Mono', ...defaultTheme.fontFamily.mono],
            },
            boxShadow: {
                'anbias-accent': '4px 4px 0 rgba(200, 241, 53, 0.30)',
            },
        },
    },
    plugins: [],
};
