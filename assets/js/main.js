// Авторизация

$('.login-btn').click(function (e) {
    e.preventDefault(); //отключает стандартное поведение кнопки '.login-btn'
    
    let email = $('input[name="email"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: "vendor/signin.php",
        type: "POST",
        dataType: "json",
        data: {
            email: email,
            password: password
        }, 
        success (data) {
            if(data.status) {
                document.location.href = "/profile.php";
            } else {
                $('.msg').removeClass('none').text(data.message);
            }
        }
    });
});

// регистрация 

$('.register-btn').click(function (e) {
    e.preventDefault();
    
    let email = $('input[name="email"]').val(),
        password = $('input[name="password"]').val(),
        full_name = $('input[name="full_name"]').val(),
        login = $('input[name="login"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();

    $.ajax({
        url: "vendor/signup.php",
        type: "POST",
        dataType: "json",
        data: {
            email: email,
            password: password,
            full_name: full_name,
            login: login,
            password_confirm: password_confirm
        }, 
        success (data) {
            if(data.status) {
                document.location.href = "/index.php";
            } else {
                $('.msg').removeClass('none').text(data.message);
            }
        }
    });
});

// Изменение данных

$('.update-btn').click(function (e) {
    e.preventDefault();
    
    let id = $('input[name="id"]').val(),
        email = $('input[name="email"]').val(),
        password = $('input[name="password"]').val(),
        full_name = $('input[name="full_name"]').val(),
        login = $('input[name="login"]').val()
        
    $.ajax({
        url: "vendor/update.php",
        type: "POST",
        dataType: "json",
        data: {
            id: id,
            email: email,
            password: password,
            full_name: full_name,
            login: login,
        }, 
        success (data) {
            if(data.status) {
                $('.msg').removeClass('none').text(data.message);
            } else {
                $('.msg').removeClass('none').text(data.message);
            }
            }
    });
});