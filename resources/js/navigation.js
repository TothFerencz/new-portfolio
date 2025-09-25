export const initNavigation = () => {
	// Mobil menü toggle
	const menuToggle = document.getElementById('menu-toggle');
	const mobileMenu = document.getElementById('mobile-menu');

	if (menuToggle && mobileMenu) {
		menuToggle.addEventListener('click', () => {
			mobileMenu.classList.toggle('hidden');
		});
	}

	// Smooth scroll minden belső # linkre
	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function (e) {
			const targetId = this.getAttribute('href');
			if (targetId.length > 1) {
				e.preventDefault();
				const target = document.querySelector(targetId);
				if (target) {
					target.scrollIntoView({
						behavior: 'smooth',
						block: 'start'
					});
				}
				// Ha mobil menü nyitva van, zárja be
				if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
					mobileMenu.classList.add('hidden');
				}
			}
		});
	});
};
