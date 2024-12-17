var countStarted = false; // Változó, hogy csak egyszer induljon el a számolás

window.addEventListener('scroll', function() {
    var banner = document.getElementById('banner');
    var bannerPosition = banner.getBoundingClientRect().top;
    var windowHeight = window.innerHeight;

    // Ha a banner felkerül a képernyőre és még nem indult el a számolás
    if (bannerPosition < windowHeight && !countStarted) {
        countStarted = true;
        var count1 = document.getElementById('count1');
        var count2 = document.getElementById('count2');
        var count3 = document.getElementById('count3');

        // Felfelé "számolás" indítása
        var startCounting = function(target, endValue, startValue, intervalSpeed) {
            var currentValue = startValue;
            var interval = setInterval(function() {
                if (currentValue >= endValue) {
                    clearInterval(interval);
                } else {
                    currentValue++;
                    target.innerText = currentValue;
                }
            }, intervalSpeed); // A számlálás sebessége (ms)
        };

        // Start counting
        startCounting(count1, 12, 0, 160);
        startCounting(count2, 100, 60, 100); // Kicsit lassabb számlálás
        startCounting(count3, 16, 0, 160);
    }
});
