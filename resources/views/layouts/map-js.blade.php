<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
<script>
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
                center: [41.180621,69.197371],
                zoom: 15,
                controls: []
            }),

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {}, {
                iconLayout: 'default#image',
                iconImageHref: '/img/map.svg',
                iconImageSize: [182, 98],
                iconImageOffset: [-55, -50]
            })
        myMap.geoObjects
            .add(myPlacemark)

        myMap.behaviors.disable('ScrollZoom');

        myMap.panes.get('ground').getElement().style.filter = 'grayscale(100%)';
    });
</script>