/**
 * AJAX Load More
 */
jQuery(function($){
	$('.js-more-posts').click(function () {
    var button = $(this),
        currentPage = button.data('current'),
        maxPages = button.data('max-pages');

    button.text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
    
		var data = {
			'action': 'loadmore',
			'query': button.data('ajax-posts'),
			'page': currentPage
    };
    
		$.ajax({
			url: ajaxurl,
			data: data,
			type: 'POST',
			success: function(data) {
        var observer = lozad('.lozad', {}); // init lazy loading plugin

				if ( data ) { 
					button.text('Загрузить еще').parent().before(data); // вставляем новые посты
          currentPage++; // увеличиваем номер страницы на единицу
          button.attr( 'data-current', currentPage );
					if (currentPage == maxPages) button.parent().remove(); // если последняя страница, удаляем блок с кнопкой
				} else {
          console.log('OOps')
					// button.parent().remove(); // если мы дошли до последней страницы постов, удаляем блок с кнопкой
        }
        
        observer.observe();
			}
		});
	});
});

