/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
    init();
});


function init() {

    initEvents();
    getSession();

}

function initEvents() {
    $('#linkRegister').on('click', function() {
        $('#registerUser').fadeIn(0);
        $('#loginUser').fadeOut(0);
    });

    $('#linkLogin').on('click', function() {
        $('#registerUser').fadeOut(0);
        $('#loginUser').fadeIn(0);
    });

    $('#btnRegister').on('click', function() {
        var numDocument = $('#txtNumDocumentNew').val();
        var pass = $('#txtPasswordNew').val();
        var userName = $('#txtUsernameNew').val();
        var userSurname = $('#txtUsersurnameNew').val();
        var birthday = $('#txtBirthdayNew').val();
        var email = $('#txtEmailNew').val();
        var cellNum = $('#txtCellnumNew').val();
        registerUser(numDocument, pass, userName, userSurname, birthday, email, cellNum);
    });
    $('#btnLogin').on('click', function() {
        var numDocument = $('#txtNumDocument').val();
        var pass = $('#txtPassword').val();
        loginUser(numDocument, pass);
    });

    $('#linkClose').on('click', function() {
        window.location.replace("index.html");
        closeSession();
    });
}

function registerUser(numDocument, pass, userName, userSurname, birthday, email, cellNum) {
    var tpass = $('#txtPasswordNew').val();
    var trpass = $('#txtrPasswordNew').val();
    if(tpass != trpass){
        alert('Diferente');
        return;
    }
    $.ajax({
        dataType: "json",
        url: 'php/registerUser.php',
        type: 'POST',
        data: 'numDocument=' + numDocument + '&pass=' + pass + '&userName=' + userName + '&userSurname=' + userSurname + '&birthday=' + birthday + '&email=' + email + '&cellNum=' + cellNum,
        success: function(data) {
            if (data.result == true) {
                alert('Estas Registrado');
                $('#menuInit').fadeOut();
                $('#menuRegister').fadeIn();
                $('#loginUser').fadeOut();
                $('#registerUser').fadeOut();
            }
        }
    });
}

function loginUser(numDocument, pass) {
    $.ajax({
        dataType: "json",
        url: 'php/login.php',
        type: 'POST',
        data: 'numDocument=' + numDocument + '&pass=' + pass,
        success: function(data) {
            if (data.result == true) {
                alert('Bienvenido');
                window.location.replace("profileAdmin.html");
                $('#menuInit').fadeOut();
                $('#menuRegister').fadeIn();
                $('#loginUser').fadeOut();
                $('#registerUser').fadeOut();
            } else {
                alert('El usuario no existe');
            }
        }
    });
}

function getSession() {
    $.ajax({
        dataType: "json",
        url: 'php/getSession.php',
        type: 'POST',
        data: '',
        success: function(data) {
            if (data.session == true) {
                $('#menuInit').fadeOut();
                $('#menuRegister').fadeIn();
            } else {
                $('#menuInit').fadeIn();
                $('#menuRegister').fadeOut();
            }
        }
    });
}

function closeSession() {
    $.ajax({
        dataType: "json",
        url: 'php/closeSession.php',
        type: 'POST',
        data: '',
        success: function(data) {
            if (data.session == true) {
                $('#menuRegister').fadeOut();
                $('#menuInit').fadeIn();
            } else {

            }
        }
    });
}

function open_win()
   {
      window.open(services.html);
   }