<div class="carouselAcc">
    <?php
    $images = [
        "https://proprietes.lefigaro.fr/images/PDF/CMS/articles/11108772-1592902603.71.jpg",
        "https://cdn.futura-sciences.com/buildsv6/images/largeoriginal/c/a/a/caab6ef88f_50164713_sp-mobilier-tendance-2020-1.jpg",
        "https://www.presse-citron.net/app/uploads/2023/05/maison-immobilier.jpg"
    ];
    
    foreach ($images as $index => $url) {
        echo "<div class='slide' style='background-image: url($url);'></div>";
    }
    ?>
</div>

