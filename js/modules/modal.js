// js/modules/modal.js

export function initModal() {
    // Attach functions to window so they can be called from HTML onclick
    window.showInsightModal = (num, game) => {
        const modal = document.getElementById('insightModal');
        const content = document.getElementById('modalContent');
        
        document.getElementById('modalNumber').textContent = num;
        document.getElementById('modalSubtitle').textContent = game;
        
        const insights = [
            `This number is considered a "Hot Number" in recent draws.`,
            `It appears frequently in ${game} results.`,
            `Some players consider this number "Lucky".`,
            `The sum of the last 3 draws including this number was high.`,
            `This number often pairs well with even numbers.`
        ];
        document.getElementById('modalBody').innerHTML = insights[Math.floor(Math.random() * insights.length)];

        modal.classList.remove('hidden');
        setTimeout(() => {
            content.classList.remove('scale-95', 'opacity-0');
            content.classList.add('scale-100', 'opacity-100');
        }, 10);
    };

    window.closeInsightModal = () => {
        const modal = document.getElementById('insightModal');
        const content = document.getElementById('modalContent');
        
        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 200);
    };
}