"use strict";

(function($) {
	$(document).on('ready', function() {
		var $body = $('body, html');
		var $nav = $('.nav');
		var $hotIssue = $('.hot-issue');

		$nav.each(function(){
			var $sitemap = $nav.find('.sitemap');

			$sitemap.on('click', function(e){
				e.preventDefault();

				if($nav.hasClass('on')){
					$nav.removeClass('on');
					$body.css({
						'position':'static'
					});
				}else{
					$nav.toggleClass('on');
					$body.css({
						'position':'fixed'
					});
				}
			});
		})

		$hotIssue.each(function(){
			var $prevIssue = $hotIssue.find('.prev-issue');
			var $nextIssue = $hotIssue.find('.next-issue');
			var $issueUl = $hotIssue.find('>ul');
			var $issueLi = $issueUl.find('>li');
			var toggleCheck = false;

			$prevIssue.on('click',function(){
				if(!toggleCheck){
					$issueUl.stop().slideDown();
					$body.css({
						'position':'fixed'
					});
					toggleCheck = true;

				}else{
					$issueUl.stop().slideUp();
					$body.css({
						'position':'static'
					});
					toggleCheck = false;
				}
			});

			$issueLi.on('click', 'a',function(e){
				e.preventDefault();
				var $thisText = $(this).text();
				$prevIssue.find('.issue-select').html($thisText);

				$issueUl.stop().slideUp();
				$body.css({
					'position':'static'
				});
				toggleCheck = false;

			});
		})
	});
})(jQuery);