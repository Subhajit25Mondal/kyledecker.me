<div class="home-projects wrapper">
  <?php foreach($site->find('work')->children()->visible() as $project): ?>
    <?php if($project != $page): ?>
      <a class="home-project <?= 'color-'.$project->color() ?>" href="<?= $project->url() ?>">
        <span class="project-logo">
          <?php snippet($project->slug().'/logo') ?>
        </span>
        <h2>
          <?= $project->title()->html() ?>
          <span class="arrow"><?php snippet('arrow-r') ?></span>
          <?php if ($project->isPasswordProtected() == '1' && !$site->user()): ?>
            <span class="project-locked"><?php snippet('icons/lock') ?></span>
          <?php endif ?>
        </h2>
        <p><?= $project->tagline()->html() ?></p>
      </a>
    <?php endif ?>
  <?php endforeach ?>
  <a class="home-project home-project-about" href="<?= $site->find('about')->url() ?>">
    <span class="project-logo"><?php snippet('about/logo') ?></span>
    <h2>About <span class="arrow"><?php snippet('arrow-r') ?></span></h2>
    <p>On the most viewed thing I’ve ever created, plus social links, design ideology, and contact info.</p>
  </a>
</div>
