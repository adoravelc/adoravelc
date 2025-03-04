// tailwind.config.js
module.exports = {
    purge: [],
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['InterVariable', '...defaultTheme.fontFamily.sans'],
            },
        },
        variants: {
            extend: {},
        },
        plugins: [],
    }
}