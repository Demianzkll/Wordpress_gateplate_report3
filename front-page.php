<?php get_header();?>

<section class="hero" id="hero">
    <div class="hero__container">
      <div class="hero__content">
        <h1 class="hero__title" data-aos="fade-up">
          <?php the_field('hero_title_part1');?><span class="hero__highlight"> <?php the_field('hero_title_highlight');?></span>
        </h1>
        <p class="hero__text" data-aos="fade-up">
          <?php the_field('hero_subtitle');?>
        </p>
        <div class="hero__buttons">
          <a class="btn" data-aos="fade-up" href="#ready">Почати безкоштовно</a>
          <button class="btn-outline" data-aos="fade-up">Переглянути демо</button>
        </div>
      </div>
    </div>
</section>

  <section class="how-it-works" id="how-it-works">
    <h2 class="section__title"><?php the_field('how_it_works_title');?></h2>
    <p class="section__subtitle"><?php the_field('how_it_works_subtitle');?></p>

    <?php if ( have_rows('steps') ) : ?>
    <div class="steps">
      <?php while ( have_rows('steps') ) : the_row(); 
            $icon  = get_sub_field('step_icon');
            $title = get_sub_field('step_title');
            $text  = get_sub_field('step_text');
        ?>
            <div class="step">
                <?php if ( $icon ) : ?>
                    <div class="step__icon">
                        <i class="<?php echo esc_attr( $icon ); ?>"></i>
                    </div>
                <?php endif; ?>

                <?php if ( $title ) : ?>
                    <h3 class="step__title"><?php echo esc_html( $title ); ?></h3>
                <?php endif; ?>

                <?php if ( $text ) : ?>
                    <p class="step__text"><?php echo esc_html( $text ); ?></p>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </section>

  <section class="section__features" id="features">
    <h2 class="section__title"><?php the_field('features_title');?></h2>
    <p class="section__subtitle"><?php the_field('features_subtitle');?></p>


    <?php if ( have_rows('features') ) : ?>
    <div class="features">
        <?php while ( have_rows('features') ) : the_row(); 
            $icon  = get_sub_field('feature_icon');
            $title = get_sub_field('feature_title');
            $text  = get_sub_field('feature_text');
        ?>
            <div class="feature">
                <?php if ( $icon ) : ?>
                    <div class="feature__icon">
                        <i class="<?php echo esc_attr( $icon ); ?>"></i>
                    </div>
                <?php endif; ?>

                <?php if ( $title ) : ?>
                    <h3 class="feature__title"><?php echo esc_html( $title ); ?></h3>
                <?php endif; ?>

                <?php if ( $text ) : ?>
                    <p class="feature__text"><?php echo esc_html( $text ); ?></p>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    </div> 
  </section>

  <section class="where-use">

    <h2 class="section__title"><?php the_field('where_use_title');?></h2>
    <p class="section__subtitle"><?php the_field('where_use_subtitle');?></p>

    <?php if ( have_rows('facilities') ) : ?>
    <div class="facilities">
      <?php while ( have_rows('facilities') ) : the_row(); 
            $image = get_sub_field('facility_image');
            $title = get_sub_field('facility_title');
            $text  = get_sub_field('facility_text');
        ?>
            <div class="facility">
                <?php if ( $image ) : ?>
                    <div class="facility-img">
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                    </div>
                <?php endif; ?>

                <?php if ( $title ) : ?>
                    <h3 class="facility__title"><?php echo esc_html( $title ); ?></h3>
                <?php endif; ?>

                <?php if ( $text ) : ?>
                    <p class="facility__text"><?php echo esc_html( $text ); ?></p>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </section>

  <section class="ready" id="ready">
    <h2 class="section__title"><?php the_field('ready_title');?></h2>
    <p class="section__subtitle"><?php the_field('ready_subtitle');?></p>

    <form action="" class="ready-form">
      <div class="form-row">
        <div class="form-group">
          <label for="name">Ваше ім’я</label>
          <input type="text" id="name" name="name" placeholder="Введіть ім’я" required>
        </div>

        <div class="form-group">
          <label for="email">Електронна пошта</label>
          <input type="email" id="email" name="email" placeholder="Введіть email" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="phone">Номер телефону</label>
          <input type="tel" id="phone" name="phone" placeholder="+380 67 123 4567" required>
        </div>

        <div class="form-group">
          <label for="company">Компанія</label>
          <input type="text" id="company" name="subject" placeholder="Вкажіть компанію">
        </div>
      </div>

      <label for="message">Повідомлення</label>
      <textarea id="message" name="message" placeholder="Ваше повідомлення..." rows="4"></textarea>

      <button type="submit" class="btn">Надіслати</button>
    </form>
  </section>



<?php get_footer();?>  