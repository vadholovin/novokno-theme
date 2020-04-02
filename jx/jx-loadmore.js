/**
 * AJAX Load More
 */
jQuery(function ($) {
  $('.js-more-articles').click(function () {

		var button = $(this),
		    data = {
          'action': 'loadmore',
          'query': vh_loadmore_params.posts, // that's how we get params from wp_localize_script() function
          'page' : vh_loadmore_params.current_page
    };

		$.ajax({ // you can also use $.post here
			url : vh_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Загружается...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
        var observer = lozad('.lozad', {}); // init lazy loading plugin
        
				if( data ) {
          var $items = $( data ); // data is the HTML of loaded posts
          $('.articles__grid').append( $items ); // insert new posts
					button.text( 'Загрузить еще' );
					vh_loadmore_params.current_page++;

					if ( vh_loadmore_params.current_page == vh_loadmore_params.max_page ) {
            button.remove(); // if last page, remove the button
          }

					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
        }
        
        observer.observe();
			}
		});
  });
  
  $('.js-more-projects').click(function () {

		var button = $(this),
		    data = {
          'action': 'loadmore',
          'query': posts_projects, // that's how we get params from wp_localize_script() function
          'page' : current_page_projects
    };
    console.dir(data);

		$.ajax({ // you can also use $.post here
			url : vh_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Загружается...'); // change the button text, you can also add a preloader image
			},
			success : function( data ) {
        var observer = lozad('.lozad', {}); // init lazy loading plugin
        
				if( data ) {
          var $items = $( data ); // data is the HTML of loaded posts
          $('.articles__grid').append( $items ); // insert new posts
					button.text( 'Загрузить еще' );
					current_page_projects++;

					if ( current_page_projects == max_page_projects ) {
            button.remove(); // if last page, remove the button
          }

					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
        }
        
        observer.observe();
			}
		});
	});
});