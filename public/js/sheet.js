$(document).ready(function() {
    $('#tabs .tab').on('click', function(){
        $('#tabs .tab').removeClass('active');
        $(this).addClass('active');
        $('#tabs .tab').css('transition', 'all 0.3s ease');
    });

    $('#tab-1').on('click', function(){
        $('#sheet').slideDown(500);
        $('#traits').slideUp(500);
        $('#guild').slideUp(500);
    });

    $('#tab-2').on('click', function(){
        $('#sheet').slideUp(500);
        $('#traits').slideDown(500);
        $('#guild').slideUp(500);
    });

    $('#tab-3').on('click', function(){
        $('#sheet').slideUp(500);
        $('#traits').slideUp(500);
        $('#guild').slideDown(500);
    });

    $('#sheet .row-3 .skill').on('mouseenter', function() {
        const skillId = $(this).attr('id');
        if ($('#skills-description .'+ skillId).length > 0) {
            $('#skills-description .'+ skillId).show();
            $('#skills-description').show();
        }
    });

    $('#sheet .row-3 .skill').on('mouseleave', function() {
        $('#skills-description .skill').hide();
        $('#skills-description').hide();
    });


    $('#sheet .row-4 .charateristic, #sheet .row-4 .aquatic_charateristic').on('mouseenter', function() {
        const skillId = $(this).attr('id');
        if ($('#charateristics-description .'+ skillId).length > 0) {
            $('#charateristics-description .'+ skillId).show();
            $('#charateristics-description').show();
        }
    });

    $('#sheet .row-4 .charateristic, #sheet .row-4 .aquatic_charateristic').on('mouseleave', function() {
        $('#charateristics-description div').hide();
        $('#charateristics-description').hide();
    });

    $('#sheet .row-5 .combat_mode').on('click', function() {
        if($('#sheet .row-5 .combat_mode').hasClass('combat-land')) {
            $('#sheet .row-3 .skill.land').hide();
            $('#sheet .row-4 .charateristic').hide();
            $('#sheet .row-4 .aquatic_charateristic').show();
            $('#sheet .row-5 .combat_mode').removeClass('combat-land')
            $('#sheet .row-5 .combat_mode').addClass('combat-aquatic') 
            $('#sheet .row-5 .land').hide();
            $('#sheet .row-5 .aquatic').show();
            $('#sheet .row-5 .empty').show();
            if($('#sheet .row-5 .aquatic.set-1').hasClass('active')) {
                $('#sheet .row-3 .skill.aquatic.set-1').show();
                $('#sheet .row-3 .skill.aquatic.set-2').hide();
            }else if ($('#sheet .row-5 .aquatic.set-2').hasClass('active')) {
                $('#sheet .row-3 .skill.aquatic.set-1').hide();
                $('#sheet .row-3 .skill.aquatic.set-2').show();
            }
        } else if($('#sheet .row-5 .combat_mode').hasClass('combat-aquatic')) {
            $('#sheet .row-3 .skill.aquatic').hide();
            $('#sheet .row-4 .aquatic_charateristic').hide();
            $('#sheet .row-4 .charateristic').show();
            $('#sheet .row-5 .combat_mode').removeClass('combat-aquatic')
            $('#sheet .row-5 .combat_mode').addClass('combat-land')
            $('#sheet .row-5 .land').show();
            $('#sheet .row-5 .aquatic').hide();
            $('#sheet .row-5 .empty').hide();
            if($('#sheet .row-5 .land.set-1').hasClass('active')) {
                $('#sheet .row-3 .skill.land.set-2').hide();
                $('#sheet .row-3 .skill.land.set-1').show();
            }else if ($('#sheet .row-5 .land.set-2').hasClass('active')) {
                $('#sheet .row-3 .skill.land.set-2').show();
                $('#sheet .row-3 .skill.land.set-1').hide();
            }
        }
    });

    $('#sheet .row-5 .swap').on('click', function() {
        if($('#sheet .row-5 .combat_mode').hasClass('combat-land')) {
            $('.weapon.land').toggleClass('active');
            $('#sheet .row-3 .weapon-skill.set-1.land').toggle();
            $('#sheet .row-3 .weapon-skill.set-2.land').toggle();
        } else if($('#sheet .row-5 .combat_mode').hasClass('combat-aquatic')) {
            $('.weapon.aquatic').toggleClass('active');
            $('#sheet .row-3 .weapon-skill.set-1.aquatic').toggle();
            $('#sheet .row-3 .weapon-skill.set-2.aquatic').toggle();
        }
    });

    $('#sheet .row-5 .equipment.land.set-1').addClass('active');
    $('#sheet .row-5 .equipment.aquatic.set-1').addClass('active');

    $('#sheet .row-6 .knowledge').on('mouseenter', function() {
        const knowledgeId = $(this).attr('id');
        if ($('#knowledge-description .'+ knowledgeId).length > 0) {
            $('#knowledge-description .'+ knowledgeId).show();
            $('#knowledge-description').show();
        }
    });

    $('#sheet .row-6 .knowledge').on('mouseleave', function() {
        $('#knowledge-description div').hide();
        $('#knowledge-description').hide();
    });

    $('#sheet .row-7 .bag').on('click', function() {
        $('#sheet .row-8 .item').toggle('hidden');
    });

    $('#sheet .row-8 .item').on('mouseenter', function() {
        const itemId = $(this).attr('id');
        if ($('#items-description .'+ itemId).length > 0) {
            $('#items-description .'+ itemId).show();
            $('#items-description').show();
        }
    });    
    
    $('#sheet .row-8 .item').on('mouseleave', function() {
        $('#items-description div').hide();
        $('#items-description').hide();
    });

    $('#knowledge-description div').hide();
    $('#knowledge-description').hide();
    $('#skills-description .skill').hide();
    $('#skills-description').hide();
    $('#charateristics-description div').hide();
    $('#charateristics-description').hide();
    $('#items-description div').hide();
    $('#items-description').hide();
    $('#traits').hide();
    $('#guild').hide();

    $('#traits input[type="checkbox"]').on('change', function(){
        if($('#traits input[type="checkbox"]:checked').length > 3) {
            $(this).prop("checked", false);  
        } else {
            if($(this).is(":checked")) {
                $(this).closest('.trait').removeClass('disabled');
            } else {
                $(this).closest('.trait').addClass('disabled');
            }
        }
    });

    $('#traits .trait .pasive').on('mouseenter', function() {
        const pasiveId = $(this).attr('id');
        if ($('.pasives-description .'+ pasiveId).length > 0) {
            $('.pasives-description .'+ pasiveId + ' div').show();
            $('.pasives-description .'+ pasiveId).show();
            $('.pasives-description').show();
        }
    });    
    
    $('#traits .trait .pasive').on('mouseleave', function() {
        $('.pasives-description div').hide();
        $('.pasives-description').hide();
    });
});