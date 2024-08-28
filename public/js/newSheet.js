$(document).ready(function(){
    $('#race').on('change', function(){
        if($(this).val() !== '') {
            getRace($(this).val());
            checkResume();
        } else  {
            restartRace();
        }
    });
    $('#rol').on('change', function(){
        if($(this).val() !== '') {
            getRol($(this).val());
            checkResume();
        } else {
            restartRol();
        }
    });
    $('.tab-link').on('click', function(){
        openTab($(this).data('id'));
    });
    $("input[name='gender']").change(function(){
        setTimeout(function() {
            openTab(3);
        }, 500);
    });
    
    $('.question-up').on('click', function() {
        setTimeout(function() {
            manageQuestions(false); 
        }, 500);
    });

    $('.question-down').on('click', function() {
        setTimeout(function() {
            manageQuestions(true); 
        }, 500);
    });

    $('#create').on('click', function(){
        save();
    });
    
    checkResume();
    personality();
    openTab(1);
});

function openTab(tab) 
{
    $('.tab-link').removeClass('active');
    $('.tab-link-' + tab).addClass('active');
    $('.tab-content').hide();
    $('#tab' + tab).show();
}

function setQuestions(questions, type)
{
    $('#tab4 .questions .question-' + type).each(function(index, element) {
        var id = $(this).attr('id');
        var idQuestion = parseInt(id.split('_')[1]);
        $('.block-3 .reward-' + idQuestion).remove();
    });
    $('#tab4 .questions .question-' + type).remove();
    $.each(questions, function(index, question) {
        var element = '';
        element = '<div id="question_' + question.id +'" class="question-content question-' + type + '"><div class="question">' + question.question + '</div>';
        $.each(question.answers, function(index, answer) {
            element += '<div class="answer ' + answer.style + '"><input type="radio" id="answer_' + answer.id +'" name="answer_' + question.id + '"><label for="answer_' + answer.id +'">'+ answer.answer + '</label></div>';
        });  
        element += '</div>';
        $('#tab4 .questions').append(element);
        $('#question_' + question.id + ' input').on('change', function() {
            var radioId = $(this).attr('id');
            var number = parseInt(radioId.split('_')[1]);
            getAnswerReward(number);
            setTimeout(function() {
                manageQuestions(true); 
            }, 500);
        });
    });
    if ($('.question-content.active').length == 0) {
        $('.question-content').first().addClass('active');
    }
}

function checkResume()
{
    if($('#race').val() == 0 && $('#rol').val() == 0) {
        $('.resume').hide();
    } else {
        $('.resume').show();
    }
}

function manageQuestions(next)
{
    var allQuestions = $('.question-content');
    var activeDiv = allQuestions.filter('.active');
    if (activeDiv.length) {
        var targetDiv = next ? activeDiv.nextAll('.question-content').first() : activeDiv.prevAll('.question-content').first();
        if (targetDiv.length) {
            activeDiv.removeClass('active');
            targetDiv.addClass('active');
        } else {
            setTimeout(function() {
                openTab(5); 
            }, 500);
        }
    } else {
        allQuestions.first().addClass('active');
    }
}

function getRace(raceId) {
    $.ajax({
        url: "/new-sheet/race",
        type: 'POST',
        data: {'race': raceId},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response){
            if(response.success){
                $('#charm').data('race', response.data.charm);
                $('#charisma').data('race', response.data.charisma);
                $('#aggressiveness').data('race', response.data.aggressiveness);
                $('#image').removeClass('human sylvari charr asura norn');
                $('#image').addClass(response.data.style);
                personality();
                setQuestions(response.data.questions, 'race');
                setRaceInfo(response.data);
                showCustomAnswers();
                openTab(2);
                $('.reward-pet').remove();
                $('input[type="radio"][name="answer_3"]').prop('checked', false);
            }
        },
        error: function(xhr, status, error){
            console.log(xhr.responseText);
        }
    });
}

function getRol(rolId) {
     $.ajax({
        url: "/new-sheet/rol",
        type: 'POST',
        data: {'rol': rolId},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response){
            if(response.success){
                $('#charm').data('rol', response.data.charm);
                $('#charisma').data('rol', response.data.charisma);
                $('#aggressiveness').data('rol', response.data.aggressiveness);
                personality();
                setQuestions(response.data.questions, 'rol');
                setRolInfo(response.data);
                showCustomAnswers();
                openTab(4);
            }
        },
        error: function(xhr, status, error){
            console.log(xhr.responseText);
        }
    });
}

function personality()
{
    var charmValue = (isNaN(parseInt($('#charm').data('race'))) ? 0 : parseInt($('#charm').data('race'))) +
                 (isNaN(parseInt($('#charm').data('rol'))) ? 0 : parseInt($('#charm').data('rol')));

    var charismaValue = (isNaN(parseInt($('#charisma').data('race'))) ? 0 : parseInt($('#charisma').data('race'))) +
                        (isNaN(parseInt($('#charisma').data('rol'))) ? 0 : parseInt($('#charisma').data('rol')));

    var aggressivenessValue = (isNaN(parseInt($('#aggressiveness').data('race'))) ? 0 : parseInt($('#aggressiveness').data('race'))) +
                          (isNaN(parseInt($('#aggressiveness').data('rol'))) ? 0 : parseInt($('#aggressiveness').data('rol')));

    var totalValue = charmValue + charismaValue + aggressivenessValue;
    
    if (totalValue > 0) {
        var startAngle = 90;
        
        var charmDegrees = (charmValue / totalValue) * 180;
        var charismaDegrees = (charismaValue / totalValue) * 180;
        var aggressivenessDegrees = (aggressivenessValue / totalValue) * 180;
        
        $('#charm').css('transform', 'translate(-50%, 0%) rotate(' + (startAngle + charmDegrees) + 'deg)');
        $('#charisma').css('transform', 'translate(-50%, 0%) rotate(' + (startAngle + charmDegrees + charismaDegrees) + 'deg)');
        $('#aggressiveness').css('transform', 'translate(-50%, 0%) rotate(' + (startAngle + charmDegrees + charismaDegrees + aggressivenessDegrees) + 'deg)');
    } else {
        $('.personality').css('transform', 'translate(-50%, 0%) rotate(90deg)');
    }
}

function setRaceInfo(data)
{
    $('.resume .resume-race-name').html(data.name);
    $('.resume .resume-race-description').html(data.description);
    setPasive(data.knowledge, 'race');
}

function setRolInfo(data)
{
    $('.resume .resume-rol-name').html(data.name);
    $('.resume .resume-rol-description').html(data.description);
    setPasive(data.knowledge, 'rol');
}

function setPasive(knowledge, type)
{
    if(type == 'rol') {
        $('.pasive-race.pasive-rol, .pasive-bio.pasive-rol, .pasive-race.pasive-rol.pasive-bio').each(function(index, element) {
            var text = $(this).find('.level').text();
            var level = parseInt(text.split(' ')[1]) - 1;
            $(this).find('.level').text('Nivel ' + level);
            $(this).removeClass('pasive-' + type);
        });
        $('.resume-pasive .pasive-' + type).remove();
    } else if(type == 'race') {
        $('.pasive-race.pasive-rol, .pasive-race.pasive-bio, .pasive-race.pasive-rol.pasive-bio').each(function(index, element) {
            var text = $(this).find('.level').text();
            var level = parseInt(text.split(' ')[1]) - 1;
            $(this).find('.level').text('Nivel ' + level);
            $(this).removeClass('pasive-' + type);
        });
        $('.resume-pasive .pasive-' + type).remove();
    }  else if( type == 'bio') {
        $.each(knowledge, function(index, value) {
            if($('.pasive.pasive-bio-' + value.question_id).length > 0) {
                var text = $('.pasive.pasive-bio-' + value.question_id + ' .level').text();
                var level = parseInt(text.split(' ')[1]) - 1;
                if(level == 0) {
                    $('.pasive.pasive-bio-' + value.question_id).remove();
                } else {
                    $('.pasive.pasive-bio-' + value.question_id + ' .level').text('Nivel ' + level);
                    $('.pasive.pasive-bio-' + value.question_id).removeClass('pasive-bio-' + value.question_id);
                }
            }
        });
    }
    
    var pasive_race = '';
    $.each(knowledge, function(index, value) {
        if(type == 'bio') {
            type = type + '-' + value.question_id;
        }
        if($('.resume-pasive .pasive.pasive-' + value.id).length > 0) {
            var text = $('.resume-pasive .pasive.pasive-' + value.id + ' .level').text();
            var level = parseInt(text.split(' ')[1]) + 1;
            $('.resume-pasive .pasive.pasive-' + value.id + ' .level').text('Nivel ' + level);
            $('.resume-pasive .pasive.pasive-' + value.id).addClass('pasive-' + type);
        } else {
            pasive_race += '<div class="pasive pasive-' + type + ' pasive-' + value.id + ' mt-3"><div class="title"><b>' + value.name + ':</b></div><div class="level" data-level="1">Nivel 1</div>' + value.description + '</div>';
        }
    });
    if(type == 'race') {
        $('.resume-pasive').prepend(pasive_race);
    } else  {
        $('.resume-pasive').append(pasive_race);
    }
}

function showCustomAnswers(raceId)
{
    var raceId = $('#race').val();
    $('#tab4 .questions .answer.race-1, #tab4 .questions .answer.race-2, #tab4 .questions .answer.race-3, #tab4 .questions .answer.race-4, #tab4 .questions .answer.race-5').hide();
    if(raceId !== '') {
        $('#tab4 .questions .answer.race-' + raceId).show();
    }
}

function getAnswerReward(answerId) 
{
    $.ajax({
        url: "/new-sheet/answer",
        type: 'POST',
        data: {'answerId': answerId},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response){
            setAnswerRewardEquipment(response.data.equipments, response.data.question.id);
            setAnswerRewardPet(response.data.pets, response.data.question.id);
            setAnswerRewardItem(response.data.items, response.data.question.id);    
            setAnswerRewardNpc(response.data.npcs, response.data.question.id);
            setAnswerRewardKnowledge(response.data.knowledge, response.data.question.id);
            
        },
        error: function(xhr, status, error){
            console.log(xhr.responseText);
        }
    });
}

function setAnswerRewardEquipment(equipments, id)
{
    $('.reward-content.reward-' + id).remove();
    $.each(equipments, function(index, value) {
        if(value.image == '') {
            value.image = 'Sin imagen';
        }
        var equipment = '<div class="reward-content mt-3 reward-equipment reward-' + id + '"><div class="reward"><div class="name">' + value.equipment_type.name + ': ' + value.name + '</div><div class="image"><img src="' + value.image + '"></div><div class="characteristic">' + value.rarity.increment + ' de ' + value.characteristic.name + '</div></div></div>';
        $('.block-3').append(equipment);
    });
}

function setAnswerRewardPet(pets, id)
{
    $('.reward-pet.reward-' + id).remove();
    $.each(pets, function(index, value) {
        if(value.image == '') {
            value.image = 'Sin imagen';
        }
        var pet = '<div class="reward-content mt-3 reward-pet reward-' + id + '"><div class="reward"><div class="name">Mascota: ' + value.name + '</div><div class="image"><img src="' + value.image + '"></div></div></div>';
        $('.block-3').append(pet);
    });
}

function setAnswerRewardItem(items, id)
{
    $('.reward-item.reward-' + id).remove();
    $.each(items, function(index, value) {
        if(value.image == '') {
            value.image = 'Sin imagen';
        }
        var item = '<div class="reward-content mt-3 reward-item reward-' + id + '"><div class="reward"><div class="name">Objeto: ' + value.name + '</div><div class="image"><img src="' + value.image + '"></div><div class="description">' + value.description + '</div></div></div>';
        $('.block-3').append(item);
    });
}

function setAnswerRewardNpc(npcs, id)
{
    $('.reward-npc.reward-' + id).remove();
    $.each(npcs, function(index, value) {
        if(value.image == '') {
            value.image = 'Sin imagen';
        }
        var npc = '<div class="reward-content mt-3 reward-npc reward-' + id + '"><div class="reward"><div class="name">Miembro de clan: ' + value.name + '</div><div class="image"><img src="' + value.image + '"></div><div class="description">' + value.description + '</div></div></div>';
        $('.block-3').append(npc);
    });
}

function setAnswerRewardKnowledge(knowledge, id)
{
    $('.reward-knowledge.reward-' + id).remove();
    $.each(knowledge, function(index, value) {
        var know = '<div class="reward-content mt-3 reward-npc reward-' + id + '"><div class="reward"><div class="name">' + value.name + '</div></div></div>';
        $('.block-3').append(know);
        knowledge[index].question_id = id;
    });
    setPasive(knowledge, 'bio');
}

function restartRol()
{
    $('#charm').data('rol', 0);
    $('#charisma').data('rol', 0);
    $('#aggressiveness').data('rol', 0);
    personality();
    $('.resume-rol-name').html('');
    $('.resume-rol-description').html('');
    setPasive([], 'rol');
}

function restartRace()
{
    $('#charm').data('race', 0);
    $('#charisma').data('race', 0);
    $('#aggressiveness').data('race', 0);
    personality();
    $('.resume-race-name').html('');
    $('.resume-race-description').html('');
    setPasive([], 'race');
}

function save()
{
    var sure = confirm("¿Guardamos la ficha?");

    if (sure) {
        var race = $('#race').val();
        var gender = $('input[name="gender"]:checked').val();
        var rol = $('#rol').val();
        var answers = [];
        $('.question-content').each(function() {
            var selectedId = $(this).find('input[type="radio"]:checked').attr('id');
            if (selectedId) {
                answers.push(selectedId);
            }
        });
        var name = $('#name').val();
        var wrongData = false;

        $('.tabs .tab-link .wrong').remove();
        var alert = '<div class="wrong">!</div>';

        if(race == '') {
            $('.tabs .tab-link-1').append(alert)
            wrongData = true;
        }

        if(gender == undefined) {
            $('.tabs .tab-link-2').append(alert)
            wrongData = true;
        }

        if(rol == '') {
            $('.tabs .tab-link-3').append(alert)
            wrongData = true;
        }

        if(answers.length !== 5) {
            $('.tabs .tab-link-4').append(alert)
            wrongData = true;
        }

        if(name == '') {
            $('.tabs .tab-link-5').append(alert)
            wrongData = true;
        }

        if(wrongData)
        {
            return false;
        }

        var charmValue = (isNaN(parseInt($('#charm').data('race'))) ? 0 : parseInt($('#charm').data('race'))) +
                 (isNaN(parseInt($('#charm').data('rol'))) ? 0 : parseInt($('#charm').data('rol')));

        var charismaValue = (isNaN(parseInt($('#charisma').data('race'))) ? 0 : parseInt($('#charisma').data('race'))) +
                            (isNaN(parseInt($('#charisma').data('rol'))) ? 0 : parseInt($('#charisma').data('rol')));

        var aggressivenessValue = (isNaN(parseInt($('#aggressiveness').data('race'))) ? 0 : parseInt($('#aggressiveness').data('race'))) +
                          (isNaN(parseInt($('#aggressiveness').data('rol'))) ? 0 : parseInt($('#aggressiveness').data('rol')));

        $.ajax({
        url: "/new-sheet/create",
        type: 'POST',
        data: {'race': race, 'gender': gender, 'rol': rol, 'answers': answers, 'name': name, 'charm': charmValue, 'charisma': charismaValue, 'aggressiveness': aggressivenessValue},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response){
            console.log(response);            
        },
        error: function(xhr, status, error){
            console.log(xhr.responseText);
        }
    });
    }
}