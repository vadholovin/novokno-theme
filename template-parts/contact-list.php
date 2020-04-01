<?php if ( is_page( 'about' ) ) : ?>
<ul class="contact-list  contact-list--about">
<?php elseif ( is_page( 'kontakty' ) || is_page( 'zayavka' ) ) : ?>
<ul class="contact-list  contact-list--contacts">
<?php endif; ?>
  <li class="contact-item">
    <?php novokno_icon( 'phone-call', 'stroked', 'contact-item__icon' ) ?>
    <h5 class="contact-item__heading">Наш телефон</h5>
    <?php
    $contacts_phone = get_field( 'contacts_phone', 'option' );	

    if( $contacts_phone ): ?>
    <a class="contact-item__contact" href="tel:<?php echo $contacts_phone['link']; ?>">
      <?php echo $contacts_phone['number']; ?>
    </a>
    <?php endif; ?>
  </li>
  <li class="contact-item">
    <?php novokno_icon( 'envelope', 'stroked', 'contact-item__icon' ) ?>
    <h5 class="contact-item__heading">Наша почта</h5>
    <a class="contact-item__contact" href="mailto:<?php the_field( 'contacts_email', 'option' ); ?>">
      <?php the_field( 'contacts_email', 'option' ); ?>
    </a>
  </li>
  <li class="contact-item">
    <?php novokno_icon( 'placemark', 'stroked', 'contact-item__icon' ) ?>
    <h5 class="contact-item__heading">Наш адрес</h5>
    <span class="contact-item__contact"><?php the_field( 'contacts_address', 'option' ); ?></span>
  </li>
  <?php if ( is_page( 'kontakty' ) || is_page( 'zayavka' ) ) : ?>
    <li class="contact-item">
      <?php novokno_icon( 'clock', 'stroked', 'contact-item__icon' ) ?>
      <h5 class="contact-item__heading">Рабочий график</h5>
      <span class="contact-item__contact"><?php the_field( 'contacts_schedule', 'option' ); ?></span>
    </li>
  <?php endif; ?>
</ul>
