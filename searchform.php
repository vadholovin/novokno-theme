<form class="form search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="form__row">
    <div class="inputbox">
      <label class="inputbox__label hidden-visually" for="search-input">Искать:</label>
      <div class="inputbox__wrapper">
        <input class="input" name="s" id="search-input" placeholder="Поиск..." type="search" value="<?php echo get_search_query(); ?>" />
      </div>
    </div>
    <button class="btn btn--secondary search-form__btn" type="submit">Найти</button>
  </div>
</form>
