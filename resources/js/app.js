import './bootstrap';
import { initSectionFadeIn } from './fadeIn';
import { initNavigation } from './navigation';

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        initSectionFadeIn();
        initNavigation();
    });
} else {
    initSectionFadeIn();
    initNavigation();
}
