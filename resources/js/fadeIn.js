export const initSectionFadeIn = () => {
	const containers = Array.from(document.querySelectorAll('section, header')).filter((element) => {
		if (element.hasAttribute('data-no-fade')) {
			return false;
		}
		return Boolean(element.closest('main'));
	});

	if (!containers.length) return;

	const hiddenClass = 'fade-section__item';
	const visibleClass = 'is-visible';
	const hasObserver = 'IntersectionObserver' in window;
	let observer = null;

	if (hasObserver) {
		observer = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (!entry.isIntersecting) return;

					const items = entry.target.querySelectorAll(`.${hiddenClass}`);
					items.forEach((item) => item.classList.add(visibleClass));
					observer.unobserve(entry.target);
				});
			},
			{ threshold: 0.2 }
		);
	}

	containers.forEach((container) => {
		const items = Array.from(container.children).filter((child) => child.nodeType === Node.ELEMENT_NODE);
		if (!items.length) return;

		items.forEach((item, index) => {
			item.classList.add(hiddenClass);
			item.style.setProperty('--fade-delay', `${index * 140}ms`);
		});

		if (observer) {
			observer.observe(container);
		} else {
			items.forEach((item) => item.classList.add(visibleClass));
		}
	});
};
