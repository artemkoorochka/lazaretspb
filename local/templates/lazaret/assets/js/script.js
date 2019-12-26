$(function() {
	$('body').on('touchstart', '.clCallTrackingPoint', function() {
		var phone = $(this).text();
		window.location.href="tel://+7"+phone;
	}).on('submit', '[data-handler="onSendForm"]', function(e) {
		var _this = $(this),
			action = _this.attr("data-action");
		switch (action) {
			case "payForm":

				var err = false;

				_this.find('input[type="text"]').each(function(index, el) {
					if($(this).val() == '') {
						err = true;
					}
				});
				if(err) {
					alert("Заполните обязательные поля!");
					return false;
				}

				var dataS = _this.serialize();
				_this.find('#submit').prop('disabled', true);
				$.ajax({url: '/local/templates/lazaret/ajax/',type: 'POST',dataType: 'json',data: dataS}).done(function(jsonResponce) {
					if(jsonResponce.status == 'success') {
						location.href = jsonResponce.paymentLink;
					} else {
						_this.find('#submit').prop('disabled', false);
						alert("Произошла ошибка. Обратитесь в поддерку или попробуйте позднее");
					}
				});
				return false;
			break;
		}
	});

	$('.overlay').click(function() {
		$(this).remove();
	});

	$('input[field="362"], .widget-popup--phone-mask').mask("+7(999)999-99-99");

	/**
	 * mobile widget popup
	 * @type {jQuery|HTMLElement}
	 */
	//var wp = $('.widget-popup--wrapper');
	var wp = $('#mobile-widget-popup');
	$('.js--get-consult').on('click', function(e) {
		e.preventDefault();
		wp.addClass('widget-popup--wrapper--show');
	});
	$('.widget-popup--close').on('click', function(e) {
		e.preventDefault();
		wp.removeClass('widget-popup--wrapper--show');
	});

	$('.js--send-consult').on('click', function(e) {
		e.preventDefault();
		var phoneElement = $(this).parents('.widget-popup--body--form').find('input'),
		phone = phoneElement.val();
		if(phone == "") {
			alert("Введите номер телефона");
			return false;
		}
		$.ajax({url: '/domg/ajax.php',type: 'POST',data: {phone: phone}}).done(function() {
			ComagicWidget.sitePhoneCall({phone:phone.replace(/\D/g,''), delayed_call_time: 0 , group_id: null}, function(resp){});
			phoneElement.val("");
			alert("Ваша заявка отправлена, в ближайшее время вам перезвонят.");
			wp.removeClass('widget-popup--wrapper--show');
		});
	});

});

/**
 * callbacknowtwo
 * @returns {boolean}
 */
function callbacknowtwo() {
	//ComagicWidget.openSitePhonePanel();

	var wp = $('#widget-popup');
	wp.addClass('widget-popup--wrapper--show');

	// ComagicWidget.openSitePhonePanel();
	//yaCounter30904456.reachGoal('ZVONOK');ComagicWidget.openSitePhonePanel();
	return true;
}

/**
 * Init widget popup
 */
var wPopup = new widgetPopup("widget-popup");