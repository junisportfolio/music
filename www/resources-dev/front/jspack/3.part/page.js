"use strict";

(function($) {
	$(document).on('ready', function() {
		var $body = $('body, html');
		var $nav = $('.nav');
		var $hotIssue = $('.hot-issue');
		var $visuals = $('#visual');
		var $personalInfo = $('.personal-info');


		$nav.each(function(){
			var $sitemap = $('.sitemap', $nav);

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
			var $prevIssue = $('.prev-issue', $hotIssue);
			var $nextIssue = $('.next-issue', $hotIssue);
			var $issueUl = $('>ul', $hotIssue);
			var $issueLi = $('>li', $issueUl);
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
		});

		$personalInfo.each(function(){
			var $personal = $(this);
			var $personalBtn = $('>a', $personal);
			var $personalContent = $('>ul', $personal);
			var $personalCheck = false;
			$personalBtn.on('click', function(e){
				e.preventDefault();

				if(!$personalCheck){
					$personalContent.stop().slideDown(300);
					$personalCheck = true;
				}else{
					$personalContent.stop().slideUp(300);
					$personalCheck = false;
				}


			});


		});

		$visuals.each(function() {
			var $visual = $(this);
			var $visualContent = $('.visual-content', $visual);
			var options = {
				slides : '>li',
				timeout : 2400,
				fx : 'fade',
				log : false,
				pauseOnHover : true,
				pagerActiveClass : 'active'
			};
			var $prev = $('.visual-prev a', $visual).each(function() {
				options.prev = this;
			});
			var $next = $('.visual-next a', $visual).each(function() {
				options.next = this;

				setTimeout(function() {
					$next.click();
				}, 1200);
			});
			var $pager = $('.pagination', $visual).each(function() {
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});

			$visualContent.cycle(options);

			$(document).one('pjax:beforeReplace', function() {
				$visualContent.cycle('destroy');
			});
		});
	});
})(jQuery);