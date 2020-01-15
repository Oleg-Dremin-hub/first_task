//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
const firstForm = document.getElementById('first_form');
let firstFormInputs = firstForm.querySelectorAll(".form-group input, select");
let formData = JSON.parse(localStorage.getItem('formData')) || {};

var phones = [{ "mask": "+1 (###) ###-####" }];
$('#textbox').inputmask({
    mask: phones,
    greedy: false,
    definitions: { '#': { validator: "[0-9]", cardinality: 1 } }
});
$('.countrypicker').countrypicker();


$(document).ready(function() {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');
    allBackBtn = $(".backBtn");

    allWells.hide();

    navListItems.click(function(e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function() {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');

});

$('#quesform').submit(function(event) {
    event.preventDefault();
    $.ajax({
        url: 'action.php',
        type: 'post',
        data: $('#quesform').serialize(),
        success: function(result) {
            alert('Данные успешно сохранены!!!')
        }
    });
});

Share = {
    facebook: function(purl, ptitle, pimg, text) {
        url = 'http://www.facebook.com/sharer.php?s=100';
        url += '&p[title]=' + encodeURIComponent(ptitle);
        url += '&p[summary]=' + encodeURIComponent(text);
        url += '&p[url]=' + encodeURIComponent(purl);
        url += '&p[images][0]=' + encodeURIComponent(pimg);
        Share.popup(url);
    },
    twitter: function(purl, ptitle) {
        url = 'http://twitter.com/share?';
        url += 'text=' + encodeURIComponent(ptitle);
        url += '&url=' + encodeURIComponent(purl);
        url += '&counturl=' + encodeURIComponent(purl);
        Share.popup(url);
    },

    popup: function(url) {
        window.open(url, '', 'toolbar=0,status=0,width=626,height=436');
    }
};

if (formData) {

    for (let i = 0; i < firstFormInputs.length; i++) {
        // console.log(formData);
        // console.log(firstFormInputs[i].name);
        console.log(formData);
        // firstFormInputs[i].value = formData[firstFormInputs[i].name];
    }

}


for (let i = 0; i < firstFormInputs.length; i++) {
    firstFormInputs[i].addEventListener('input', (e) => {
        formData[e.target.name] = e.target.value;
        console.log(formData);
        localStorage.setItem('formData', JSON.stringify(formData));
    });
}