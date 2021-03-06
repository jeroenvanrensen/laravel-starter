module.exports = {
	purge: [
		'./resources/**/*.blade.php'
	],
	darkMode: 'media',
	theme: {
		extend: {}
	},
	variants: {
		extend: {}
	},
	plugins: [
		require('@tailwindcss/forms')
	]
}
