<div class="download-and-social">
  <form method="get" action="<?= $site->url() ?>/assets/downloads/KyleDeckerResume.pdf">
  <button type="submit" class="button-download">Download Resume</button>
  </form>
  <ul class="social-links">
    <?php if($site->codepen()->exists()): ?>
      <li class="social-link">
        <a href="https://codepen.io/<?= $site->codepen() ?>">
          <svg class="svg-icon"><use xlink:href="<?= $site->url() ?>/assets/images/social-icons.svg#CodePen"></use></svg>
          <span class="visually-hidden">CodePen</span>
        </a>
      </li>
    <?php endif ?>

    <?php if($site->dribbble()->exists()): ?>
      <li class="social-link">
        <a href="https://dribbble.com/<?= $site->dribbble() ?>">
          <svg class="svg-icon"><use xlink:href="<?= $site->url() ?>/assets/images/social-icons.svg#Dribbble"></use></svg>
          <span class="visually-hidden">Dribbble</span>
        </a>
      </li>
    <?php endif ?>
    
    <?php if($site->github()->exists()): ?>
      <li class="social-link">
        <a href="https://github.com/<?= $site->github() ?>">
          <svg class="svg-icon"><use xlink:href="<?= $site->url() ?>/assets/images/social-icons.svg#Github"></use></svg>
          <span class="visually-hidden">Github</span>
        </a>
      </li>
    <?php endif ?>

    <?php if($site->goodreads()->exists()): ?>
      <li class="social-link">
        <a href="https://www.goodreads.com/<?= $site->goodreads() ?>">
          <svg class="svg-icon"><use xlink:href="<?= $site->url() ?>/assets/images/social-icons.svg#Goodreads"></use></svg>
          <span class="visually-hidden">Goodreads</span>
        </a>
      </li>
    <?php endif ?>
    
    <?php if($site->linkedin()->exists()): ?>
      <li class="social-link">
        <a href="https://www.linkedin.com/in/<?= $site->linkedin() ?>">
          <svg class="svg-icon"><use xlink:href="<?= $site->url() ?>/assets/images/social-icons.svg#LinkedIn"></use></svg>
          <span class="visually-hidden">LinkedIn</span>
        </a>
      </li>
    <?php endif ?>
    
    <?php if($site->twitter()->exists()): ?>
      <li class="social-link">
        <a href="https://www.twitter.com/<?= $site->twitter() ?>">
          <svg class="svg-icon"><use xlink:href="<?= $site->url() ?>/assets/images/social-icons.svg#Twitter"></use></svg>
          <span class="visually-hidden">Twitter</span>
        </a>
      </li>
    <?php endif ?>
  </ul>
<div>
