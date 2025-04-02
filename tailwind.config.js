/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        // Add paths to your Blade templates
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            fontFamily: {
                cinzel: ['Cinzel Decorative', 'serif'],  // Font Cinzel Decorative
                indie: ['Indie Flower', 'cursive'],      // Font Indie Flower
                lateef: ['Lateef', 'serif'],             // Font Lateef
            },
        },
    },
    plugins: [],
}
