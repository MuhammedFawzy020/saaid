
<?php
$local = 'ar';
?>


<div class="about-section">
  <div class="inner-container">
    <div class="ab-det-head-title">
        <h6 style="padding-bottom:30px;">ـــ من نحن</h6>
    </div>
    <h1>شركة ساعد للاستقدام</h1>
    <p class="text">
    {{ $setting->about_us }}
    </p>
    <ul class="description-list list-unstyled">
        <li>
            <i class="fa-solid fa-circle-check"></i>
            - {{ $settings->getTranslation('service', $local) }}
        </li>
        <li>
            <i class="fa-solid fa-circle-check"></i>
            - {{ $settings->getTranslation('license', $local) }}
        </li>
        <li>
            <i class="fa-solid fa-circle-check"></i>
            - {{ $settings->getTranslation('security', $local) }}
        </li>
        <li>
            <i class="fa-solid fa-circle-check"></i>
            - {{ $settings->getTranslation('delivery', $local) }}
        </li>
    </ul>
    <!-- <div class="skills">
      <span>Web Design</span>
      <span>Photoshop & Illustrator</span>
      <span>Coding</span>
    </div> -->
  </div>
</div>
